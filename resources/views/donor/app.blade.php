<html>

<head>
    <title>BLOOD|BANK</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/w3school.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/font-awesome.min.css')}}" />

    <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/html5shiv.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/sweetalert.min.j')}}s"></script>

    <!-- Toggle between adding and removing the
		"responsive" class to topnav when the user clicks on the icon!-->
    <script type="text/javascript">
    function myFunction() {
        //code
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            //code
            x.className += "responsive";
        } else {
            x.className = "topnav";
        }
    }
    var modal = document.getElementById('id01');
    //when the user clicks anywhere outside of the modal close it
    window.onclick = function(event) {
        if (event.target == modal) {
            //code
            modal.style.display = "none";
        }
    }
    var mod = document.getElementById('id02');
    //when the user clicks anywhere outside of the modal ,close it\
    window.onclick = function(event) {
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
                            <li><a href="#" class="scroll-link" data-id="av-hospitals">Hospitals</a></li>
                            <li><a href="#" class="scroll-link" data-id="contact">Contact us</a></li>
                            <li><a href="{{url('logindonor')}}" data-id="contact">Login</a></li>
                            <li class="icon"><a href="javascript:void(0);" style="font-size: 15px;"
                                    onclick="myFunction()">&#9776;</a></li>
                        </ul>
                        <!--/.navbar-->
                    </div>
                    <!--/.container-->
                </div>
            </div>
        </div>

    </section>

    <section id="intro" class="page-section">
        <hr class="clearfix">
        <hr class="clearfix">
        <hr class="clearfix">



        <div class="row" style="font-family: helvetica;">
            <div class="col-md-4">
                <div class="register w3-hover-red">
                    <a style="text-decoration:none;color:#fff;" href="{{url('registerdonor')}}">Become A Blood Donor</a>
                    <br>
                    <br>


                    <a href="{{ url('registerdonor') }}" class="bt " style="background:#330100;">REGISTER</a>

                </div>
            </div>



            <div class="col-md-4 ">
                <div class="already w3-hover-red">
                    <strong>HOSPITAL</strong>
                    <br>
                    <br>
                    <a href="{{ url('logindonor') }}" class="bt" style="background:#330100;">LOGIN</a>


                </div>

            </div>


            <div class="col-md-4 ">
                <div id="eligible" class="w3-modal">
                    <div class="w3-modal-content w3-padding-16">
                        <div class="w3-container">
                            <span onclick="document.getElementById('eligible').style.display='none'"
                                class="w3-button w3-display-topright">&times;</span>
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
                                        <li>Male donors+ must be at least 17 years old in most states, at least 5'1"
                                            tall and weigh at least 130 lbs</li>
                                        <li>Female donors+ must be at least 19 years old, at least 5'5" tall and weigh
                                            at least 150 lbs</li>

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
                <div class="can w3-hover-">
                    <strong>Who Can give blood?</strong>
                    <br>
                    <br>
                    <button class="bt" style="background:#330100;"
                        onclick="document.getElementById('eligible').style.display='block'">Check Eligibility</button>
                </div>
            </div>
        </div>
    </section>
    <hr class="clearfix">
    <section>
        <div class="page-section intro">


            <!--/.container-->
        </div>
    </section>
    <div id="about" class="page-section" style="padding: 2%">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="danger">
                    <p style="text-align: center;font-family:Helvetica;font-size: xx-large;"><strong>About Blood
                            Donation!</strong> ....</p>
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
                            <li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o"
                                        aria-hidden="true"></i></span>Beneficial for the human heart</li>
                            <li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o"
                                        aria-hidden="true"></i></span>Reduces risk of cancer</li>
                            <li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o"
                                        aria-hidden="true"></i></span>Boosts the production of redcells</li>
                            <li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o"
                                        aria-hidden="true"></i></span>Lower cholestrol level</li>
                            <li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o"
                                        aria-hidden="true"></i></span>Helps in weight loss</li>
                            <li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o"
                                        aria-hidden="true"></i></span>Replenishes blood</li>
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
                            <li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o"
                                        aria-hidden="true"></i></span>Women with complications of pregnancy</li>
                            <li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o"
                                        aria-hidden="true"></i></span>Children with severe anaemia </li>
                            <li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o"
                                        aria-hidden="true"></i></span>People with severe trauma following accidents</li>
                            <li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o"
                                        aria-hidden="true"></i></span>Many surgical and cancer patients</li>
                            <li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o"
                                        aria-hidden="true"></i></span>Thalassaemia and sickle cell disease patients</li>
                            <li class="list-group-item"><span class="badge"><i class="fa fa-check-square-o"
                                        aria-hidden="true"></i></span>People with Haemophilia</li>
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

        <br /><a href="#" style="font-size: xx-large;" class="scroll-top back-to-top">&uarr;</a>

        <!--/.container-->
    </div>
    <div id="av-hospitals" class="page-section" style="padding:2%;color:#000;font-family:cursive;">
        <div class="row">
            <div class="camp" style="background:#8a0817;">
                <p style="text-align: center;font-size: xx-large;font-family: Helvetica;"><strong>Available Hospitals To
                        Donate</strong> ....</p>
            </div>
            <div id="hospital_columns">
            </div>
            <br /><a href="#" style="font-size: xx-large;color:#ffffff;" class="scroll-top back-to-top">&uarr;</a></p>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div id="contact" class="w3-container w3-padding-large  page-section">
        <div class="cont" style="background-color: #a94442;">
            <p style="text-align: center;font-size: xx-large;color:#fff;"><strong>Say Something</strong> ....</p>
        </div>
        <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
            <div class="w3-third" style="background-color: #a94442;">
                <p class="w3-text-white"><i class="fa fa-envelope w3-xxlarge"></i></p>
                <p class="w3-text-white">info@bloodbank.org</p>
            </div>
            <div class="w3-third" style="background-color:#b21c1c;">
                <p class="w3-text-white"><i class="fa fa-map-marker w3-xxlarge "></i></p>
                <p class="w3-text-white">Nairobi, KENYA</p>
            </div>
            <div class="w3-third" style="background-color: #a94442;">
                <p class="w3-text-white"><i class="fa fa-phone w3-xxlarge"></i></p>
                <p class="w3-text-white">0720 000 000</p>
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
            <button type="submit" id="btnSubmit" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i
                    class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
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
        <br /><a href="#" style="font-size: xx-large;color:#ffffff;" class="scroll-top back-to-top">&uarr;</a></p>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions	
        $('.scroll-link').on('click', function(event) {
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 'slow');
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function(event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed) {
        var offSet = 50;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({
            scrollTop: targetOffset
        }, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() {}
        };
    }
    $(document).ready(function() {
        $('#sendMessage').on('submit', (function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{route('feedbacks.store')}}",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#btnSubmit').html('Sending Message........');
                },
                success: function(response) {
                    if ($.isEmptyObject(response.message_errors)) {
                        //$('#myModal').modal('toggle');

                        swal({
                            title: "Success",
                            text: "Message Successfully Sent,Will Get Back To You Soon",
                            icon: "success",
                            button: "OK"
                        });
                        $("#btnSubmit").html('Send Message');
                        $('#sendMessage').trigger('reset');
                    } else {

                        $("#changeError").fadeIn(1000, function() {
                            $("#errorMessage").html(response);
                            $("#btnSubmit").html('Send Message');
                        });
                    }
                }
            });
        }));


        $.ajax({
            url: "display_hospitals",
            method: "GET",
            dataType: "json",
            success: function(data) {
                let html = "";
                $.each(data, function(index, val) {
                    //alert(index);

                    html += '<div class="columns w3-card-4">'
                    html += '<ul class="price">'
                    html += '<li class="head " style="background-color: #a94442;">' + val
                        .hospital_name + '</li>'
                    html += '<li>Venue</li>'
                    html += '<li>' + val.hospital_location + '</li>'
                    html += '<li>Contact Info</li>'
                    html += '<li> Email : ' + val.hospital_email + ' Phone NO :  ' + val
                        .hospital_phone + '</li>'
                    html += '<li>Time</li>'
                    html += '<li>9 A.M to 5 P.M</li>'
                    html += '</ul>'
                    html += '</div>'

                });
                $('#hospital_columns').append(html);
            }

        });
    });
    </script>
</body>

</html>