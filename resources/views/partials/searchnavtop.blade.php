<li class="app-search dropdown me-3 d-none d-lg-block">
    <form>
        <input type="search" class="form-control rounded-pill" placeholder="Search..." id="top-search">
        <span class="fe-search search-icon font-16"></span>
    </form>
    <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
        <!-- item-->
        <div class="dropdown-header noti-title">
            <h5 class="text-overflow mb-2">Found 22 results</h5>
        </div>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="fe-home me-1"></i>
            <span>Analytics Report</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="fe-aperture me-1"></i>
            <span>How can I help you?</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="fe-settings me-1"></i>
            <span>User profile settings</span>
        </a>

        <!-- item-->
        <div class="dropdown-header noti-title">
            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
        </div>

        <div class="notification-list">
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="d-flex align-items-start">
                    <img class="d-flex me-2 rounded-circle" src="{{ asset('backend/assets/images/users/user-2.jpg') }}" alt="Generic placeholder image" height="32">
                    <div class="w-100">
                        <h5 class="m-0 font-14">Erwin E. Brown</h5>
                        <span class="font-12 mb-0">UI Designer</span>
                    </div>
                </div>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="d-flex align-items-start">
                    <img class="d-flex me-2 rounded-circle" src="{{ asset('backend/assets/images/users/user-5.jpg') }}" alt="Generic placeholder image" height="32">
                    <div class="w-100">
                        <h5 class="m-0 font-14">Jacob Deo</h5>
                        <span class="font-12 mb-0">Developer</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</li>