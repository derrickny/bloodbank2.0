<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>HAPPY -  BLOOD BANK</title>
          <!-- CSRF Token -->
         <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Blood Donation" name="description" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('frontend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('frontend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg bg-gradient">
   <div class="row" style="padding-top: 20px;">
    <div class="col-12">
       
       </div>
       <div class="col-12">
         <a href="{{url('registerdonor')}}" style="text-align:center;color:antiquewhite;
         font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;text-decoration: none;
         margin-left:80%;"> Create Account Here </a>
       </div>
   </div>
       

      

            <div class="account-pages mt-5 pt-5 mb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-pattern">
    
                                <div class="card-body p-4">
    
                                    <div class="row mt-4">
                                        <div class="col-sm-12 text-center">
                                            <h2 class="text-muted mb-0">   <i class="fe-check-square"></i> &nbsp &nbsp Thank You, Your Blood Group Successfully Confirmed<br> You Can Sign In To See Your Blood Donations<br> <a href="{{url('logindonor')}}" class="text-dark ml-1"><b>Sign In</b></a></h2>
                                        </div>
                                    </div>

    
                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
    
                       
    
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end page -->