@extends('donor.dashboard.layout')
@section('title') Hospitals List @endsection
@section('content')


<!-- Hospitals List -->
<div style="display:none;">{{$user = auth()->user()}}</div>
<div id="hospitals-list" class="row profile">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title"><b> @if($user->role==2) Your Blood Donations @endif @if($user->role==3) Donors
                    Blood Donations @endif</b></h4>
            <p class="sub-header">
            </p>

            <table id="user-donations" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Hospital</th>
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
                <tfooter>
                <tr>
                       
                        
                        <td colspan="7">Remaining Points  : <span><b id="total_points">{{ $sum }}</b></span>
                        <br>
                        Converted Points  : <span><b id="total_points">{{ $sum_two }}</b></span>
                    </td>
                        

                    </tr>
                </tfooter>
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
                data: 'hospital_name',
                name: 'hospital_name'
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
                data: 'points_rewarded',
                name: 'points_rewarded'
            },
            {
                data: 'status',
                name: 'status'
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


})
</script>

@endpush