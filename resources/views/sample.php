public function redirectToGoogle(Request $request){

        $client = new Google_Client();
        $client->setClientId(config('google.web.client_id'));
        $client->setClientSecret(config('google.web.client_secret'));
        $client->setRedirectUri(config('google.web.redirect'));

        $client->addScope(Google_Service_Calendar::CALENDAR_READONLY);

        return redirect($client->createAuthUrl());
    }

    public function handleGoogleCallback(Request $request){
        $client->authenticate($request->get('code'));
        $access_token = $client->getAccessToken();
        if ($access_token) {
            $client->setAccessToken($access_token);
            $service = new Google_Service_Calendar($client);
            $events = $service->events->list('primary', ['maxResults' => 10]);
            return view('dashboard', ['events' => $events]);
        } else {
            return redirect()->route('dashboard')->with('error', 'Google Calendar connection failed.');
        }

    }

    Route::get('/auth/google', [DashboardController::class,'redirectToGoogle']);
    Route::get('/auth/google/callback', [DashboardController::class,'handleGoogleCallback']);

    $('#showCalendarButton').on('click', function() {
                    var googleApiKey = "AIzaSyB8EQrgUvNOztKCnyWsdQ_QEu5O-2sEkb0";
                    var googleClientId = "1073622764599-5d1981r84suriji2nmvh6j8nheeu547l.apps.googleusercontent.com"; 

                    gapi.load('client', function() {
                        gapi.client.init({
                            apiKey: googleApiKey,
                            clientId: googleClientId,
                            discoveryDocs: ['https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest'],
                            scope: 'https://www.googleapis.com/auth/calendar.readonly',
                        }).then(function() {
                            gapi.auth2.getAuthInstance().signIn().then(listCalendarEvents);
                        });
                    });
                });

                function listCalendarEvents() {
                    var request = gapi.client.calendar.events.list({
                        'calendarId': 'primary',
                        'timeMin': (new Date()).toISOString(),
                        'maxResults': 10,
                        'singleEvents': true,
                        'orderBy': 'startTime'
                    });

                    request.execute(function(response) {
                        var events = response.items;
                    });
                }

                // $('#showCalendarButton').on('click', function() {
                //     var googleApiKey = "AIzaSyAGThyA2NhUT_0qNT7eQDdMrsvWJmtDYDs";
                //     var googleClientId = "{{ env('GOOGLE_CLIENT_ID') }}";
                //     gapi.load('client', function() {
                //         gapi.client.init({
                //             apiKey: googleApiKey,
                //             clientId: googleClientId,
                //             discoveryDocs: ['https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest'],
                //             scope: 'https://www.googleapis.com/auth/calendar.readonly',
                //         }).then(function() {
                //             // Client is initialized and ready to use.
                //             listCalendarEvents(response); // Call the function after the client is initialized
                //         });
                //     });
                // });

                // function listCalendarEvents() {
                //     alert(response);
                //     gapi.client.calendar.events
                //         .list({
                //             calendarId: 'primary', // Use 'primary' for the user's primary calendar
                //             timeMin: new Date().toISOString(),
                //             maxResults: 10, // Specify the number of events to retrieve
                //             singleEvents: true,
                //             orderBy: 'startTime',
                //         })
                //         .then(function(response) {
                //             var events = response.result.items;
                //             // Process the list of events here.
                //         });
                // }
