<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>HAPPY BLOOD - BANK</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}">
    <!-- App css -->
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/assets/css/app.min.cs')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/sweetalert.css')}}">
</head>

<body class="authentication-bg bg-gradient">


    <a href="{{url('logindonor')}}" style="text-align:center;color:antiquewhite;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;text-decoration: none;
        margin-left:80%;padding-top:100px;"> Sign In Here </a>

    <div class="account-pages pt-2 mt-3 mb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card bg-pattern">

                        <div class="card-body p-2">

                            <div class="text-center w-75 m-auto">
                                <a href="{{url('logindonor')}}">
                                    <span style="font-size: 18px;color:black;">HAPPY BLOOD DONOR</span>
                                </a>
                                <h5 class="text-uppercase text-center font-bold mt-4">Donor Registration Page</h5>
                            </div>

                            <form method="POST" id="registerUser">
                                <div style="display: none;" id="user_errors" class="alert alert-danger alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Error!</strong> 
                                    <ul>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 col-lg-4 col-sm-4">
                                        <label for="fullname">Full Name</label>
                                        <input class="form-control" type="text" id="fullname" name="fullname"
                                            placeholder="Enter your name" required>
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 col-sm-4">
                                        <label for="emailaddress"> Email address</label>
                                        <input class="form-control" type="email" id="email" name="email" required
                                            placeholder="Enter your email">
                                    </div>
                                    <div class="clearfix">

                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 col-sm-4">
                                        <label for="emailaddress">ID Number</label>
                                        <input class="form-control" type="number" id="id_no" name="id_no"
                                            placeholder="Enter Reg No">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 col-sm-4 p-2">
                                        <div class="row px-2">
                                            <label for="gender">Gender</label>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="form-group col-md-6 col-lg-6 col-sm-6">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-3 col-sm-3">
                                                        <label class="radio-inline" style="color:#000;">
                                                            <input type="radio" name="gender" value="MALE" checked> MALE
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-sm-3">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-sm-3">
                                                        <label class="radio-inline" style="color:#000;">
                                                            <input type="radio" value="FEMALE" name="gender"> FEMALE
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-4 p-2">

                                        <div class="form-group" style="padding-left:1%">
                                            <label for="course">County</label>
                                            <input type="text" name="county" class="form-control" required
                                                placeholder="Enter County">
                                        </div>


                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-4 p-2">

                                        <div class="form-group" style="padding-left:1%">
                                            <label for="course">Residence</label>
                                            <input type="text" name="location" class="form-control" required
                                                placeholder="Enter Residence">
                                        </div>

                                    </div>
                                </div>
                                <div class="row p-2 ">
                                    <div class="form-group col-sm-6 col-md-6 col-lg-6" style="padding-left:1%">
                                        <label for="course">Phone Number</label>
                                        <input type="number" name="phone_no" class="form-control" required
                                            placeholder="Enter Phone No">
                                    </div>
                                    <div class="form-group col-sm-6 col-md-6 col-lg-6" style="padding-left:1%">
                                        <label for="course">Date of Birth</label>
                                        <input type="date" name="date_of_birth" class="form-control" required
                                            placeholder="Date Of Birth">
                                    </div>

                                </div>
                                <div class="row p-2 ">
                                    <div class="form-group col-sm-12 col-md-12 col-lg-12" style="padding-left:1%">
                                        <label for="course">Blood Group</label>
                                        <select name="bld_grp" class="form-control" id="bld_grp">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-sm-6">
                                        <label for="emailaddress">Password</label>
                                        <input class="form-control" type="password" id="password" name="password"
                                            required placeholder="Enter Password">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-sm-6">
                                        <label for="emailaddress">Confirm Password</label>
                                        <input class="form-control" type="password" id="confirm_password"
                                            name="confirm_password" required placeholder="Confirm Password">
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox checkbox-success">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                                <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                            </div>
                                        </div> -->
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-gradient btn-block" type="submit" id="userButton"> REGISTER
                                    </button>
                                </div>

                            </form>

                            <div class="row mt-4">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted mb-0">Already have an account? <a href="{{url('logindonor')}}"
                                            class="text-dark ml-1"><b>Sign In</b></a></p>
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
    $(document).ready(function() {
        // Register New User
        $('#registerUser').on('submit', (function(e) {
            //alert("You Are Good To Go");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('register_user') }}",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#btnUser').html('Creating Account');
                },
                success: function(response) {
                    if ($.isEmptyObject(response.user_errors)) {
                        //$('#myModal').modal('toggle');
                        $("#user_errors").fadeOut(1000, function() {


                        });

                        swal({
                            title: 'Success!',
                            text: "Account Successfully Created!",
                            type: 'success',
                            padding: '2em'
                        });
                        // $('#products_table').DataTable().ajax.reload();

                        $('#registerUser').trigger("reset");

                        $("#btnUser").html('REGISTER');

                        // table.ajax.reload();
                    } else {
                        $("#user_errors").fadeIn(1000, function() {
                            printErrorMsg(response.user_errors, 'user_errors');
                            $("#btnUser").html('REGISTER');
                        });
                    }
                }
            });

        }));
        //End

    })

    //Print Errors
    function printErrorMsg(msg, div) {
        //  alert('#' + div);
        $("#" + div).find("ul").html('');
        $("#" + div).css('display', 'block');
        $.each(msg, function(key, value) {
            $("#" + div).find('ul').append('<li>' + value + '</li>');
        });
    }
    </script>

</body>

</html>