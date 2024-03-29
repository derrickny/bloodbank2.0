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
            <h4 class="header-title"><b>Other Hospitals Blood Stocks</b></h4>
            <p class="sub-header">
            </p>

            <table id="others-stock-table" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>Hospital Name</th>
                        <th>Blood Group</th>
                        <th>Pints Donated</th>
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
    $("#others-stock-table").DataTable({
        "processing": true,
        "sAjaxSource": '{{route("other-stock")}}',
        "pageLength": 10,
        "type": "GET",
        "columns": [{
                data: 'hospital_name',
                name: 'hospital_name'
            },
            {
                data: 'blood_group',
                name: 'blood_group'
            },
            {
                data: 'deducted',
                name: 'deducted'
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

    //Js Show Popup Modal with donation booking form

    $(document).on('click', '.swap', function(e) {
        //Hospital Id
        let id = $(this).attr('id');
        let name  = $(this).attr('data-id');
        $('.hospital_name').html(name);
        $('#hidden_hospital_name').val(name)
        $('#hidden_hospital_id').val(id);
        $('#swap_modal').modal('show');
    })

    //Get Current Hospital Selected Blood Group Stock
    // $(document).on('change','#bld_grp',function(){
    //     let blood_group = $(this).val();
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    //     $.ajax({
    //         url:"{{route('current-stock')}}",
    //         type:"POST",
    //         data:{blood_group:blood_group},
    //         success:function(response)
    //         {
    //             $('#our_stock').val(response);
    //         }
    //     })
    // })

    //Get Other Hospital Selected Blood Group Stock
    // $(document).on('change','#other_bld_grp',function(){
    //     let blood_group = $(this).val();
    //     let id = $('#hidden_hospital_id').val();
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    //     $.ajax({
    //         url:"{{route('other-current-stock')}}",
    //         type:"POST",
    //         data:{blood_group:blood_group,id:id},
    //         success:function(response)
    //         {
    //             $('#other_stock').val(response);
    //         }
    //     })
    // })


    //Swap  Form Details To The Database
    $('#formSwap').on('submit', (function(e) {
        //alert("You Are Good To Go");
        let nam = $('#hidden_hospital_name').val();
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('swap') }}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#buttonSwap').html('Requesting.....');
            },
            success: function(response) {
                if ($.isEmptyObject(response.errors)) {
                    //$('#myModal').modal('toggle');
                    $("#errors").fadeOut(1000, function() {


                    });
                    swal({
                        title: "Success",
                        text: "Blood Swap Request Sent,Wait For " + name + " To Accept " ,
                        icon: "success",
                        button: "OK",
                    });

                    $('#formSwap').trigger("reset");

                    $("#buttonSwap").html('REQUEST');
                    $('#swap_modal').modal('hide');

                    // table.ajax.reload();
                } else {
                    $("#errors").fadeIn(1000, function() {
                        printErrorMsg(response.errors, 'errors');
                        $("#buttonSwap").html('REQUET');
                    });
                }
            }
        });

    }));
    //End


})
</script>

@endpush