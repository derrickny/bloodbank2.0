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
                    style="color: #000;font-family: cursive;text-align:center;font-size:2vw;">Add Blood Donation Details <b id="hospital-name"></b></h4>
            </div>
            <div class="modal-body">


                <form method="POST" id="formDonate" class="w3-padding-left">



                    <div class="row w3-padding-16">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="label-control">
                                    Blood Group
                                </label>
                                <div class="input-group">

                                    <select name="blood_group" id="blood_group" class="form-control">
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
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="label-control">
                                    Pints Donated
                                </label>
                                <div class="input-group">

                                    <input type="text" name="pints_donated" class="form-control" id="pints_donated">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row w3-padding-16">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="label-control">
                                    Date Donated
                                </label>
                                <div class="input-group">

                                    <input type="date" name="date_donated" class="form-control" id="date_booked">
                                </div>
                            </div>
                        </div>

                    </div>
                    <input type="hidden" name="hidden_user_id" id="hidden_user_id">

                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="buttonDonate">
                        SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- // Modal -->

<!--Send Sms -->
<div style="display:none;">{{$user = auth()->user()}}</div>

<div id="sms_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content ">
            <!-- <button type="button" class="close w3-circle w3-padding-right" data-dismiss="modal" aria-label="Close"><span class="w3-xxlarge w3-text-white" aria-hidden="true">&times;</span></button> -->
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-header w3-card-4 w3-padding-8 w3-theme-d2 w3-padding-left">

                <h4 class="modal-title w3-bottombar w3-slim" id="myModalLabel"
                    style="color: #000;font-family: cursive;text-align:center;font-size:2vw;">Send Blood Donation Reminder <b id="hospital-name"></b></h4>
            </div>
            <div class="modal-body">

                  
            <form class="form-horizontal" method="POST" id="smsForm">
                <input type="hidden" name="hidden_sms_user_id" id="hidden_sms_user_id">
                    <div class="form-group m-b-25 row">
                    <div class="col-12">
                    <label for="repair_description">Type Alert Message Here</label>
                        <br>
                        <textarea name="message" class="form-control" id="" cols="45" rows="7"></textarea>
                        
                    </div>

                    </div>


                    <div class="form-group account-btn text-center m-t-10 row">
                    <div class="col-12">
                    <button class="btn w-lg pull-right btn-sm btn-primary waves-effect waves-light" type="submit" id="buttonSms">Send Sms</button>
                    </div>
                  
            </div>

            </form>

            </div>
        </div>
    </div>
</div>

<!-- // Modal -->
<!-- End -->
<!-- Donors Booking List -->
<div id="donors-list" class="row profile">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title"><b>Donor Bookings</b></h4>
            <p class="sub-header">
            </p>

            <table id="hospital-table" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Donor Details</th>
                        <th>Place Of Donation</th>
                        <th>Blood Group</th>
                        <th>Date Of Donation</th>
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

@push('booking-scripts')
<script>
$(document).ready(function() {
    $("#datatable").DataTable();
    $("#hospital-table").DataTable({
        "processing": true,
        "sAjaxSource": '{{route("donation_bookings.index")}}',
        "pageLength": 10,
        "type": "GET",
        "columns": [

            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
                data: 'user_details',
                name: 'user_details'
            },
            {
                data: 'donation_place',
                name: 'donation_place'
            },
            {
                data: 'blood_group',
                name: 'blood_group'
            },
            {
                data: 'date_booked',
                name: 'date_booked'
            },
            {
               data:'user_location',
               name:'user_location'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ],
        "lengthChange": !1,
    });

    //Js Show Popup Modal with donation booking form

    $(document).on('click', '.add_donation', function(e) {
        //Hospital Id
        let id = $(this).attr('id');
        $('#hidden_user_id').val(id);
        $('#donation_modal').modal('show');
    })


        //Js Show Popup Modal with sms reminder form

        $(document).on('click', '.send_sms', function(e) {
        //Hospital Id
        let id = $(this).attr('id');
        $('#hidden_sms_user_id').val(id);
        $('#sms_modal').modal('show');
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

    //Save Donation  Form Details To The Database
    $('#formDonate').on('submit', (function(e) {
        //alert("You Are Good To Go");
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('user_donations.store') }}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#buttonDonate').html('Adding.....');
            },
            success: function(response) {
                if ($.isEmptyObject(response.errors)) {
                    //$('#myModal').modal('toggle');
                    $("#errors").fadeOut(1000, function() {


                    });
                    swal({
                        title: "Success",
                        text: "Donation Details Successfully Added",
                        icon: "success",
                        button: "OK",
                    });

                    $('#formDonate').trigger("reset");

                    $("#buttonDonate").html('SUBMIT');
                    $('#donation_modal').modal('hide');

                    // table.ajax.reload();
                } else {
                    $("#errors").fadeIn(1000, function() {
                        printErrorMsg(response.errors, 'errors');
                        $("#buttonDonate").html('SUMBIT');
                    });
                }
            }
        });

    }));
    //End

       //Send Sms Form
       $('#smsForm').on('submit', (function(e) {
        //alert("You Are Good To Go");
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('sendSms') }}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#buttonSms').html('Sending.....');
            },
            success: function(response) {
                if ($.isEmptyObject(response.errors)) {
                    //$('#myModal').modal('toggle');
                    $("#errors").fadeOut(1000, function() {


                    });
                    swal({
                        title: "Success",
                        text: "Sms Successfully Sent",
                        icon: "success",
                        button: "OK",
                    });

                    $('#smsForm').trigger("reset");

                    $("#buttonSms").html('SEND');
                    $('#sms_modal').modal('hide');

                    // table.ajax.reload();
                } else {
                    $("#errors").fadeIn(1000, function() {
                        printErrorMsg(response.errors, 'errors');
                        $("#buttonSms").html('SUMBIT');
                    });
                }
            }
        });

    }));


})
</script>

@endpush