	<!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('backend/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">HAPPY BLOOD BANK</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>New Hospital</a>
						</li>
						<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Hospitals List</a>
						</li>
						<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Donors List</a>
						</li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Blood Groups</a>
						</li>
						<li> <a href="{{ url('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="bx bx-right-arrow-alt"></i>Logout
						<form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
					</a>
						</li>

						</li>
					</ul>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->