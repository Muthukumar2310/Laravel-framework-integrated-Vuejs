<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/axios@1.5.1/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/js/all.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/gh/jquery/jquery@3.6.4/dist/jquery.min.js"></script>
        <!-- Add this to your <head> section -->
        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.js"></script>
        <!-- <style>
            .card-body{
                color:black;
                font-size:20px;
                font-family:Times New Roman, Times, serif;
                background-color:white;
            }
            .card-header{
                color:black;
                font-size:20px;
                font-family: "Times New Roman", Times, serif;
                background-color:white;
            }
        </style> -->
    </head>
    <body class="antialiased">
        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item" >
                                <a class="nav-link"  href="{{route('dashboard')}}"  :style="styleObject">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  :style="styleObject">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  :style="styleObject">Services</a>
                            </li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"  :style="styleObject">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"  :style="styleObject">Register</a>
                            </li>
                            @endguest
                            
                            @auth
                            <li class="nav-item"  :style="styleObject">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="nav-link" type="submit">Logout</button>
                                </form>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container" >
                <div class="rows">
                    <div class="col-md-12" style="float:center;">
                        <h3>User Dashboard</h3>
                        <div class="card-header">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label for="colorSelect" class="nav-link" :style="styleObject">Change Color:</label>
                                    <select id="colorSelect" class="nav-link" v-model="activeColor">
                                        <option value="red">Red</option>
                                        <option value="blue">Blue</option>
                                        <option value="green">Green</option>
                                    </select>
                                    <div><img src="{{asset('uploads')}}/icon-5359553_1280.jpg" style="width:500px;height:500px;"></div>
                                </div>
                                <div class="col">
                                    <button id="showCalendarButton" class="btn btn-primary"><i class="fas fa-calendar-alt"></i>Connect Google Calendar</button>
                                    <button id="synchronise" style="margin-left:15px;" class="btn btn-primary"><i class="fas fa-sync"></i>synchronise</button><br></br>
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Profile Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="user in users" :key="user.id">
                                        <td>@{{ user.id }}</td>
                                        <td>@{{ user.first_name }}</td>
                                        <td>@{{ user.last_name }}</td>
                                        <td>@{{ user.email }}</td>
                                        <td>
                                            <!-- <img src="{{ Storage::disk('s3')->url('profile_images/') }}'+user.profile_image" alt="" style="max-width:100px;"> -->
                                            <img :src="user.image_src" alt="Profile Image" style="max-width: 100px;">
                                        </td>
                                        <td>
                                            <button @click="editUser(user.id)" class="btn btn-primary" style="margin-right:10px;"><i class="fas fa-edit"></i>Edit</button>
                                            <button @click="deleteUser(user.id)" class="btn btn-danger"><i class="fa-solid fa-trash"></i>Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--- USER EDIT MODAL  --->
                            <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Add form fields for editing user details -->
                                            <form>
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="firstname" class="col-md-4 col-form-label text-md-right" >{{ __('First Name') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="firstname" type="text" class="form-control" name="firstname"  v-model="first_name" required autofocus>
                                                    </div>
                                                </div>
                                                </br>

                                                <div class="form-group row" >
                                                    <label for="lastname" class="col-md-4 col-form-label text-md-right" >{{ __('Last Name') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="lastname" type="text" class="form-control" name="lastname"  v-model="last_name" required>
                                                    </div>
                                                </div>
                                                </br>

                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right" >{{ __('E-Mail Address') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control" name="email"  v-model="email" required>
                                                    </div>
                                                </div>
                                                </br>

                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right" >{{ __('Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control" name="password" v-model="password" required>
                                                    </div>
                                                </div>
                                                </br>
                                                <div class="form-group row">
                                                    <label for="profile_image" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image') }}</label>
                                                    <div class="col-md-6">
                                                        <input type="file" id="profile_image" @change="handleImageUpload" accept="image/*">
                                                    </div>
                                                </div>
                                                </br>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" v-on:click="saveUserChanges()">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---- STRIPE PAYMENT INTERGRATION ---->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">Stripe Payment Intergration With Laravel </div>
                                            <div class="card-body">
                                            <form id="payment-form">
                                                <div id="payment-element">
                                                    <div id="payment-request-button">
                                                        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}">
                                                        <!--Stripe.js injects the Payment Element-->
                                                    </div>
                                                </div>
                                                <br/>
                                                <button id="submit">
                                                    
                                                    <span id="button-text">Pay now</span>
                                                </button>
                                                <div id="payment-message" class="hidden"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <script src="https://accounts.google.com/gsi/client" onload="console.log('TODO: add onload function')"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="{{ asset('js/app.js') }}"></script>

        <script>
              $(document).ready(function() {
                    $.ajax({
                        url : "{{ route('stripePost') }}",
                        method:"post",
                        data:{
                            "_token": "{{ csrf_token() }}"
                        },
                        success:function(response){
                            console.log(response);
                            const stripe = Stripe('pk_test_51NAukPSCQTUCIbUUVvvHl5GbkzXDtf0TIEIwiVhryRl7f0pnPZZFoPIOj2z1flCpWM4pingcfXPd5cSOMCad9vCe00gDKyu3sl');
                            const appearance = {  
                                theme: 'flat',
                                variables: { colorPrimaryText: '#262626' }
                            };
                            const options = {
                                layout: {
                                    type: 'tabs',
                                    defaultCollapsed: false,
                                }
                            };
                            const clientSecret = response;

                            const elements = stripe.elements({ clientSecret, appearance });
                            const paymentElement = elements.create('payment', options);
                            paymentElement.mount('#payment-element');
                        }
                    });
                        

                    var calendarEl = document.getElementById('calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridMonth',
                        events: [], // Fetch events from the route we defined
                    });
                    calendar.render();

                    var googleClientId = "1073622764599-rdmsi6189p78fbq33tfpgalglge1cgtr.apps.googleusercontent.com";

                    const client = google.accounts.oauth2.initCodeClient({
                        client_id: googleClientId,
                        scope: 'https://www.googleapis.com/auth/calendar.readonly',
                        ux_mode: 'popup',
                        redirect_uri: 'postmessage',
                        callback: (response) => {
                            console.log(response);
                            var code = response.code;
                            handleGoogle(code);
                        },
                    });

                    $('#showCalendarButton').on('click', function() {
                        client.requestCode()
                    });

                    function handleGoogle(code) {
                        $.ajax({
                            url:"{{ route('handleGoogleCallback') }}",
                            method:"get",
                            data:{
                                code : code
                            },
                            success:function(response){
                                var events = response;
                                calendar.addEventSource(events);
                            },
                            error:function(xhr,status,error){
                                console.error('Error updataing for the connect with googlecalendar:', xhr.responseText); 
                            }
                        });
                    }
                     
                    $('#synchronise').on('click',function(){
                        $.ajax({
                            url:"{{ route('synchroniseCalendar') }}",
                            method:"get",
                            success:function(response){
                                console.log(response);
                                var events = response;
                                calendar.removeAllEvents();
                                calendar.addEventSource(events);
                            },
                            error:function(xhr,status,error){
                                console.error('Error updating for Synchronise Calendar Events:',xhr.responseText);
                            }
                        });
                    });
                });
                
        </script>
    </body>
</html>