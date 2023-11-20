<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
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
        <!-- Add this in the head section of your HTML document -->

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}

            #viewMessage {
                width: 567px;
                height: 200px;
                border: 1px solid #ccc;
                overflow-y: scroll;
                padding: 10px;
                background-image:url("<?php echo e(asset('uploads')); ?>/mydownload.jpg");
                background-repeat: no-repeat;
                background-size:cover;
            }
            
            #viewChat{
                width: 567px;
                height: 200px;
                border: 1px solid #ccc;
                overflow-y: scroll;
                padding: 10px;
                background-image:url("<?php echo e(asset('uploads')); ?>/mydownload.jpg");
                background-repeat: no-repeat;
                background-size:cover;
            }
            

            .fas.fa-user {
                /* Customize the FontAwesome user icon styles */
                margin-right: 5px;
            }
            
            #message-container {
                max-width: 600px;
                margin: 50px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            #message-container1{
                max-width: 600px;
                margin: 50px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            #chat {
                width: calc(100% - 40px);
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 10px;
                resize: none;
            }

            #message1{
                width: calc(100% - 40px);
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 10px;
                resize: none;
            }

            #send {
                width: 50%;
                padding: 10px;
                background-color: #25d366;
                color: #fff;
                border: none;
                border-radius: px;
                cursor: pointer;
            }

            #chatbtn{
                width: 50%;
                padding: 10px;
                background-color: #25d366;
                color: #fff;
                border: none;
                border-radius: 10px;
                cursor: pointer; 
            }

            #message-form{
                max-width: 85%;
                margin: 40px auto;
                background-color: #fff;
                padding: 10px;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
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
                                <a class="nav-link"  href="<?php echo e(route('dashboard')); ?>"  :style="styleObject">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  :style="styleObject">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  :style="styleObject">Services</a>
                            </li>
                            <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"  :style="styleObject">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"  :style="styleObject">Register</a>
                            </li>
                            <?php endif; ?>
                            
                            <?php if(auth()->guard()->check()): ?>
                            <li class="nav-item"  :style="styleObject">
                                <form action="<?php echo e(route('logout')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button class="nav-link" type="submit">Logout</button>
                                </form>
                            </li>
                            <?php endif; ?>
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
                                        <div><img src="<?php echo e(asset('uploads')); ?>/icon-5359553_1280.jpg" style="width:500px;height:500px;"></div>
                                    </div>
                                    <div class="col">
                                        <button id="showCalendarButton" class="btn btn-primary"><i class="fas fa-calendar-alt"></i>Connect Google Calendar</button>
                                        <button id="synchronise" style="margin-left:15px;" class="btn btn-primary"><i class="fas fa-sync"></i>synchronise</button><br></br>
                                        <div id="calendar"></div>
                                    </div>
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
                                        <td>{{ user.id }}</td>
                                        <td>{{ user.first_name }}</td>
                                        <td>{{ user.last_name }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>
                                            <!-- <img src="<?php echo e(Storage::disk('s3')->url('profile_images/')); ?>'+user.profile_image" alt="" style="max-width:100px;"> -->
                                            <img :src="user.image_src" alt="Profile Image" style="max-width: 100px;">
                                        </td>
                                        <td>
                                            <button @click="editUser(user.id)" class="btn btn-primary" style="margin-right:10px;"><i class="fas fa-edit"></i>Edit</button>
                                            <button @click="deleteUser(user.id)" class="btn btn-danger"><i class="fa-solid fa-trash"></i>Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                                                <?php echo csrf_field(); ?>
                                                <div class="form-group row">
                                                    <label for="firstname" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('First Name')); ?></label>

                                                    <div class="col-md-6">
                                                        <input id="firstname" type="text" class="form-control" name="firstname"  v-model="first_name" required autofocus>
                                                    </div>
                                                </div>
                                                </br>

                                                <div class="form-group row" >
                                                    <label for="lastname" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Last Name')); ?></label>

                                                    <div class="col-md-6">
                                                        <input id="lastname" type="text" class="form-control" name="lastname"  v-model="last_name" required>
                                                    </div>
                                                </div>
                                                </br>

                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('E-Mail Address')); ?></label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control" name="email"  v-model="email" required>
                                                    </div>
                                                </div>
                                                </br>

                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Password')); ?></label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control" name="password" v-model="password" required>
                                                    </div>
                                                </div>
                                                </br>
                                                <div class="form-group row">
                                                    <label for="profile_image" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Profile Image')); ?></label>
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
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                        <?php if(session('success')): ?>
                                        <div class="alert alert-success">
                                            <?php echo e(session('success')); ?>

                                        </div>
                                    <?php endif; ?>

                                    <?php if(session('error')): ?>
                                        <div class="alert alert-danger">
                                            <?php echo e(session('error')); ?>

                                        </div>
                                    <?php endif; ?>
                                            <div class="card-header">Stripe Payment Intergration With Laravel </div>
                                            <div class="card-body">
                                            <form id="payment-form">
                                                <div id="payment-element">
                                                    <div id="payment-request-button">
                                                        <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(csrf_token()); ?>">
                                                        <!--Stripe.js injects the Payment Element-->
                                                    </div>
                                                </div>
                                                <br>
                                                    <button type="button" class="btn btn-primary" id="checkout" >Pay now</button>
                                                    <button type="button" class="btn btn-primary" id="expressPayment" style="margin-left:20px;" >Express Pay</button>
                                                    <div id="payment-message" class="hidden"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Firebase Cloud Messaging
                                            </div>
                                            <div class="card-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div id="viewMessage"></div>
                                                            <form id="message-container">
                                                                <label for="users">user1</label>
                                                                <input type="text" name="chat" id="chat" class="form-control" placeholder="Type your Message"><br/>
                                                                <!-- Combine text and file input into one -->
                                                                <input type="file" name="file" id="file" class="form-control" style="display: none;">
                                                                <label for="file" id="fileLabel" style="cursor: pointer;">Attach File</label>
                                                                <button id="send" type="button" class="btn btn-primary" name="send">send</button>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div id="viewChat"></div>
                                                            <form id="message-container1">
                                                                <label for="users">user2</label>
                                                                <input type="text" name="message1" id="message1" class="form-control" placeholder="Type your Message"><br/>
                                                                <!-- Combine text and file input into one -->
                                                                <input type="file" name="file_input" id="file_input" class="form-control" style="display: none;">
                                                                <label for="file_input" id="fileInputLabel" style="cursor: pointer;">Attach File</label>
                                                                <button type="button" class="btn btn-primary" name="chat" id="chatbtn">send</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                    <?php if(session('success')): ?>
                                        <div class="alert alert-success">
                                            <?php echo e(session('success')); ?>

                                        </div>
                                    <?php endif; ?>

                                    <?php if(session('error')): ?>
                                        <div class="alert alert-danger">
                                            <?php echo e(session('error')); ?>

                                        </div>
                                    <?php endif; ?>
                                        <div class="card">
                                            <div class="card-header">
                                                Twilio Whatsapp Messager Intergeation 
                                            </div>
                                            <div class="card-body">
                                                <form id="message-form">
                                                    <div class="mb-3">
                                                        <label for="mobile_number" class="form-label">Mobile Number : </label>
                                                        <input type="email" class="form-control" id="mobile_number" placeholder="">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message" class="form-label">Message : </label>
                                                        <textarea class="form-control" id="text" name="text" rows="3"></textarea>
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <button type="button" id="whatsappBtn" name="whatsappBtn" class="btn btn-primary me-md-2">Send</button>
                                                    </div>
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
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <script src="https://www.gstatic.com/firebasejs/5.0.2/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.0.2/firebase-database.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.0.2/firebase-storage.js"></script>
        <script>
            // import firebase from "firebase/app";
            // import "firebase/compat/database";
              $(document).ready(function() {
                var response_data = {};
                var stripe = {};
                var elements = {};
                    $.ajax({
                        url : "<?php echo e(route('stripePost')); ?>",
                        method:"post",
                        data:{
                            "_token": "<?php echo e(csrf_token()); ?>"
                        },
                        success:function(response){
                            response_data = response;
                            stripe = Stripe('pk_test_51OCxRyCK8wzn3oW9t8q1cJIIDskMx12LmAwpjGIf9gJk6vaNu1nJk8QkJBeOuRuJhcPKncADxjy1cPEg2E8zpXmG00t5NECnpE');
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
                            const clientSecret = response.client_secret;
                            const paymentIntent_id = response.id;
                            elements = stripe.elements({ clientSecret});
                            const paymentElement = elements.create('payment', options);
                            paymentElement.mount('#payment-element');
                        }
                    });

                    $('#checkout').on('click',function(){
                         console.log(response_data);
                        var clientSecret = response_data['client_secret'];
                        var id = response_data['id'];
                        stripe.confirmPayment({
                            elements,
                            confirmParams : {
                                return_url : "<?php echo e(route('stripeConfirmPayment')); ?>",
                            },
                        }).then(function(response) {
                            console.log(response);
                        });
                    });

                    var calendarEl = document.getElementById('calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridMonth',
                        events: [], 
                    });
                    calendar.render();

                    $('#expressPayment').on('click',function(){
                        var clientSecret = response_data['client_secret'];
                        var id = response_data['id'];
                        var account_id = "acct_1OCxRyCK8wzn3oW9";

                        $.ajax({
                            url : "<?php echo e(route('ExpressPayment')); ?>",
                            method:"post",
                            data:{
                                account_id : account_id,
                                "_token": "<?php echo e(csrf_token()); ?>"
                            },
                            success:function(response){
                                console.log('express payment connect succesfully');
                            },
                            error:function(xhr,status,error){
                                console.error('Error updataing for the Express connect Payment :', xhr.responseText);
                            }
                        });
                    });

                    var googleClientId = "14696284098-528lvlf9u4klpeu93pbb3famqgu0d2qa.apps.googleusercontent.com";

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
                            url:"<?php echo e(route('handleGoogleCallback')); ?>",
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
                            url:"<?php echo e(route('synchroniseCalendar')); ?>",
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

                   
                    var firebaseConfig = {
                        apiKey: "AIzaSyBqVSKBuERlMgAc0LxXVhm_586mc-BXOt0",
                        authDomain: "laravel-6c7bd.firebaseapp.com",
                        databaseURL: "https://laravel-6c7bd-default-rtdb.firebaseio.com",
                        projectId: "laravel-6c7bd",
                        storageBucket: "laravel-6c7bd.appspot.com",
                        messagingSenderId: "14696284098",
                        appId: "1:14696284098:web:327a3251036271804d605b",
                        measurementId: "G-31R7LLX8KK"
                    };
                    firebase.initializeApp(firebaseConfig);
                    var database = firebase.database();
                    var storage = firebase.storage();
                    var storageRef = storage.ref();

                    $('#send').on('click',function(){
                        var userId = "<?php echo e(Auth()->user()->id); ?>";
                        var email = "<?php echo e(Auth()->user()->email); ?>";
                        var name = "User1";
                        var message = $('#chat').val();
                        // var file = document.getElementById('file');
                        var fileInput = document.getElementById('file');
                        var selectedFile = fileInput.files[0];
                        
                        var metadata = {
                        contentType: 'image/jpeg'
                        };

                        console.log(selectedFile);

                        if(message){
                            sendMessage(userId, name, email, message);
                        }else if(selectedFile) {
                            sendFile(userId, name, email, selectedFile);
                        }
                    });

                    function sendFile(userId,name,email,selectedFile){
                        var metadata = {
                            contentType: 'image/jpeg'
                        };
                        var uploadTask = storageRef.child('images/' + selectedFile.name).put(selectedFile, metadata);

                        uploadTask.on(firebase.storage.TaskEvent.STATE_CHANGED, 
                        (snapshot) => {
                            var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                            console.log('Upload is ' + progress + '% done');
                            switch (snapshot.state) {
                            case firebase.storage.TaskState.PAUSED:
                                console.log('Upload is paused');
                                break;
                            case firebase.storage.TaskState.RUNNING: 
                                console.log('Upload is running');
                                break;
                            }
                        },
                        (error) => {
                            switch (error.code) {
                            case 'storage/unauthorized':
                                break;
                            case 'storage/canceled':
                                break;
                            case 'storage/unknown':
                                break;
                            }
                        }, 
                        () => {
                        
                            uploadTask.snapshot.ref.getDownloadURL().then((downloadURL) => {
                                console.log('File available at', downloadURL);
                                var fileURL = downloadURL;

                                var postListRef = firebase.database().ref('message/' + userId);
                                var newPostRef = postListRef.push();
                                newPostRef.set({
                                    'userId' : userId,
                                    'username':name,
                                    'email':email,
                                    'file':fileURL,
                                });

                                var ref = firebase.database().ref('message/' + userId);
                                ref.once('value', (snapshot) => {
                                    snapshot.forEach((childSnapshot) => {
                                        var childKey = childSnapshot.key;
                                        var childData = childSnapshot.val();
                                        console.log(childData);
                                        $('#viewChat').append('<p>' + childData.username + ': <img src="' + childData.file + '" alt="Image"></p>');
                                    });
                                });
                            });
                        });
                    }

                    function sendMessage(userId,name,email,message){
                        var postListRef = firebase.database().ref('message/' + userId);
                        var newPostRef = postListRef.push();
                        newPostRef.set({
                            'userId': userId,
                            'username': name,
                            'email': email,
                            'message': message,
                        });

                        var ref = firebase.database().ref('message/' + userId);
                            ref.limitToLast(1).once('value', (snapshot) => {
                                snapshot.forEach((childSnapshot) => {
                                    var childKey = childSnapshot.key;
                                    var childData = childSnapshot.val();
                                    console.log(childData);
                                    var emailRegex = /^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/;
                                    var mobileRegex = /^[0-9\-\(\)\ ]+$/;
                                    var mobileNumberRegex = /^(zero|one|two|three|four|five|six|seven|eight|nine)(\s(zero|one|two|three|four|five|six|seven|eight|nine)){9}$/;
                                    
                                    if (emailRegex.test(childData.message) || mobileRegex.test(childData.message) || mobileNumberRegex.test(childData.message)) {
                                            var error = 'Your message an censor.';
                                            $('#viewChat').append('<p>' + childData.username + ' : ' + error + '</p>');
                                        } else{
                                            
                                            var pattern = /\b\d+\b|\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}\b/g;
                                            var filteredText = childData.message && childData.message.replace(pattern, 'xxxxxxxxxx');
                                            if(filteredText){
                                                var usernameIconClass = 'fa-user';
                                                $('#viewChat').append('<p class="message">' +'<i class="fas ' + usernameIconClass + '"></i>' + '<span class="username">' + childData.username + '</span>: ' + filteredText + '</p>');
                                            }else{
                                                if(childData.file){
                                                    $('#viewChat').append('<p class="message">' +
                                                        '<i class="fas ' + usernameIconClass + '"></i>' +
                                                        '<span class="username">' + childData.username + '</span>: ' +
                                                        '<img src="' + childData.file + '" alt="Image"></p>');
                                                }else{
                                                    $('#viewChat').append('<p class="message">' +
                                                        '<i class="fas ' + usernameIconClass + '"></i>' +
                                                        '<span class="username">' + childData.username + '</span>: ' + childData.message + '</p>');
                                                } 
                                            }
                                        }
                                        $('#chat').val('');
                                });
                            });
                    }
                    
                    $('#chatbtn').on('click',function(){
                        var userId = "2";
                        var email = "user2@gmail.com";
                        var name = "User2";
                        var message = $('#message1').val();
                        // var file = document.getElementById('file');
                        var fileInput = document.getElementById('file_input');
                        var selectedFile1 = fileInput.files[0];
                        
                        var metadata = {
                        contentType: 'image/jpeg'
                        };

                        console.log(selectedFile1);

                        if(message){
                            sendMessage1(userId, name, email, message);
                        }else if(selectedFile1) {
                            sendFile1(userId, name, email, selectedFile1);
                        }
                    });

                    function sendMessage1(userId,name,email,message){
                        var postListRef = firebase.database().ref('chat/' + userId);
                        var newPostRef = postListRef.push();
                        newPostRef.set({
                            'userId': userId,
                            'username': name,
                            'email': email,
                            'message': message,
                        });

                        var ref = firebase.database().ref('chat/' + userId);
                        ref.limitToLast(1).once('value', (snapshot) => {
                            snapshot.forEach((childSnapshot) => {
                                var childKey = childSnapshot.key;
                                var childData = childSnapshot.val();
                                console.log(childData);
                                var emailRegex = /^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/;
                                var mobileRegex = /^[0-9\-\(\)\ ]+$/;
                                var mobileNumberRegex = /^(zero|one|two|three|four|five|six|seven|eight|nine)(\s(zero|one|two|three|four|five|six|seven|eight|nine)){9}$/;

                                if (emailRegex.test(childData.message) || mobileRegex.test(childData.message) || mobileNumberRegex.test(childData.message)) {
                                    var error = 'Your message an censor.';
                                    $('#viewMessage').append('<p>' + childData.username + ' : ' + error + '</p>');
                                } else {
                                    var pattern = /\b\d+\b|\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}\b/g;
                                    var filteredText = childData.message && childData.message.replace(pattern, 'xxxxxxxxxx');
                                    if(filteredText){
                                        var usernameIconClass = 'fa-user';
                                        $('#viewMessage').append('<p class="message">' +'<i class="fas ' + usernameIconClass + '"></i>' + '<span class="username">' + childData.username + '</span>: ' + filteredText + '</p>');
                                    }else{
                                        if(childData.file){
                                            $('#viewMessage').append('<p class="message">' +
                                                '<i class="fas ' + usernameIconClass + '"></i>' +
                                                '<span class="username">' + childData.username + '</span>: ' +
                                                '<img src="' + childData.file + '" alt="Image"></p>');
                                        }else{
                                            $('#viewMessage').append('<p class="message">' +
                                                '<i class="fas ' + usernameIconClass + '"></i>' +
                                                '<span class="username">' + childData.username + '</span>: ' + childData.message + '</p>');
                                        } 
                                    }
                                    
                                }
                                $('#message1').val('');
                            });
                        });
                    }

                    function sendFile1(userId,name,email,selectedFile1){
                        var metadata = {
                            contentType: 'image/jpeg'
                        };
                        var uploadTask = storageRef.child('files/'+ selectedFile1.name).put(selectedFile1, metadata);

                        uploadTask.on(firebase.storage.TaskEvent.STATE_CHANGED, 
                        (snapshot) => {
                            var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                            console.log('Upload is ' + progress + '% done');
                            switch (snapshot.state) {
                            case firebase.storage.TaskState.PAUSED:
                                console.log('Upload is paused');
                                break;
                            case firebase.storage.TaskState.RUNNING: 
                                console.log('Upload is running');
                                break;
                            }
                        },
                        (error) => {
                            switch (error.code) {
                            case 'storage/unauthorized':
                                break;
                            case 'storage/canceled':
                                break;
                            case 'storage/unknown':
                                break;
                            }
                        }, 
                        () => {
                        
                            uploadTask.snapshot.ref.getDownloadURL().then((downloadURL) => {
                                console.log('File available at', downloadURL);
                                var fileURL = downloadURL;

                                var postListRef = firebase.database().ref('chat/' + userId);
                                var newPostRef = postListRef.push();
                                newPostRef.set({
                                    'userId' : userId,
                                    'username':name,
                                    'email':email,
                                    'file':fileURL,
                                });

                                var ref = firebase.database().ref('chat/' + userId);
                                ref.once('value', (snapshot) => {
                                    snapshot.forEach((childSnapshot) => {
                                        var childKey = childSnapshot.key;
                                        var childData = childSnapshot.val();
                                        console.log(childData);
                                        $('#viewMessage').append('<p>' + childData.username + ': <img src="' + childData.file + '" alt="Image" style="width:200px;height:200px;"></p>');
                                    });
                                });
                            });
                        }); 
                    }
                    
                    $('#whatsappBtn').on('click',function(){
                        var mobileNumber = $('#mobile_number').val();
                        var Message = document.getElementById("text").value;

                        $.ajax({
                            url : "<?php echo e(route('sendMessage')); ?>",
                            method: "POST",
                            data : {
                                'mobile_number' : mobileNumber,
                                'message' : Message,
                                "_token": "<?php echo e(csrf_token()); ?>"
                            },
                            success:function(){
                                console.log("Message Send Successfully");
                            },
                            error:function(xhr,status,error){
                                console.log("Error Updating for the Error :" ,xhr.responseText);
                            }
                        });
                    });
                });
                
        </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\UserVue\resources\views/dashboard.blade.php ENDPATH**/ ?>