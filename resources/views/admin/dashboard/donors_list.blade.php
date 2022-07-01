@extends('admin.app')
@section('title') Donors List @endsection
@section('content')
<div class="row">
    <!-- Patients List -->
    <div class="profile" id="hospitals-list">
					<h6 class="mb-0 text-uppercase">Donors List</h6>
					<hr />
					<div class="card border-top border-0 border-4 border-white">
						<div class="card-body p-5">
							<div class="card-title d-flex align-items-center">
								<div><i class="bx bxs-user me-1 font-22 text-white"></i>
								</div>
								<h5 class="mb-0 text-white">Donors Details</h5>

							</div>
							<hr>
							<div class="table-responsive">
								<table id="donors_table" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>#</th>
                                            <th>Name</th>
											<th> Contact Details</th>
											<th> Date of Birth</th>
                                            <th>Blood Group</th>
											<th>Gender</th>
											
										</tr>
									</thead>
									<tbody>

									</tbody>
									<tfoot>
										<tr>
                                            <th>#</th>
                                            <th>Name</th>
											<th> Contact Details</th>
											<th> Date of Birth</th>
                                            <th>Blood Group</th>
											<th>Gender</th>
										
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
			var donors_table = $('#donors_table').DataTable({
				"processing": true,
				"sAjaxSource": '{{route("view_donors")}}',
				"pageLength": 10,
				"type": "POST",
                "columns":[
                    {data:'DT_RowIndex',name: 'DT_RowIndex'},
                    {data:'full_name',name:'full_name'},
                    {data:'contact_details',name:'contact_details'},
                    {data:'date_of_birth',name:'date_of_birth'},
                    {data:'blood_group',name:'blood_group'},
                    {data:'gender',name:'gender'},
                    
                    ],  
				"dom": "lBfrtip",
				"buttons": [
					'excel',
					'pdf',
					'print'
				]
			});
			donors_table.buttons().container()
				.appendTo('#hospital_table_wrapper .col-md-6:eq(0)');
			// End
    })
    </script>
@endpush