@extends('donor.dashboard.layout')
@section('title') Hospitals List @endsection
@section('content')

<!-- Swap Blood Popup Modal -->
<div style="display:none;">{{$user = auth()->user()}}</div>

<div id="swap_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content ">
            <!-- <button type="button" class="close w3-circle w3-padding-right" data-dismiss="modal" aria-label="Close"><span class="w3-xxlarge w3-text-white" aria-hidden="true">&times;</span></button> -->
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-header w3-card-4 w3-padding-8 w3-theme-d2 w3-padding-left">

                <h4 class="modal-title w3-bottombar w3-slim" id="myModalLabel"
                    style="color: #000;font-family: cursive;text-align:center;font-size:2vw;">Request Blood Swap With <b
                        class="hospital_name"></b></h4>
            </div>
            <div class="modal-body">
                <form method="POST" id="formSwap" class="w3-padding-left">



                    <div class="row w3-padding-16">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="label-control">
                                    Blood Group To Swap
                                </label>
                                <div class="input-group">

                                <select name="bld_grp" class="form-control" id="bld_grp">
                                            <option value="">Select Blood Group</option>
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
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="label-control">
                                    Stock
                                </label>
                                <div class="input-group">

                                    <input type="text" name="our_stock"  id="our_stock"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="label-control">
                                    Blood Group To Swap From <span class="hospital_name"></span>
                                </label>
                                <div class="input-group">

                                <select name="other_bld_grp" class="form-control" id="other_bld_grp">
                                          <option value="">Select Blood Group</option>
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
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="label-control">
                                    Stock From <span class="hospital_name"></span>
                                </label>
                                <div class="input-group">

                                    <input type="text" name="other_stock" value="" id="other_stock"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                 

                    <input type="hidden" name="hidden_hospital_name" id="hidden_hospital_name">


                        <input type="hidden"  name="hidden_hospital_id" id="hidden_hospital_id">

                        <button type="submit" class="btn btn-primary btn-lg btn-block" id="buttonSwap">
                            REQUEST</button>
                </form>

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
            <h4 class="header-title"><b>Points Conversions Requests</b></h4>
            <p class="sub-header">
            </p>

            <table id="swaps-table" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>Donor</th>
                        <th>Points To Convert</th>
                        <th>Status</th>
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
    $("#swaps-table").DataTable({
        "processing": true,
        "sAjaxSource": '{{route("swap-list")}}',
        "pageLength": 10,
        "type": "GET",
        "columns": [{
                data: 'full_name',
                name: 'full_name'
            },
            {
                data: 'points_converted',
                name: 'points_converted'
            },
            {
                data: 'status',
                name: 'status'
            },
          
            {
                data: 'action',
                name: 'action'
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

  //Accept Swap

  $(document).on('click', '.accept', function(e) {
        //Hospital Id
        let id = $(this).attr('id');
        if(confirm("Are You Sure You Want To Accept This Request"))
        {
            
                swal({
                        title: "Success",
                        text: "Request Successfully Accepted" ,
                        icon: "success",
                        button: "OK",
                    });

                    $("#swaps-table").DataTable().ajax.reload();

                }

})
})
</script>

@endpush