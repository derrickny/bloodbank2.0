@extends('admin.app')
@section('title') NEW HOSPITAL @endsection
@section('content')

<div class="row">
<div class="card radius-10">
						<div class="card-body">
							
                            <h6 class="mb-0 text-uppercase text-center">Register New Hospital</h6>
						<div class="card border-top border-0 border-4 border-white">
							<div class="card-body p-5">
                            <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                           <div id="product_errors" class="alert alert-danger print-error-msg w3-padding-right w3-padding-left" style="display:none;">
                                            <a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
                                            <ul class="w3-ul" style="list-style:none;">
                                            
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
								<hr>
								<form id="hospitalForm" class="row g-3" method="POST"  enctype="multipart/form-data">
									<div class="col-md-12">
										<label for="name" class="form-label">Name</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bxs-user'></i></span>
											<input type="text" name="hospital_name" class="form-control border-start-0" id="hospital_name"  />
										</div>
									</div>
									<div class="col-md-12">
										<label for="location" class="form-label">Location</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bxs-category'></i></span>
											<input type="text" name="hospital_location" class="form-control border-start-0" id="location"  />
										</div>
									</div>
									<div class="col-12 clearfix">
										<label for="hospital_phone" class="form-label">Phone Number</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bx-phone' ></i></span>
											<input type="number" name="hospital_phone" class="form-control border-start-0" id="phone_number"  />
										</div>
									</div>

                                    <div class="col-12 clearfix">
										<label for="email" class="form-label">Official/Professional Email</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bx-message' ></i></span>
											<input type="email" name="hospital_email" class="form-control border-start-0" id="email"  />
										</div>
									</div>

                                    <div class="col-12 clearfix">
										<label for="hospital_doc" class="form-label">Upload Hospital License Doc</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bx-message' ></i></span>
											<input type="file" name="hospital_doc" class="form-control border-start-0" id="hospital_doc"  />
										</div>
									</div>
									
								
									<div class="col-12 mx-auto center">
										<button type="submit" id="buttonHospital" class="btn btn-light px-5 text-center my-auto">Register</button>
									</div>
								</form>
							</div>
						</div>
						</div>
					</div>
</div>
@endsection

@push('scripts')
<script>
	$(document).ready(function(){
		
            // Add New Product
            $('#hospitalForm').on('submit',(function(e){
        //alert("You Are Good To Go");
        e.preventDefault();
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
            url:"{{ route('hospital.store') }}",
            type:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
                $('#buttonHospital').html('Adding New Hospital');
            },
            success : function(response)
            {
                if($.isEmptyObject(response.hospital_errors))
                {
                  //$('#myModal').modal('toggle');
                  $("#hospital_errors").fadeOut(1000,function(){
                       
                        
                    });

                    Lobibox.notify('success', {
								pauseDelayOnHover: true,
								size: 'mini',
								rounded: true,
								icon: 'bx bx-check-circle',
								delayIndicator: false,
								continueDelayOnInactiveTab: false,
								position: 'top right',
								msg: 'NEW HOSPITAL SUCCESSFULLY ADDED.'
							});
        
                   $('#hospitalForm').trigger("reset");
                   
                    $("#buttonHospital").html('ADD HOSPITAL');

                    // table.ajax.reload();
                }
                else
                {
                    $("#hospital_errors").fadeIn(1000,function(){
                        printErrorMsg(response.hospital_errors,'hospital_errors');
                        $("#buttonHospital").html('ADD HOSPITAL');
                    });
                }
            }
        });
        
       }));
            //End
	})
	</script>

@endpush