@extends('admin.app')
@section('title') Hospitals List @endsection
@section('content')
<div class="row">
    <!-- Patients List -->
    <div class="profile" id="hospitals-list">
					<h6 class="mb-0 text-uppercase">Hospitals List</h6>
					<hr />
					<div class="card border-top border-0 border-4 border-white">
						<div class="card-body p-5">
							<div class="card-title d-flex align-items-center">
								<div><i class="bx bxs-user me-1 font-22 text-white"></i>
								</div>
								<h5 class="mb-0 text-white">Hospitals Details</h5>

							</div>
							<hr>
							<div class="table-responsive">
								<table id="hospital_table" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Official/Professional Email</th>
                                            <th>Telephone/Phone Number</th>
											<th>Location</th>
											<th>Verification Document</th>
											<th>Hospital Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

									</tbody>
									<tfoot>
										<tr>
                                            <th>#</th>
											<th>Name</th>
											<th>Official/Professional Email</th>
                                            <th>Telephone/Phone Number</th>
											<th>Location</th>
											<th>Verification Document</th>
											<th>Hospital Status</th>
											<th>Action</th>
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
@push('scripts')
<script>
    $(document).ready(function() {
        //Hospitals Details Table
			var hospital_table = $('#hospital_table').DataTable({
				"processing": true,
				"sAjaxSource": '{{route("hospital.index")}}',
				"pageLength": 10,
				"type": "POST",
                "columns":[

                    {data:'DT_RowIndex',name: 'DT_RowIndex'},
                    {data:'hospital_name',name:'hospital_name'},
                    {data:'hospital_email',name:'hospital_email'},
                    {data:'hospital_phone',name:'hospital_phone'},
                    {data:'hospital_location',name:'hospital_location'},
                    {data:'document',name:'document'},
                    {data:'hospital_status',name:'hospital_status'},
                    {data:'action',name:'action',orderable:false,searchable:false}
                    ],  
				"dom": "lBfrtip",
				"buttons": [
					'excel',
					'pdf',
					'print'
				]
			});
			hospital_table.buttons().container()
				.appendTo('#hospital_table_wrapper .col-md-6:eq(0)');
			// End
    })
    </script>
@endpush