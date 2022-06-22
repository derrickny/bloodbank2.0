<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <title>HAPPY BLOOD BANK</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{asset('backend/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('backend/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('backend/js/pace.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('backend/plugins/notifications/css/lobibox.min.css')}}" />
	<!-- Bootstrap CSS -->
	<link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('backend/css/app.cs')}}s" rel="stylesheet">
	<link href="{{asset('backend/css/icons.css')}}" rel="stylesheet">
	<script src="{{ asset('js/app.js') }}" defer></script>
		<!-- Datatable  -->
		<link href="{{asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />

    <style>
		.center 
		{

			width:auto;
			margin-top:10px;
			
		}
		</style>
</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper" id="app">
	      <!-- Sidebar -->
          @include('admin.partials.sidebar')
          <!-- End  -->
		<!--start header -->
        @include('admin.partials.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
           <dashboard></dashboard>
				
         @yield('content')
					  
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2022. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->

	<!-- Bootstrap JS -->
	<script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('backend/js/jquery.min.js')}}"></script>
	<script src="{{asset('backend/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('backend/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<!-- <script src="{{asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script> -->
	<script src="{{asset('backend/plugins/jquery-knob/excanvas.js')}}"></script>
	<script src="{{asset('backend/plugins/jquery-knob/jquery.knob.js')}}"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	 
	<!--app JS-->
	<script src="{{asset('backend/js/app.js')}}"></script>
	 <!-- Scripts -->
	 <!-- Datable Js Plugin -->
	<script src="{{asset('backend/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>

	 	<!--notification js -->
	<script src="{{asset('backend/plugins/notifications/js/lobibox.min.js')}}"></script>
	<script src="{{asset('backend/plugins/notifications/js/notifications.min.js')}}"></script>
	<script src="{{asset('backend/plugins/notifications/js/notification-custom-script.js')}}"></script>

	 @stack('scripts')
	 @stack('donor_scripts')
	 <script>
		 function printErrorMsg(msg,div)
					 {
            //  alert('#' + div);
						 $("#" + div).find("ul").html('');
						 $("#" + div).css('display','block');
						 $.each(msg,function(key,value){
              $("#" + div).find('ul').append('<li>' + value + '</li>');
						 });
					 }
	</script>
</body>


</html>