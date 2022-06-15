<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>HAPPY -  BLOOD BANK</title>
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
                                        <a href="index.html">
                                            <span style="font-size: 18px;color:black;">HAPPY BLOOD DONOR</span>
                                        </a>
                                        <h5 class="text-uppercase text-center font-bold mt-4">Sign In </h5>
                                      
                                            
                                        

                                    </div>
                                   
                                     
                    
                                    
                                    <form method="POST">
                                    @csrf 
                                       <div id="login-message-error" style="display: none;" class="alert alert-dismissable alert-danger">

                                       </div>
                                        <div class="form-group mb-3">
                                            <label for="emailaddress">Email address</label>
                                            <input class="form-control" type="email" id="emailaddress" name="user" required="" placeholder="Enter your email">
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


        <!-- Vendor js -->
        <script src="{{asset('frontend/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <!-- <script src="assets/js/app.min.js"></script> -->
        <!-- Jquery -->
        <script src="../js/jquery-2.1.4.min.js"> </script>
<!-- End -->
<script src="../js/sweetalert.min.js"></script>
        <script>
            $(document).ready(function(){
            	//Send OTP Message
			$('#request-otp').on('click',function(){
				//alert("You Are Good To Go");
				$('#otp-message-success').hide();
				$('#otp-message-error').hide();
				$('#otp-message').hide();
				var login_email = $('#emailaddress').val();
                if(login_email !=='')
                {
                    $.ajax({
				   url:"../send_otp.php",
				   type:"POST",
				   data:{login_email:login_email},
				   beforeSend:function()
				   {
                      $('#request-otp').html("Requesting OTP Code.........");
				   },
				   success:function(response)
				   {
					   var res = JSON.parse(response);
					   if(res.status =="okay")
					   {
						   $('#otp-message-success').show();
						   $('#otp-message-success').html(res.message);
						   $('#otp-message-error').fadeOut();
						   $('#otp-message').fadeOut();
						   $('#request-otp').html("Request OTP");

					   }
					   else
					   {
						$('#otp-message').fadeOut();
						$('#otp-success').fadeOut();
						$('#otp-message-error').fadeIn();
						$('#otp-message-error').html(res.errors);
						$('#request-otp').html("Request OTP");
					   }
				   }
			   })
                }
                else
                {
                    alert("Enter Your Email First");
                }
              
			});
             //login
             //alert("You Are Good To Go");
      $("#loginForm").on('submit',(function(e)
          { 
              //alert("You Are Good To Go");
              e.preventDefault();
              $.ajax({
                  url:"../logged.php",
                  type:"POST",
                  data:new FormData(this),
                  contentType:false,
                  cache:false,
                  processData:false,
                  success:function(data)
                  {
                      //$("#return-data").html(data);
                      if (data=="OK")
                       {
                          $("#loginButton").fadeIn();
                          $("#loginButton").html('<img src="images/ajax-loader.gif" /> &nbsp; Cool!!! Credentials Right....System Logging You in.');
                          setTimeout(' window.location.href = "../choose_dashboard.php"; ',3000);
                      }
          
                      else
                      {
                          
                          $("#login-message-error").fadeIn();
                          $("#login-message-error").html(data);
                      }
                  },
                  error:function()
                  {
                      
                  }
              });
              }));
      // End login
            });
        </script>
    </body>

</html>