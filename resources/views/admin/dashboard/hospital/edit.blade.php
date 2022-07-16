@extends('admin.app')
@section('title') NEW HOSPITAL @endsection
@section('content')

<div class="row">
<div class="card radius-10">
						<div class="card-body">
							
                            <h6 class="mb-0 text-uppercase text-center">UPDATE {{ $hospital->hospital_name }} Details</h6>
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
								<form id="hospitalUpdate" class="row g-3" method="POST"  enctype="multipart/form-data">
									<div class="col-md-12">
										<label for="name" class="form-label">Name</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bxs-user'></i></span>
											<input type="text" name="hospital_name" value="{{$hospital->hospital_name}}" class="form-control border-start-0" id="hospital_name"  />
										</div>
									</div>
									<div class="col-md-12">
										<label for="location" class="form-label">Location</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bxs-category'></i></span>
											<input type="text" name="hospital_location" value="{{$hospital->hospital_location}}" class="form-control border-start-0" id="location"  />
										</div>
									</div>
									<div class="col-12 clearfix">
										<label for="hospital_phone" class="form-label">Phone Number</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bx-phone' ></i></span>
											<input type="number" name="hospital_phone" value="{{$hospital->hospital_phone}}" class="form-control border-start-0" id="phone_number"  />
										</div>
									</div>

                                    <div class="col-12 clearfix">
										<label for="email" class="form-label">Official/Professional Email</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bx-message' ></i></span>
											<input type="email" name="hospital_email" value="{{$hospital->hospital_email}}" class="form-control border-start-0" id="email"  />
										</div>
									</div>
                                    <input type="hidden" name="hospital_doc" value="{{$hospital->hospital_doc}}">
                                    <input type="hidden" name="hospital_id" id="hospital_id" value="{{$hospital->id}}">

                                    <!-- <div class="col-12 clearfix">
										<label for="hospital_doc" class="form-label">Upload Hospital License Doc</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bx-message' ></i></span>
											<input type="file" name="hospital_doc" class="form-control border-start-0" id="hospital_doc"  />
										</div>
									</div> -->
									
								
									<div class="col-12 mx-auto center">
										<button type="submit" id="buttonHospital" class="btn btn-light px-5 text-center my-auto">UPDATE</button>
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
		
            // UPDATE HOSPITAL
            $('#hospitalUpdate').on('submit',(function(e){
        //alert("You Are Good To Go");
        e.preventDefault();
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let id = $('#hospital_id').val();
        $.ajax({
            url:"/admin/update-hospital",
            type:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
                $('#buttonHospital').html('Updating......');
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
								msg: ' HOSPITAL SUCCESSFULLY UPDATED.'
							});
        
                   $('#hospitalUpdate').trigger("reset");
                   
                    $("#buttonHospital").html('UPDATE');
                    setTimeout('window.location.href = "/admin"; ',3000);


                    // table.ajax.reload();
                }
                else
                {
                    $("#hospital_errors").fadeIn(1000,function(){
                        printErrorMsg(response.hospital_errors,'hospital_errors');
                        $("#buttonHospital").html('UPDATE');
                    });
                }
            }
        });
        
       }));
            //End
	})
	</script>

@endpush