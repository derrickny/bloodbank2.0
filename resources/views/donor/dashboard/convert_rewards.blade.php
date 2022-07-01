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
            <h4 class="header-title"><b>Convert Your Rewards To Cash</b></h4>
            <p class="sub-header">
            </p>

            <form method="POST" id="formConvert" class="w3-padding-left">



<div class="row w3-padding-16">
   
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label class="label-control">
                Total Available Points
            </label>
            <div class="input-group">

                <input type="text" name="available_points" class="form-control" id="available_points" value="{{$sum}}" readonly>
            </div>
        </div>
    </div>
</div>

<div class="row w3-padding-16">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label class="label-control">
               Points To Convert
            </label>
            <div class="input-group">

                <input type="points_to_convert" name="points_to_convert" class="form-control" id="points_to_convert">
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label class="label-control">
               Hospital
            </label>
            <div class="input-group">
              <select name="hospital_name" id="hospital_name" class="form-control input-lg">
                <option value=""></option>
              </select>
            </div>
        </div>
    </div>
    </div>

    <div class="row w3-padding-16">
    

</div>
<input type="hidden" name="hidden_hospital_id" id="hidden_hospital_id">

<button type="submit" class="btn btn-primary btn-lg btn-block" id="buttonConvert">
    CONVERT</button>
</form>
        </div>
    </div>

</div>
<!-- End  -->
@endsection

@push('scripts')
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

});

    //Js Show Popup Modal with donation booking form

    $(document).on('click', '.donate', function(e) {
        //Hospital Id
        let id = $(this).attr('id');
        $('#hidden_hospital_id').val(id);
        $('#donation_modal').modal('show');
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
    $('#formConvert').on('submit', (function(e) {
        //alert("You Are Good To Go");
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('convert_points') }}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#buttonConvert').html('Converting.....');
            },
            success: function(response) {
                if ($.isEmptyObject(response.errors)) {
                    //$('#myModal').modal('toggle');
                    $("#errors").fadeOut(1000, function() {


                    });

                    swal({
                        title: "Success",
                        text: "Points Has Successfully Been Converted,Wait For The Hospital COnfirmation",
                        icon: "success",
                        button: "OK",
                    });

                    $('#formConvert').trigger("reset");

                    $("#buttonConvert").html('CONVERT');
                    $('#donation_modal').modal('hide');

                    // table.ajax.reload();
                } else {
                    $("#errors").fadeIn(1000, function() {
                        printErrorMsg(response.errors, 'errors');
                        $("#buttonConvert").html('SUMBIT');
                    });
                }
            }
        });

    }));
    //End


})
</script>

@endpush