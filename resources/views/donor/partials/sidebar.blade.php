
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="{{route('user.dashboard')}}">
                                    <i class="fe-airplay"></i>
                                    
                                    <span> Dashboard </span>
                                </a>
                            </li>


                          
                                 <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span>Hospitals</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    
                                    <li><a href="#" data-id="doctors-list">View Hospital</a></li>
                                 
                                </ul>
                            </li>
                            

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-box"></i>
                                    <span>Rewards </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="#" data-id="patients-list">Rewards</a></li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-box"></i>
                                    <span> Donations </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="#" data-id="records-list">View Donations List</a></li>
                                   
                                </ul>
                            </li>
                         


                            <li>
                                <a href="#" id="user-logout">
                                    <i class="fe-disc"></i>
                                    <span class="badge badge-warning badge-pill float-right"></span>
                                    <span> Logout </span>
                                </a>
                               
                            </li>
            
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            @push('logout-scripts')
            <script>
        $(document).ready(function(){
         
        //Logout
        $(document).on('click','#user-logout,#use-log',function(e)
            {
                 e.preventDefault();
                 $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                $.ajax({
                    url:"{{route('user.logout')}}",
                    method:"POST",
                    success:function(data)
                    {
                        alert("You Have Been Logged Out");
                       
                            window.location.href = "{{route('user.login')}}";
                        
                    }

                })
            })
          
        })
    </script>

            @endpush