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


            </div>
        </div>
    </div>
</div>

<!-- // Modal -->
<!-- End -->
<!-- Blood Stocks List -->
<div id="stocks-list" class="row profile">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title"><b>Our Hospital Blood Stocks</b></h4>
            <p class="sub-header">
            </p>

            <table id="stock-table" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                       
                        <th>Blood Group</th>
                        <th>Pints Donated</th>
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
    $("#stock-table").DataTable({
        "processing": true,
        "sAjaxSource": '{{route("our-stock")}}',
        "pageLength": 10,
        "type": "GET",
        "columns": [
            {
                data: 'blood_group',
                name: 'blood_group'
            },
            {
                data: 'deducted',
                name: 'deducted'
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

    $(document).on('click', '.add_donation', function(e) {
        //Hospital Id
        let id = $(this).attr('id');
        $('#hidden_user_id').val(id);
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
                $('#buttonDonate').html('Addding.....');
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

                    $('#formBooking').trigger("reset");

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


})
</script>

@endpush