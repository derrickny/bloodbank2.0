 <!-- Topbar Start -->
 <div style="display:none;">{{$user = auth()->user()}}</div>
 <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    

        
                   

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('frontend/assets/images/users/img_avatar14.png')}}" alt="user-image" class="rounded-circle">
                            <span class="ml-1">{{ $user->full_name }} <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                           

                            

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="#" id="user-log" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                  


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.php" class="logo text-center">
                        <span class="logo-lg" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color:antiquewhite;font-weight: bolder;letter-spacing: 0.5em;">
                           HAPPY BLOOD
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                           HAPPY BLOOD
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
        
                   

                </ul>
            </div>
            <!-- end Topbar -->