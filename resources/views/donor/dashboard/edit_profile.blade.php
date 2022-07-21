@extends('donor.dashboard.layout')
@section('title') Edit Donation Booking @endsection
@section('content')


<!-- Donors Booking List -->
<div id="donors-list" class="row profile">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title"><b>Edit Profile</b></h4>
            <p class="sub-header">
            </p>

            <form method="POST" id="updateUserForm">
                                <div style="display: none;" id="user_errors" class="alert alert-danger alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Error!</strong> 
                                    <ul>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <input type="hidden" name="hidden_user_id" value="{{$user->id}}">
                                    <div class="form-group col-md-4 col-lg-4 col-sm-4">
                                        <label for="fullname">Full Name</label>
                                        <input class="form-control" type="text" id="fullname" name="fullname"
                                            value="{{ $user->full_name }}" required>
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 col-sm-4">
                                        <label for="emailaddress"> Email address</label>
                                        <input class="form-control" type="email" id="email" name="email" required
                                        value="{{ $user->email }}">
                                    </div>
                                    <div class="clearfix">

                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 col-sm-4">
                                        <label for="emailaddress">ID Number</label>
                                        <input class="form-control" type="number" id="id_no" name="id_no"
                                        value="{{ $user->id_no }}">
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
                                            value="{{ $user->county }}">
                                        </div>


                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-4 p-2">

                                        <div class="form-group" style="padding-left:1%">
                                            <label for="course">Residence</label>
                                            <input type="text" name="location" class="form-control" required
                                            value="{{ $user->location }}">
                                        </div>

                                    </div>
                                </div>
                                <div class="row p-2 ">
                                    <div class="form-group col-sm-6 col-md-6 col-lg-6" style="padding-left:1%">
                                        <label for="course">Phone Number</label>
                                        <input type="number" name="phone_no" class="form-control" required
                                        value="{{ $user->phone_no }}">
                                    </div>
                                    <div class="form-group col-sm-6 col-md-6 col-lg-6" style="padding-left:1%">
                                        <label for="course">Date of Birth</label>
                                        <input type="date" name="date_of_birth" class="form-control" required
                                        value="{{ $user->date_of_birth }}">
                                    </div>

                                </div>
                                <div class="row p-2 ">
                                    <div class="form-group col-sm-12 col-md-12 col-lg-12" style="padding-left:1%">
                                        <label for="course">Blood Group</label>
                                        <select name="bld_grp" class="form-control" id="bld_grp">
                                        <option value="{{$user->blood_group}}">{{$user->blood_group}} </option>
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
                                    <button class="btn btn-gradient btn-block" type="submit" id="userButton"> UPDATE
                                    </button>
                                </div>

                            </form>
        </div>
    </div>

</div>
<!-- End  -->
@endsection

@push('booking-scripts')
<script>
$(document).ready(function() {
  // Update User
  $('#updateUserForm').on('submit', (function(e) {
            //alert("You Are Good To Go");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('update_user') }}",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#btnUser').html('Updating');
                },
                success: function(response) {
                    if ($.isEmptyObject(response.user_errors)) {
                        //$('#myModal').modal('toggle');
                        $("#user_errors").fadeOut(1000, function() {


                        });

                        swal({
                            title: 'Success!',
                            text: "Account Successfully Updated!",
                            type: 'success',
                            padding: '2em'
                        });
                        // $('#products_table').DataTable().ajax.reload();

                        $('#updateUserForm').trigger("reset");

                        $("#btnUser").html('UPDATE');
                        setTimeout('window.location.href = "/user/edit-user"; ',3000);


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

@endpush