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
                                    
                                    <div class="text-center w-75 m-auto">
                                        <a href="#">
                                            <span style="font-size: 18px;color:black;">HAPPY BLOOD</span>
                                        </a>
                                        <h5 class="text-uppercase text-center font-bold mt-4">Sign In </h5>
                                      
                                            
                                        

                                    </div>
                                   
                                     
                    
                                    
                                    <form id="loginUser" method="POST">
                                 
                                       <div id="login-message-error" style="display: none;" class="alert alert-dismissable alert-danger">

                                       </div>
                                        <div class="form-group mb-3">
                                            <label for="emailaddress">Email address</label>
                                            <input class="form-control" type="email" id="emailaddress" name="email" required="" placeholder="Enter your email">
                                        </div>
                         
                                        <div class="form-group mb-3">

                                            <label for="password">Password</label>
                                            <input class="form-control" type="password" name="password" required="" id="password" placeholder="Enter your password">
                                        </div>
    
                                        <!-- <div class="form-group mb-3">
                                            <div class="custom-control custom-checkbox checkbox-success">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                            </div>
                                        </div> -->
    
                                        <div class="form-group mb-0 text-center">
                                            <button type="submit" id="loginButton" class="btn btn-gradient btn-block" > Log In </button>
                                        </div>
    
                                    </form>
    
                                    <div class="row mt-4">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted mb-0">Don't have an account? <a href="{{url('registerdonor')}}" class="text-dark ml-1"><b>Sign Up</b></a></p>
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

<!-- Jquery  -->
<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"> </script>
<!-- End -->
<script src="{{asset('frontend/js/sweetalert.min.js')}}"></script>
        <!-- Vendor js -->
        <script src="{{asset('frontend/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('frontend/assets/js/app.min.js')}}"></script>
        <script>
            $(document).ready(function(){
               // Register New User
 $('#loginUser').on('submit',(function(e){
        //alert("You Are Good To Go");
        e.preventDefault();
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
            url:"{{ route('user.login.post') }}",
            type:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
                $('#loginButton').html('Checking Credentials');
            },
            success : function(response)
            {
                if($.isEmptyObject(response.login_errors))
                {
                  //$('#myModal').modal('toggle');
                  $("#login-message-error").fadeOut(1000,function(){
                       
                        
                    });

                    swal({
                    title: 'Success!',
                    text: "Credentials Right!",
                    type: 'success',
                    padding: '2em'
                    });
                    window.location.href="{{route('user.dashboard')}}"
                   $('#loginUser').trigger("reset");
                   
                    $("#loginButton").html('REGISTER');

                    // table.ajax.reload();
                }
                else
                {
                    $("#login-message-error").fadeOut(1000,function(){
                        $('#login-message-error').html('Invalid Credentials'); 
                    });
            
               
                }
            }
        });
        
       }));
            //End
				
            })
        </script>

    </body>

</html>