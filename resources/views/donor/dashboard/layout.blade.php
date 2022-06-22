<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Happy - Donor User Dashboard</title>
           <!-- CSRF Token -->
           <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Happy Donor" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}">

         <!-- third party css -->
         <link href="{{asset('frontend/assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('frontend/assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('frontend/assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('frontend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('frontend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('frontend/assets/css/sweetalert.css')}}">
          <!-- font-awesome-icons -->
        <link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet"> 
</head>
        
        <body>
              <!-- Begin page -->
        <div id="wrapper">
            <!-- top header -->
            @include('donor.partials.header')
            <!-- end header -->

            <!-- sidebar -->
            @include('donor.partials.sidebar')
            <!-- end sidebar -->

         <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
<!-- Jquery  -->
<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"> </script>
<!-- End -->
 <!-- Vendor js -->
 <script src="{{asset('frontend/assets/js/vendor.min.js')}}"></script>
  <!-- Required datatable js -->
  <script src="{{asset('frontend/assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('frontend/assets/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <!-- Buttons examples -->
  <script src="{{asset('frontend/assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('frontend/assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('frontend/assets/libs/jszip/jszip.min.js')}}"></script>
  <script src="{{asset('frontend/assets/libs/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{asset('frontend/assets/libs/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{asset('frontend/assets/libs/datatables/buttons.html5.min.js')}}"></script>
  <script src="{{asset('frontend/assets/libs/datatables/buttons.print.min.js')}}"></script>

  <!-- Responsive examples -->
  <script src="{{asset('frontend/assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('frontend/assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>


<script src="{{asset('frontend/js/sweetalert.min.js')}}"></script>
       

         <!-- Chart JS -->
         <script src="{{asset('frontend/assets/libs/chart-js/Chart.bundle.min.js')}}"></script>

          <!-- Init js -->
        <!-- <script src="assets/js/pages/dashboard.init.js"></script> -->

        <!-- App js -->
        <script src="{{asset('frontend/assets/js/app.min.js')}}"></script>

        @stack('scripts')
        @stack('logout-scripts')
       </body>  
</html>