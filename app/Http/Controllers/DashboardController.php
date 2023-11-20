<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\GAccess;
use App\Models\EventsCalendar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use League\Flysystem\AwsS3V3\AwsS3Adapter;
use Google_Client;
use Google_Service_Calendar;
use Session;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Twilio\Rest\Client;

class DashboardController extends Controller
{
    public function dashboard(Request $request){
        $users = User::all();
        return view('dashboard',compact('users'));
    }

    public function getUserDetails(Request $request){
        $users = User::all()->map(function($user) {
            return [
                'id'         => $user->id,
                'first_name' => $user->first_name,
                'last_name'  => $user->last_name,
                'email'      => $user->email,
                'image_src'  =>  \Storage::disk('s3')->url($user->profile_image),
            ];
        });
        return response()->json($users);
    }

    
    public function editUser(Request $request){
        $this->validate($request, [
            'id'           => 'required',
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'email'        => 'required|email',
            'password'     => 'required|string|min:6',
            'profileImage' => 'image', // This should match the field name in your FormData
        ]);

                $user      = User::find($request->id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
    
        $user->first_name = $request->input('first_name');
        $user->last_name  = $request->input('last_name');
        $user->email      = $request->input('email');
        $user->password   = Hash::make($request->input('password'));
    
        // Handle profile image upload
        if ($request->hasFile('profileImage')) {
            $imagePath    = $request->file('profileImage')->store('profile_images', 's3');
            $user->profile_image = $imagePath;
        }
    
        $user->save();
    
        return response()->json( ['message' => 'User updated successfully'] );    

    }

    //User Details Delete Function
    public function deleteUser(Request $request){
       $id   = $request->id;
       $user = User::find($id);
       
       if($user){
            $user->delete();
       }

       return view('dashboard')->with('success','User Deleted successfully');
    }

    //Google Calendar Connect Get The Events Functions
    public function handleGoogleCallback(Request $request)
    {

        $clientId     = "your GOOGLE Client Id";
        $clientSecret = 'Your Google Clien secret Key';
         
        $client       = new Google_Client(); //Google Calendar Create Client
        $client->setClientId($clientId);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri('postmessage');
        $client->setIncludeGrantedScopes(true);
        $client->setScopes(Google_Service_Calendar::CALENDAR_READONLY);
        $response     = $client->authenticate($request->code);
        
        $access_token = $client->getAccessToken(); //get the Access Token
        
        if ($access_token) {
            $client->setAccessToken($access_token);

            $service = new Google_Service_Calendar($client);
            $events  = $service->events->listEvents('primary'); //get the google calendar Events list

            $formattedEvents = [];

            foreach ($events->getItems() as $event) {
                $formattedEvent = [
                    'title' => $event->getSummary(),
                    'start' => $event->start->dateTime,
                    'end'   => $event->end->dateTime,
                ];
                $formattedEvents[] = $formattedEvent;
            }
            $user_id      = Auth()->user()->id;
            $accessToken  = $access_token['access_token'];
            $refreshToken = $access_token['refresh_token'];

            $token                = new GAccess();    // store the Access token & refresh token
            $token->user_id       = $user_id;
            $token->access_token  = $accessToken;
            $token->refresh_token = $refreshToken;
            $token->save();

            return response()->json($formattedEvents); 
            
        } else {
            return redirect()->route('dashboard')->with('error', 'Google Calendar connection failed.');
        }
        

    }

    //Synchronize Google Calendar Events Function
    public function synchroniseCalendar(Request $request){
        $user_id = Auth()->user()->id;
        $tokens  = GAccess::where('user_id',$user_id)->first(); //table to get the access_token & refresh_token
        if($tokens){
            $access_token  = $tokens->access_token;
            $refresh_token = $tokens->refresh_token;
            
            if($access_token){
                $clientId     = "Your GooGle ClientId";
                $clientSecret = 'Your Google Client Secret Key';
                $client       = new Google_Client();

                $client->setClientId($clientId);
                $client->setClientSecret($clientSecret);
                $client->setRedirectUri('postmessage');
                $client->setIncludeGrantedScopes(true);
                $client->setScopes(Google_Service_Calendar::CALENDAR_READONLY);
                $client->setAccessToken(['access_token' => $access_token,'refresh_token'=>$refresh_token]);
                
                if ( $client->isAccessTokenExpired() ) { 
                    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());  //access_token is expired generate new access token 
                    $newAccessToken       = $client->getAccessToken();
                    $tokens->access_token = $newAccessToken['access_token'];
                    $tokens->save();
                }
                
                $service = new Google_Service_Calendar($client);
                $events  = $service->events->listEvents('primary');
                $formattedEvents = [];
                
                foreach ($events->getItems() as $event) {
                    $formattedEvent = [
                        'event_id' => $event->getId(),
                        'title'    => $event->getSummary(),
                        'start'    => $event->start->dateTime,
                        'end'      => $event->end->dateTime,
                        'user_id'  => $user_id,
                    ];
                    $formattedEvents[] = $formattedEvent;
                    foreach($formattedEvents as $formattedEvent) {
                        $existingEvent = EventsCalendar::where('event_id', $formattedEvent['event_id'])->first();
                        
                        if ($existingEvent) {
                            $existingEvent->user_id        = $user_id;
                            $existingEvent->event_id       = $formattedEvent['event_id'];
                            $existingEvent->title          = $formattedEvent['title'];
                            $existingEvent->start_datetime = $formattedEvent['start'];
                            $existingEvent->end_datetime   = $formattedEvent['end'];
                            $existingEvent->save(); 
                        } else {
                            $events = new EventsCalendar();  //store the Events list
                            $events->user_id        = $user_id;
                            $events->event_id       = $formattedEvent['event_id'];
                            $events->title          = $formattedEvent['title'];
                            $events->start_datetime = $formattedEvent['start'];
                            $events->end_datetime   = $formattedEvent['end'];
                            $events->save();
                        }
                    }

                }
                return response()->json($formattedEvents);
            } else {
                return redirect()->route('dashboard')->with('error','Google Calendar Synchronise Failed.');
            }
        } else {
            echo "Not Get The Token";exit;
        }
    }

    public function stripe(){
        return view('stripe');
    }

    //stripe Payment Intent Create Function
    public function stripePost(Request $request){
       
        $stripe        = new \Stripe\StripeClient(
            "Your Stripe Secret Key"
        );  //create the stripe client 

        $paymentIntent = $stripe->paymentIntents->create([
            'amount'               => 10099,
            'currency'             => 'inr',
            'payment_method_types' => ['card'],
        ]);

        if ($paymentIntent) {    
            return response()->json($paymentIntent);
        } else {
            return redirect()->route('dashboard')->with('error','can not get the Client Secret');
        }
        
    }
    
    //Stripe Payment Confirmation Function
    public function stripeConfirmPayment(Request $request){
        Stripe::setApiKey('Your Stripe Secret Key');

        $paymentIntentId = $request->input('payment_intent');

        $paymentIntent   = PaymentIntent::retrieve($paymentIntentId);

        if ($paymentIntent->status === 'succeeded') {
            
            session()->flash('success', 'Payment was successful! Thank you for your purchase.');
            
            return redirect('dashboard');
        } else {
          
            session()->flash('error', 'Payment failed. Please try again.');
            return redirect('dashboard');
        }
    }

    //Express Payment to stripe connect Function 
    public function ExpressPayment(Request $request) {
        
        $stripe          = new \Stripe\StripeClient("Your Stripe Secret Key");
        
        $express_payment = $stripe->accounts->create([
            'country'          => 'SG',
            'type'             => 'express',
            'capabilities'     => [
              'card_payments'  => ['requested' => true],
              'transfers'      => ['requested' => true],
            ],
            'business_type'    => 'individual',
            'business_profile' => ['url' => 'www.filmplace.com'],
          ]);
    }

    public function sendMessage(Request $request) {
        $recipientPhoneNumber = $request->input('mobile_number');
        $messageBody          = $request->input('message');

        $twilio               = new Client(config('services.twilio.sid'), config('services.twilio.token')); //connect the Twilio whatsapp message app

        $message              = $twilio->messages->create(
            "whatsapp:$recipientPhoneNumber",
            [
                'from' => config('services.twilio.whatsapp.from'),
                'body' => $messageBody,
            ]
        
        );

        dd($message);
        if ($message == 'success') {
            return redirect('dashboard')->with('success', 'Message has been sent successfully');
        } else {
            return redirect('dashboard')->with('error', 'Failed to send Message');
        }
       
    }

}
 