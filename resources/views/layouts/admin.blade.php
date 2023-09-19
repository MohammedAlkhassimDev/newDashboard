<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title>ProUI - Responsive Bootstrap Admin Template</title>

    <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    @notifyCss

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets/admin-assets/img/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/img/icon57.png')}}" sizes="57x57">
    <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/img/icon72.png')}}" sizes="72x72">
    <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/img/icon76.png')}}" sizes="76x76">
    <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/img/icon114.png')}}" sizes="114x114">
    <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/img/icon120.png')}}" sizes="120x120">
    <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/img/icon144.png')}}" sizes="144x144">
    <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/img/icon152.png')}}" sizes="152x152">
    <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/img/icon180.png')}}" sizes="180x180">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{{ asset('assets/admin-assets/css/bootstrap.min.css')}}">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="{{ asset('assets/admin-assets/css/plugins.css')}}">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{{ asset('assets/admin-assets/css/main.css')}}">


    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{{ asset('assets/admin-assets/css/themes.css')}}">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    <script src="{{ asset('assets/admin-assets/js/vendor/modernizr.min.js')}}"></script>

    <style>
        .d-none {
            display: none;
        }
    </style>
</head>

<body>

    <div id="page-wrapper">

        <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
        <div class="preloader themed-background">
            <h1 class="text-center push-top-bottom text-light"><strong>Pro</strong>UI</h1>
            <div class="inner">
                <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                <div class="preloader-spinner hidden-lt-ie10"></div>
            </div>
        </div>
        <!-- END Preloader -->

        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">


            <!-- Main Sidebar -->

            @include('admin.include.sidebar')

            <!-- END Main Sidebar -->

            <!-- Main Container -->
            <div id="main-container">
                <!-- Header -->
                <!-- In the PHP version you can set the following options from inc/config file -->
                <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in {{ asset('assets/admin-assets/js/app.js')}} - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in {{ asset('assets/admin-assets/js/app.js')}} - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->


                @include('admin.include.header')

                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">

                    <!-- noty alert -->
                    <!-- include('partials._session') -->
                    <!-- end of alert -->

                    <!-- Main Content -->
                    @yield('content')
                    <!-- End Main Content -->


                </div>
                <!-- END Page Content -->



                <!-- Footer -->

                @include('admin.include.footer')
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
    </div>
    <!-- END Page Wrapper -->

    <!-- Scroll to top link, initialized in {{ asset('assets/admin-assets/js/app.js')}} - scrollToTop() -->
    <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
    <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="text-center modal-header">
                    <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                </div>
                <!-- END Modal Header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                        <fieldset>
                            <legend>Vital Info</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Username</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">Admin</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                <div class="col-md-8">
                                    <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                <div class="col-md-8">
                                    <label class="switch switch-primary">
                                        <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Password Update</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group form-actions">
                            <div class="text-right col-xs-12">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Modal Body -->
            </div>
        </div>
    </div>
    <!-- END User Settings -->

    <script src="{{ asset('assets/admin-assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/admin-assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/admin-assets/js/plugins.js')}}"></script>
    <script src="{{ asset('assets/admin-assets/js/app.js')}}"></script>

    $(document).on('click', '.add-to-cart', function(e) {

        e.preventDefault();

        var productId = $(this).data('product-id')
        var productQty = $(this).data('quantity')

        // alert(productId);

        var url = "{{ route ('cart.store') }}"
        var token = "{{ csrf_token() }}"

        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'JSON',
            data: {
                product_id: productId,
                product_qty: productQty,
                _token: token
            },
            success: function(response) {
                // console.log(response.data);

                $('body .cart-count').html(response.cart_acount);

                if (response.success) {

                    new Noty({
                        theme: 'metroui',
                        layout: 'topRight',
                        type: 'success',

                        text: response.success,
                        killer: true,
                        timeout: 2000,

                    }).show();
                }
            }
        });
    });

    <!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
    <!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script src="{{ asset('assets/admin-assets/js/helpers/gmaps.min.js')}}"></script>

    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('assets/admin-assets/js/pages/index2.js')}}"></script>
    <script>
        $(function() {
            Index2.init();
        });
    </script>

<script>
    // select the element id and when in change
    $('#is_parent').change(function () {
        // def the var and check if has property checked or not
        var is_checked = $('#is_parent').prop('checked');

        if (is_checked) {
            $('#parent_cat_div').addClass('d-none');
            $('#parent_cat_div').val('');

         }else {
            $('#parent_cat_div').removeClass('d-none');
         }
    })
</script>


@stack('scripts')

<x-notify::notify />
@notifyJs

</body>

</html>
