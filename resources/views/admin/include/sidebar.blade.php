

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
            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
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
                    <a href="{{ route ('dashboard.brands.index') }}" class=""><i class="gi gi-leaf sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Brand</span></a>
                </li>
                <li>
                    <a href="{{ route ('dashboard.products.index') }}" class=""><i class="gi gi-leaf sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Products</span></a>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-shopping_cart sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">eCommerce</span></a>
                    <ul>
                        <li>
                            <a href="page_ecom_dashboard.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="page_ecom_orders.html">Orders</a>
                        </li>
                        <li>
                            <a href="page_ecom_order_view.html">Order View</a>
                        </li>
                        <li>
                            <a href="page_ecom_products.html">Products</a>
                        </li>
                        <li>
                            <a href="page_ecom_product_edit.html">Product Edit</a>
                        </li>
                        <li>
                            <a href="page_ecom_customer_view.html">Customer View</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a><a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"><i class="gi gi-lightbulb"></i></a></span>
                    <span class="sidebar-header-title">Widget Kit</span>
                </li>
                <li>
                    <a href="page_widgets_stats.html"><i class="gi gi-charts sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Statistics</span></a>
                </li>
                <li>
                    <a href="page_widgets_social.html"><i class="gi gi-share_alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Social</span></a>
                </li>
                <li>
                    <a href="page_widgets_media.html"><i class="gi gi-film sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Media</span></a>
                </li>
                <li>
                    <a href="{{ route ('dashboard.setting') }}"><i class="gi gi-link sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Settings</span></a>
                </li>
                <!-- <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                    <span class="sidebar-header-title">Design Kit</span>
                </li> -->
               
           
            </ul>
            <!-- END Sidebar Navigation -->

        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>
