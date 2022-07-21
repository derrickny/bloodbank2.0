@extends('donor.dashboard.layout')
@section('title') Edit Donation Booking @endsection
@section('content')


<!-- Donors Booking List -->
<div id="donors-list" class="row profile">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title"><b>Edit Donation Booking</b></h4>
            <p class="sub-header">
            </p>

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

                                    <input type="text" name="user_location" value="{{$booking->user_location}}" class="form-control" id="user_location">
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

                                    <input type="date" name="date_booked" value="{{$booking->date_booked}}" class="form-control" id="date_booked">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label class="label-control">
               Hospital
            </label>
            <div class="input-group">
              <select name="hospital_name" id="hospital_name" class="form-control input-lg">
                <option value="{{$booking->hospital_id}}">{{$booking->hospital_name}}</option>
              </select>
            </div>
        </div>

                    </div>
                    <input type="hidden" value="{{$booking->id}}" name="hidden_booking_id" id="hidden_booking_id">

                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="buttonBooking">
                        SUBMIT</button>
                </form>
        </div>
    </div>

</div>
<!-- End  -->
@endsection

@push('booking-scripts')
<script>
$(document).ready(function() {
   //Load Hospitals

   $.ajax({
	url:"{{route('hospitals_list')}}",
	method:"GET",
	dataType:"json",
	success:function(data)
	{
		$.each(data,function(index,val){
			$('#hospital_name').append('<option value='+ val.id +'>'+ val.hospital_name + '</option>');

		});
	}
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

    
  
    //Edit Booking Form Details To The Database
    $('#formBooking').on('submit', (function(e) {
        //alert("You Are Good To Go");
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/user/update-booking",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#buttonBook').html('Updating.....');
            },
            success: function(response) {
                if ($.isEmptyObject(response.errors)) {
                    //$('#myModal').modal('toggle');
                    $("#errors").fadeOut(1000, function() {


                    });

                    swal({
                        title: "Success",
                        text: "Booking Successfully Updated",
                        icon: "success",
                        button: "OK",
                    });

                    $('#formBooking').trigger("reset");

                    $("#buttonBooking").html('SUBMIT');
                    setTimeout('window.location.href = "/user/donation_bookings"; ',3000);


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