@extends('donor.dashboard.layout')
@section('title') Hospitals List @endsection
@section('content')

<!-- Donate Blood Popup Modal -->
<div style="display:none;">{{$user = auth()->user()}}</div>

<div id="donation_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content ">
            <!-- <button type="button" class="close w3-circle w3-padding-right" data-dismiss="modal" aria-label="Close"><span class="w3-xxlarge w3-text-white" aria-hidden="true">&times;</span></button> -->
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-header w3-card-4 w3-padding-8 w3-theme-d2 w3-padding-left">

                <h4 class="modal-title w3-bottombar w3-slim" id="myModalLabel"
                    style="color: #000;font-family: cursive;text-align:center;font-size:2vw;">Book Donation Here Day
                    Here <b id="hospital-name"></b></h4>
            </div>
            <div class="modal-body">


                <form method="POST" id="formBooking" class="w3-padding-left">



                    <div class="row w3-padding-16">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="label-control">
                                    Donate From
                                </label>
                                <div class="input-group">

                                    <select name="donate_from" id="donate_from" class="form-control">
                                        <option value="hospital">Hospital</option>
                                        <option value="home">Home</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12" id="location" style="display:none">
                            <div class="form-group">
                                <label class="label-control">
                                    Location
                                </label>
                                <div class="input-group">

                                    <input type="text" name="user_location" class="form-control" id="user_location">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row w3-padding-16">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="label-control">
                                    Date For Donation
                                </label>
                                <div class="input-group">

                                    <input type="date" name="date_booked" class="form-control" id="date_booked">
                                </div>
                            </div>
                        </div>

                    </div>
                    <input type="hidden" name="hidden_hospital_id" id="hidden_hospital_id">

                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="buttonBooking">
                        SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Edit Profile Popup Modal -->
<div style="display:none;">{{$user = auth()->user()}}</div>

<div id="profile_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content ">
            <!-- <button type="button" class="close w3-circle w3-padding-right" data-dismiss="modal" aria-label="Close"><span class="w3-xxlarge w3-text-white" aria-hidden="true">&times;</span></button> -->
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-header w3-card-4 w3-padding-8 w3-theme-d2 w3-padding-left">

                <h4 class="modal-title w3-bottombar w3-slim" id="myModalLabel"
                    style="color: #000;font-family: cursive;text-align:center;font-size:2vw;">Edit Profile Details
                    Here <b id="hospital-name"></b></h4>
            </div>
            <div class="modal-body">


                <form id="hospitalForm" class="row g-3" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="hidden_profile_id" id="hidden_profile_id">

                    <div style="display:none;" id="hospital_errors" class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong>
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <label for="name" class="form-label">Name</label>
                        <div class="input-group">
                            <input type="text" name="hospital_name" class="form-control border-start-0"
                                id="hospital_name" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="location" class="form-label">Location</label>
                        <div class="input-group">
                            <input type="text" name="hospital_location" class="form-control border-start-0"
                                id="hospital_location" />
                        </div>
                    </div>
                    <div class="col-12 clearfix">
                        <label for="hospital_phone" class="form-label">Phone Number</label>
                        <div class="input-group">
                            <input type="number" name="hospital_phone" class="form-control border-start-0"
                                id="phone_number" />
                        </div>
                    </div>

                    <div class="col-12 clearfix">
                        <label for="email" class="form-label">Official/Professional Email</label>
                        <div class="input-group">
                            <input type="email" name="hospital_email" class="form-control border-start-0" id="email" />
                        </div>
                    </div>

                    <div class="col-6 clearfix">
                        <label for="email" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control border-start-0" id="email" />
                        </div>
                    </div>

                    <div class="col-6 clearfix">
                        <label for="email" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <input type="password" name="confirm_password" class="form-control border-start-0"
                                id="email" />
                        </div>
                    </div>

                    <br>
                    <br>

                    <div class="row px-5 text-center mx-auto">

                        <div class="col-12 mx-auto center">
                            <button type="submit" id="buttonHospital"
                                class="btn btn-primary px-5 text-center my-auto">UPDATE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->
<!-- End -->
<!-- Hospitals List -->
<div id="hospitals-list" class="row profile">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title"><b>{{ $user->role==2 ? "Available Hospitals" : "Hospital Profile"  }}</b></h4>
            <p class="sub-header">
            </p>

            <table id="hospital-table" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Official/Professional Email</th>
                        <th>Telephone/Phone Number</th>
                        <th>Location</th>
                        <th>Action</th>

                    </tr>
                </thead>


                <tbody>

                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- End  -->
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $("#datatable").DataTable();
    $("#hospital-table").DataTable({
        "processing": true,
        "sAjaxSource": '{{route("user_hospitals")}}',
        "pageLength": 10,
        "type": "GET",
        "columns": [

            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
                data: 'hospital_name',
                name: 'hospital_name'
            },
            {
                data: 'hospital_email',
                name: 'hospital_email'
            },
            {
                data: 'hospital_phone',
                name: 'hospital_phone'
            },
            {
                data: 'hospital_location',
                name: 'hospital_location'
            },

            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ],
        "lengthChange": !1,
        "dom": "lBfrtip",
				"buttons": [
					'excel',
					'pdf',
					'print'
				]
    });

    //Js Show Popup Modal with donation booking form

    $(document).on('click', '.donate', function(e) {
        //Hospital Id
        let id = $(this).attr('id');
        $('#hidden_hospital_id').val(id);
        $('#donation_modal').modal('show');
    })

    //Js Show Popup Modal with profile editing form

    $(document).on('click', '.edit', function(e) {
        //Hospital Id
        let id = $(this).attr('id');
        $('#hidden_profile_id').val(id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{route('edit-hospital-profile')}}",
            method: "POST",
            data: {
                id: id
            },
            dataType: "json",
            success: function(data) {
                $('#hospital_name').val(data.hospital_name);
                $('#hospital_location').val(data.hospital_location);
                $('#phone_number').val(data.hospital_phone);
                $('#email').val(data.hospital_email);

            }
        })
        $('#profile_modal').modal('show');
    })

    //Hide/Show Location
    $(document).on('change', '#donate_from', function() {
        let value = $(this).val();
        if (value == "home") {
            $('#location').fadeIn('slow');
        } else {
            $('#location').fadeOut('slow');
        }

    })

    //Save Booking Form Details To The Database
    $('#formBooking').on('submit', (function(e) {
        //alert("You Are Good To Go");
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('donation_bookings.store') }}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#buttonBook').html('Booking.....');
            },
            success: function(response) {
                if ($.isEmptyObject(response.errors)) {
                    //$('#myModal').modal('toggle');
                    $("#errors").fadeOut(1000, function() {


                    });

                    swal({
                        title: "Success",
                        text: "Booking Successfully Placed",
                        icon: "success",
                        button: "OK",
                    });

                    $('#formBooking').trigger("reset");

                    $("#buttonBooking").html('SUBMIT');
                    $('#donation_modal').modal('hide');

                    // table.ajax.reload();
                } else {
                    $("#errors").fadeIn(1000, function() {
                        printErrorMsg(response.errors, 'errors');
                        $("#buttonBooking").html('SUMBIT');
                    });
                }
            }
        });

    }));
    //End

    //Edit Hospital  Details 
    $('#hospitalForm').on('submit', (function(e) {
        //alert("You Are Good To Go");
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('edit-hospital') }}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#buttonHospital').html('Editing....');
            },
            success: function(response) {
                if ($.isEmptyObject(response.hospital_errors)) {
                    //$('#myModal').modal('toggle');
                    $("#errors").fadeOut(1000, function() {


                    });

                    swal({
                        title: "Success",
                        text: "Details Updated Successfully",
                        icon: "success",
                        button: "OK",
                    });

                    $('#hospitalForm').trigger("reset");

                    $("#buttonHospital").html('UPDATE');
                    $('#profile_modal').modal('hide');

                    $("#hospital-table").DataTable().ajax.reload();
                } else {
                    $("#hospital_errors").fadeIn(1000, function() {
                        printErrorMsg(response.hospital_errors,
                            'hospital_errors');
                        $("#buttonHospital").html('UPDATE');
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