<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>ProUI - Responsive Bootstrap Admin Template</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('assets/admin-assets/css/favicon.png' )}}">
        <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/css/icon57.png' )}}" sizes="57x57">
        <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/css/icon72.png' )}}" sizes="72x72">
        <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/css/icon76.png' )}}" sizes="76x76">
        <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/css/icon114.png' )}}" sizes="114x114">
        <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/css/icon120.png' )}}" sizes="120x120">
        <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/css/icon144.png' )}}" sizes="144x144">
        <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/css/icon152.png' )}}" sizes="152x152">
        <link rel="apple-touch-icon" href="{{ asset('assets/admin-assets/css/icon180.png' )}}" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="{{ asset('assets/admin-assets/css/bootstrap.min.css' )}}">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="{{ asset('assets/admin-assets/css/plugins.css' )}}">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="{{ asset('assets/admin-assets/css/main.css' )}}">


        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="{{ asset('assets/admin-assets/css/themes.css' )}}">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="{{ asset('assets/admin-assets/js/vendor/modernizr.min.js' )}}"></script>
    </head>
    <body>
        <img src="{{ asset('assets/admin-assets/img/background-login.jpg' )}}" alt="Login Full Background" class="full-bg animation-pulseSlow">
        <!-- END Login Full Background -->

        <!-- Login Container -->
        <div id="login-container" class="animation-fadeIn">
            <!-- Login Title -->
            <div class="login-title text-center">
                <h1><i class="gi gi-flash"></i> <strong>ProUI</strong><br><small>Please <strong>Login</strong> or <strong>Register</strong></small></h1>
            </div>
            <!-- END Login Title -->

            <!-- Login Block -->
            <div class="block push-bit">
                <!-- Login Form -->
                <form action="{{ route('dashboard.login') }}" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
                    @csrf
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="text" id="login-email" name="email" class="form-control input-lg" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="login-password" name="password" class="form-control input-lg" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">

                        <div class="col-xs-8 text-right">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login to Dashboard</button>
                        </div>
                    </div>

                </form>
            </div>
            <!-- END Login Block -->
        </div>
        <!-- END Login Container -->

        <!-- Modal Terms -->

        <!-- END Modal Terms -->

        <script src="{{ asset('assets/admin-assets/js/vendor/jquery.min.js' )}}"></script>
        <script src="{{ asset('assets/admin-assets/js/vendor/bootstrap.min.js' )}}"></script>
        <script src="{{ asset('assets/admin-assets/js/plugins.js' )}}"></script>
        <script src="{{ asset('assets/admin-assets/js/app.js' )}}"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="{{ asset('assets/admin-assets/js/pages/login.js' )}}"></script>
        <script>$(function(){ Login.init(); });</script>
    </body>
</html>
