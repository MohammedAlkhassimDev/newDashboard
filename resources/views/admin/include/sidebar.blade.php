

<div id="sidebar">
    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Brand -->
            <a href="index.html" class="sidebar-brand">
                <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong>Pro</strong>UI</span>
            </a>
            <!-- END Brand -->

            <!-- User Info -->
            <div class="clearfix sidebar-section sidebar-user sidebar-nav-mini-hide">
                <div class="sidebar-user-avatar">
                    <a href="page_ready_user_profile.html">
                        <img src="{{ asset('assets/front-assets/img/avatar.jpg')}}" alt="avatar">
                    </a>
                </div>
                <div class="sidebar-user-name">John ss</div>
                <div class="sidebar-user-links">
                    <a href="page_ready_user_profile.html" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                    <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                    <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                    <a href="login.html" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                </div>
            </div>
            <!-- END User Info -->


            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li>
                    <a href="{{ route ('dashboard.home') }}"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ route ('dashboard.categories.index') }}" class=""><i class="gi gi-leaf sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Category</span></a>
                </li>
                <li>
                    <a href="{{ route ('dashboard.banners.index') }}" class=""><i class="gi gi-leaf sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Banner</span></a>
                </li>
                <li>
                    <a href="{{ route ('dashboard.brands.index') }}" class=""><i class="gi gi-leaf sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Brand</span></a>
                </li>
                <li>
                    <a href="{{ route ('dashboard.products.index') }}" class=""><i class="gi gi-leaf sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Products</span></a>
                </li>
                <li>
                    <a href="{{ route ('dashboard.order.index') }}" class=""><i class="gi gi-leaf sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Orders</span></a>
                </li>
                <li>
                    <a href="{{ route ('dashboard.coupons.index') }}" class=""><i class="gi gi-leaf sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Coupons</span></a>

                </li>


            </ul>
            <!-- END Sidebar Navigation -->

        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>
