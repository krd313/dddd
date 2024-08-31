<div class="navbar-custom">
    <div class="topbar">
        <div class="topbar-menu d-flex align-items-center gap-1">

            <!-- Topbar Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a href="index.html" class="logo-light">
                    <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="logo" class="logo-lg">
                    <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
                </a>

                <!-- Brand Logo Dark -->
                <a href="index.html" class="logo-dark">
                    <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="dark logo" class="logo-lg">
                    <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- Dropdown Menu -->
            <div class="dropdown d-none d-xl-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Create New
                    <i class="mdi mdi-chevron-down ms-1"></i>
                </a>
                <div class="dropdown-menu">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-briefcase me-1"></i>
                        <span>New Projects</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-user me-1"></i>
                        <span>Create Users</span>
                    </a>


                </div>
            </div>

            <!-- Mega Menu Dropdown -->
            <!-- Mega Menu Dropdown -->
            <!-- Mega Menu Dropdown -->

        </div>

        <ul class="topbar-menu d-flex align-items-center">
            <!-- Topbar Search Form -->


            <!-- Fullscreen Button -->
            <li class="d-none d-md-inline-block">
                <a class="nav-link waves-effect waves-light" href="" data-toggle="fullscreen">
                    <i class="fe-maximize font-22"></i>
                </a>
            </li>

            <!-- Search Dropdown (for Mobile/Tablet) -->
            <li class="dropdown d-lg-none">
                <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ri-search-line font-22"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                    <form class="p-3">
                        <input type="search" id="searchNavTop" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>

            <!-- App Dropdown -->


            <!-- Language flag dropdown  -->


            <!-- Notofication dropdown -->


            <!-- Light/Dark Mode Toggle Button -->
            <li class="d-none d-sm-inline-block">
                <div class="nav-link waves-effect waves-light" id="light-dark-mode">
                    <i class="ri-moon-line font-22"></i>
                </div>
            </li>

            <!-- User Dropdown -->
            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('backend/assets/images/users/user-1.jpg') }}" alt="user-image" class="rounded-circle">
                    <span class="ms-1 d-none d-md-inline-block">
                        User Name <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>



                    <!-- item-->

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

            <li><a class="dropdown-item notify-item" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <i class="fe-log-out"></i><span> Logout</span>
                </a>
            </li>
            </form>

    </div>
    </li>

    <!-- Right Bar offcanvas button (Theme Customization Panel) -->

    </ul>
</div>
</div>