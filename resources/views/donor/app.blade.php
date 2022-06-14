<html>
    <head>
        <title>BLOOD|BANK</title>
       <meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontend/css/w3school.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/font-awesome.min.css')}}"/>

<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/html5shiv.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/sweetalert.min.j')}}s"></script>

		<!-- Toggle between adding and removing the
		"responsive" class to topnav when the user clicks on the icon!-->
		<script type="text/javascript">
			function myFunction() {
                //code
				var x= document.getElementById("myTopnav");
				if (x.className==="topnav") {
                    //code
					x.className +="responsive";
                }
				else
				{
					x.className ="topnav";
				}
            }
			var modal = document.getElementById('id01');
			//when the user clicks anywhere outside of the modal close it
			window.onclick = function(event)
			{
				if (event.target == modal) {
                    //code
					modal.style.display = "none";
                }
			}
			var mod = document.getElementById('id02');
			//when the user clicks anywhere outside of the modal ,close it\
			window.onclick = function(event)
			{
				if (event.target == mod) {
                    //code
					mod.style.display = "none";
                }
			}
			
		</script>
		
    <body>

	
        <section>
            
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                  <div class="header">
	<div class="container">
	<ul class="topnav" id="myTopnav">
		<li><a class="scroll-link active" href="#" data-id="intro">Home</a></li>
        <li><a href="#" class="scroll-link" data-id="about">About Donation</a> </li>
		<li><a href="#" class="scroll-link" data-id="camps">Hospitals</a></li>
		<li><a href="#" class="scroll-link" data-id="contact">Contact us</a></li>
        <li><a href="#" class="scroll-link" data-id="contact">Login</a></li>
		<li class="icon"><a href="javascript:void(0);" style="font-size: 15px;" onclick="myFunction()">&#9776;</a></li>
    </ul>
	    <!--/.navbar-->
	</div>
	<!--/.container-->
</div>  
                </div>
            </div>
            
        </section>
		
		 <section id="intro" class="page-section"><hr class="clearfix">
		<hr class="clearfix">
		<hr class="clearfix">
		
           
			
				<div class="row" style="font-family: helvetica;">
					<div class="col-md-4">
						<div class="register w3-hover-amber">
							<a style="text-decoration:none;color:#fff;" href="{{url('register')}}">Become A Blood Donor</a>
							<br>
						<br>
						
							
							<button onclick="document.getElementById('id02').style.display='block'" class="bt success">REGISTER</button>
							<div id="id02" class="mod1">
								
			
		                  </div>
						</div>
							</div>
						
						
					
					<div class="col-md-4 ">
						<div class="already w3-hover-pink">
							<strong>HOSPITAL</strong>
							<br>
						<br>
						<button onclick="document.getElementById('id01').style.display='block'" style="width: auto;" class="bt info">LOGIN</button>
						<div id="id01" class="mod">
							
							</div>
						</div>
						
						</div>
						
					
					<div class="col-md-4 ">
					<div id="eligible" class="w3-modal">
    <div class="w3-modal-content w3-padding-16">
      <div class="w3-container">
        <span onclick="document.getElementById('eligible').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <div class="row w3-padding-16">
		<div class="col-sm-6 col-md-6 col-lg-6 w3-card-4">
		<ul class="w3-ul">
      <li class="w3-padding-16 w3-black w3-text-white">Whole Blood Donation</li>
	  <li>Donation frequency: Every 56 days* </li>
	  <li>You must be in good health and feeling well**</li>
	  <li>You must be at least 16 years old in most states</li>
	  <li>You must weigh at least 110 lbs</li>
		</ul>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6 w3-card-4">
		<ul class="w3-ul">
      <li class="w3-padding-16 w3-black w3-text-white">Power Red Donation</li>
	  <li>Donation frequency: Every 112 days, up to 3 times/year* </li>
	  <li>Male donors+ must be at least 17 years old in most states, at least 5'1" tall and weigh at least 130 lbs</li>
	  <li>Female donors+ must be at least 19 years old, at least 5'5" tall and weigh at least 150 lbs</li>
	  
		</ul>
		</div>
		</div>
		<div class="row w3-padding-16">
		<div class="col-sm-6 col-md-6 col-lg-6 w3-card-4">
		<ul class="w3-ul">
      <li class="w3-padding-16 w3-black w3-text-white">Platelet Donation</li>
	  <li>Donation frequency: Every 7 days, up to 24 times/year*</li>
	  <li>You must be in good health and feeling well**</li>
	  <li>You must be at least 17 years old in most states </li>
	  <li>You must weigh at least 110 lbs</li>
		</ul>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6 w3-card-4">
		<ul class="w3-ul">
      <li class="w3-padding-16 w3-black w3-text-white">AB Elite Plasma Donation</li>
	  <li>Donation frequency: Every 28 days, up to 13 times/year* </li>
	  <li>You must have type AB blood</li>
	  <li>You must be in good health and feeling well**</li>
	  <li>You must weigh at least 110 lbs</li>
		</ul>
		</div>
		</div>
      </div>
    </div>
  </div>
						<div class="can w3-hover-lime">
						<strong>Who Can give blood?</strong>
						<br>
						<br>
						
							<button class="bt warning" onclick="document.getElementById('eligible').style.display='block'">Check Eligibility</button>
					</div>
				</div>
				</div>
            </section>
       <hr class="clearfix">
         <section>
        <div  class="page-section intro">

	
	<!--/.container-->
</div>
       </section>
		 <div id="about" class="page-section" style="padding: 2%">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-lg-12">
		 <div class="danger">
  <p style="text-align: center;font-family:Helvetica;font-size: xx-large;"><strong >About Blood Donation!</strong> ....</p>
</div>
</div>
		</div>
	<hr>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-4 col-sm-4 col-lg-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					Benefits of Blood Donation
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>Beneficial for the human heart</li>
						<li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>Reduces risk of cancer</li>
						<li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>Boosts the production of redcells</li>
						<li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>Lower cholestrol level</li>
						<li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>Helps in weight loss</li>
						<li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>Replenishes blood</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-lg-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					Who Needs Blood?
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>Women with complications of pregnancy</li>
						<li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>Children with severe anaemia </li>
						<li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>People with severe trauma following accidents</li>
						<li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>Many surgical and cancer patients</li>
						<li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>Thalassaemia and sickle cell disease patients</li>
						<li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>People with Haemophilia</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-lg-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					Blood Donor and Recepient Variations
				</div>
				<div class="panel-body">
					<img src="{{asset('frontend/images/mostNeededBlood.jpg')}}" class="thumbnail" width="100%">
				</div>
			</div>
		</div>
	</div>

		<br/><a href="#" style="font-size: xx-large;" class="scroll-top back-to-top">&uarr;</a>
	
	<!--/.container-->
</div>
		 <div id="camps" class="page-section" style="padding:2%;">
			<div class="row">
				 <div class="camp">
  <p style="text-align: center;font-size: xx-large;font-family: Helvetica;"><strong >Available Hospitals To Donate</strong> ....</p>
</div>
				 <div class="columns">
					<ul class="price">
						<li class="head w3-hover-teal" style="background-color: #4CAF50;">Nairobi Hospital</li>
						<li class="grey">Venue</li>
						<li>Afya Center Building 3rd Floor Along Tom Mboya Street</li>
						<li class="grey">Time</li>
						<li>9 A.M to  5 P.M</li>
					</ul>
				 </div>
				 <div class="columns">
					<ul class="price">
						<li class="head w3-hover-green">Kenyatta National Hospital</li>
						<li class="grey">Venue</li>
						<li>Afya Center Building 3rd Floor Along Tom Mboya Street</li>
						<li class="grey">Time</li>
						<li>9 A.M to  5 P.M</li>
					</ul>
				 </div>
				 <div class="columns">
					<ul class="price">
						<li class="head w3-hover-blue">Agha Khan Hospital</li>
						<li class="grey">Venue</li>
						<li>Afya Center Building 3rd Floor Along Tom Mboya Street</li>
						<li class="grey">Time</li>
						<li>9 A.M to  5 P.M</li>
					</ul>
				 </div>
				<br/><a href="#" style="font-size: xx-large;color:#ffffff;" class="scroll-top back-to-top">&uarr;</a></p>
			</div>
		 </div>
		  <div class="clearfix"></div><hr>
		  <div id="contact" class="w3-container w3-padding-large w3-grey page-section">
    		 <div class="cont">
  <p style="text-align: center;font-size: xx-large;color:#55552b;"><strong >Say Something</strong> ....</p>
</div>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>info@bloodbank.org</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Nairobi, KENYA</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>512312311</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form id="sendMessage" method="POST">
	<div class="alert alert-danger alert-dismissible" style="display:none" id="changeError">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong id="errorMessage"></strong> 
</div>
      <div class="w3-group">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="name" required>
      </div>
      <div class="w3-group">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="email" required>
      </div>
	  <div class="w3-group">
        <label>Phone Number</label>
        <input class="w3-input w3-border" type="text" name="phone" required>
      </div>
      <div class="w3-group">
        <label>Message</label>
        <textarea class="form-control" name="message"></textarea>
      </div>
      <button type="submit" id="btnSubmit" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
	<footer>
					<div class="row">
					<div class="col-md-12 col-sm-12 col-lg-12">
						   	<div id="social">
							  
						<div class="social-bg-overlay">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-md-offset-3 ">
										<div class="walam-social">
										 
											<ul>
												<li><a class="fa fa-facebook" href="#"></a></li>
												<li><a class="fa fa-twitter" href="#"></a></li>
												<li><a class="fa fa-google-plus" href="#"></a></li>
												<li><a class="fa fa-linkedin" href="#"></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
				</footer>
	<br/><a href="#" style="font-size: xx-large;color:#ffffff;" class="scroll-top back-to-top">&uarr;</a></p>
  </div>

       <script type="text/javascript">
		
$(document).ready(function() {
	// navigation click actions	
	$('.scroll-link').on('click', function(event){
		event.preventDefault();
		var sectionID = $(this).attr("data-id");
		scrollToID('#' + sectionID, 750);
	});
	// scroll to top action
	$('.scroll-top').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow'); 		
	});
	// mobile nav toggle
	$('#nav-toggle').on('click', function (event) {
		event.preventDefault();
		$('#main-nav').toggleClass("open");
	});
});
// scroll function
function scrollToID(id, speed){
	var offSet = 50;
	var targetOffset = $(id).offset().top - offSet;
	var mainNav = $('#main-nav');
	$('html,body').animate({scrollTop:targetOffset}, speed);
	if (mainNav.hasClass("open")) {
		mainNav.css("height", "1px").removeClass("in").addClass("collapse");
		mainNav.removeClass("open");
	}
}
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };
}
$(document).ready(function()
				  {
 $('#sendMessage').on('submit',(function(e)
 {
e.preventDefault();
$.ajax({
    url:"send_message.php",
    type:"POST",
    data:new FormData(this),
    contentType:false,
    cache:false,
    processData:false,
    beforeSend:function()
    {
        $('#btnSubmit').html('Sending Message........');
    },
    success : function(response)
    {
        if(response="ok")
        {
          //$('#myModal').modal('toggle');

            swal({
                title:"Success",
                text:"Message Successfully Sent",
                icon:"success",
                button:"OK"
            });
			$("#btnSubmit").html('Send Message');
        }
        else
        {
			
            $("#changeError").fadeIn(1000,function(){
                $("#errorMessage").html(response);
                $("#btnSubmit").html('Send Message');
            });
        }
    }
});
    }));
				  });
</script>
    </body>
</html>