<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Google;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm(Request $request){
        return view('register');
    }

    public function register(Request $request){
       
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $password = $request->input('password');

        $users = new User();
        $users->first_name = $first_name;
        $users->last_name = $last_name;
        $users->email = $email;
        $users->password = Hash::make($password);
        $users->save();
        
        return view('/login');
    }
}
