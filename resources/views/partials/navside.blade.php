<div class="app-menu">

    <!-- Brand Logo -->
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

    <!-- menu-left -->
    <div class="scrollbar">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('backend/assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted mb-0">Admin Head</p>
        </div>

        <!--- Menu -->
        <ul class="menu">

            <li class="menu-title">Navigation</li>

            <li class="menu-item">
                <a href="#menuDashboards" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="airplay"></i></span>
                    <span class="menu-text"> Dashboards </span>
                </a>
                <div class="collapse" id="menuDashboards">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="index.html" class="menu-link">
                                <span class="menu-text">Dashboard 1</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="dashboard-2.html" class="menu-link">
                                <span class="menu-text">Dashboard 2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-title">Apps</li>

            <li class="menu-item">
                <a href="apps-calendar.html" class="menu-link">
                    <span class="menu-icon"><i data-feather="calendar"></i></span>
                    <span class="menu-text"> Calendar </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="apps-chat.html" class="menu-link">
                    <span class="menu-icon"><i data-feather="message-square"></i></span>
                    <span class="menu-text"> Chat </span>
                </a>
            </li>



            <li class="menu-item">
                <a href="#menuCrm" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="users"></i></span>
                    <span class="menu-text"> CRM </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuCrm">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="crm-dashboard.html" class="menu-link">
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="crm-contacts.html" class="menu-link">
                                <span class="menu-text">Contacts</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>


        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>