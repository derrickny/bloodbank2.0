@extends('admin.app')
@section('title') NEW HOSPITAL @endsection
@section('content')

<div class="row">
<div class="card radius-10">
						<div class="card-body">
							
                            <h6 class="mb-0 text-uppercase text-center">Register New Hospital</h6>
						<div class="card border-top border-0 border-4 border-white">
							<div class="card-body p-5">
								<!-- <div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-white"></i>
									</div>
									<h5 class="mb-0 text-white">User Registration</h5>
								</div> -->
								<hr>
								<form class="row g-3" method="POST">
									<div class="col-md-12">
										<label for="name" class="form-label">Name</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bxs-user'></i></span>
											<input type="text" name="hospital_name" class="form-control border-start-0" id="hospital_name"  />
										</div>
									</div>
									<div class="col-md-12">
										<label for="location" class="form-label">Location</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bxs-category'></i></span>
											<input type="text" name="location" class="form-control border-start-0" id="location"  />
										</div>
									</div>
									<div class="col-12 clearfix">
										<label for="vehicle_capacity" class="form-label">Phone Number</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bx-phone' ></i></span>
											<input type="number" name="phone_number" class="form-control border-start-0" id="phone_number"  />
										</div>
									</div>

                                    <div class="col-12 clearfix">
										<label for="email" class="form-label">Email</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bx-message' ></i></span>
											<input type="number" name="email" class="form-control border-start-0" id="email"  />
										</div>
									</div>
									
								
									<div class="col-12 mx-auto center">
										<button type="submit" class="btn btn-light px-5 text-center my-auto">Register</button>
									</div>
								</form>
							</div>
						</div>
						</div>
					</div>
</div>
@endsection