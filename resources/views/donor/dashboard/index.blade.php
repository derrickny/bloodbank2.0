@extends('donor.dashboard.layout')
@section('title') Hospitals List @endsection
@section('content')
   <!-- Hospitals List -->
   <div id="hospitals-list" class="row profile">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title"><b>Available Hospitals</b></h4>
            <p class="sub-header">
            </p>

            <table id="hospital-table" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                <tr>
                <th>#</th>
                <th>Name</th>
                <th>Official/Professional Email</th>
                <th>Telephone/Phone Number</th>
                <th>Location</th>
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

@push('scripts')
<script>
    $(document).ready(function(){
    $("#datatable").DataTable();
    $("#hospital-table").DataTable({
        "processing":true,
        "sAjaxSource": '{{route("user_hospitals")}}',
				"pageLength": 10,
				"type": "GET",
                "columns":[

                    {data:'DT_RowIndex',name: 'DT_RowIndex'},
                    {data:'hospital_name',name:'hospital_name'},
                    {data:'hospital_email',name:'hospital_email'},
                    {data:'hospital_phone',name:'hospital_phone'},
                    {data:'hospital_location',name:'hospital_location'},
                   
                    {data:'action',name:'action',orderable:false,searchable:false}
                    ],
        "lengthChange":!1,
       });
        

               
              

    })
</script>

@endpush