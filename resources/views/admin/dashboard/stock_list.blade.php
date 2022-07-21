@extends('admin.app')
@section('title') Stocks List @endsection
@section('content')
<div class="row">
    <!-- Patients List -->
    <div class="profile" id="hospitals-list">
        <h6 class="mb-0 text-uppercase">Stocks List</h6>
        <hr />
        <div class="card border-top border-0 border-4 border-white">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bxs-user me-1 font-22 text-white"></i>
                    </div>
                    <h5 class="mb-0 text-white">Stocks Details</h5>

                </div>
                <hr>
                <div class="table-responsive">
                    <table id="stock-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Hospital Name</th>
                                <th>Blood Group</th>
                                <th>Pints Donated</th>
                            
                            </tr>
                        </thead>


                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Hospital Name</th>
                                <th>Blood Group</th>
                                <th>Pints Donated</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
        </div>
    </div>
    <!-- End -->
</div>
@endsection
@push('donor_scripts')
<script>
$(document).ready(function() {
    //Hospitals Details Table
    var donors_table = $('#stock-table').DataTable({
        "processing": true,
        "sAjaxSource": '{{route("stocks")}}',
        "pageLength": 10,
        "type": "POST",
        "columns": [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
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

        ],
        "dom": "lBfrtip",
        "buttons": [
            'excel',
            'pdf',
            'print'
        ]
    });
    donors_table.buttons().container()
        .appendTo('#stock-table_wrapper .col-md-6:eq(0)');
    // End
})
</script>
@endpush