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
<!-- Hospitals List -->
<div id="hospitals-list" class="row profile">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title"><b> @if($user->role==2) Your Blood Donations @endif  @if($user->role==3) Donors Blood Donations @endif</b></h4>
            <p class="sub-header">
            </p>

            <table id="user-donations" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Donor Details</th>
                        <th>Date Of Donation</th>
                        <th>Blood Group</th>
                        <th>Pints Donated</th>
                        <th>Reward Points</th>
                        <th>Status</th>

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
    $("#user-donations").DataTable({
        "processing": true,
        "sAjaxSource": '{{route("user_donations.index")}}',
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
                data: 'date_donated',
                name: 'date_donated'
            },
            {
                data: 'blood_group',
                name: 'blood_group'
            },
            {
                data: 'pints_donated',
                name: 'pints_donated'
            },
            {
                data:'points_rewarded',
                name:'points_rewarded'
            },
            {
               data:'status',
               name:'status'
            }
        ],
        "lengthChange": !1,
    });

    //Js Show Popup Modal with donation booking form


})
</script>

@endpush