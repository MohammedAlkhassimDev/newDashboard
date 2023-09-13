<?php

//use Illuminate\Support\Facades\DB;

//$categories = DB ::table('categories') ->  where ('is_parent', '1') -> get(); -->
//  echo '<pre>';
//  print_r($categories);
//  echo '<pre>';


?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content=" " />
    <!-- Title -->
    <title> Ecommerce Store </title>
    <!-- Favicon  -->
    <link rel="shortcut icon" href="{{ asset('assets/front-assets/images/fevicon.png')}}" />

    <!-- *********** CSS Files *********** -->
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/plugins.css')}}" />
    <!-- Styles CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/styles.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/front-assets/css/responsive.css')}}" />

</head>

<body class="template-index">
    <!-- Start Page Loader -->
    <div class="page-loading"></div>
    <!-- End Page Loader -->

    <!--  Start Main Wrapper -->
    <div class="main-wrapper cart-drawer-push">
        <!-- Start Promotional Bar Section -->
        <div class="border-0 promotional-bar rounded-0 d-flex align-items-center alert alert-warning fade show" role="alert">
            <div class="container-fluid full-promotional-bar">
                <span>Shop with discount 50%. Hurry Up! <a href="#">Shop Now</a></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti-close"></i></button>
            </div>
        </div>
    </div>
    <!-- End Promotional Bar Section -->

    <!-- Start Header Section -->
    <header class="bg-white header">


        <div class="container-fluid full-header">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Start Navigation -->
                <nav class="p-0 navigation navbar position-static navbar-expand-lg w-50">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"><span class="icon ti-menu"></span></button>
                    <div id="navbar-collapse" class="navbar-collapse collapse dual-nav">
                        <a href="#" class="clearfix closeNav-btn d-lg-none" id="closeNav" title="Close"><span class="mr-2 menu-close">Close</span><i class="ti-close" aria-hidden="true"></i></a>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('home')}}">Home</a>
                                <!-- Start Megamenu Dropdown -->

                                <!-- End Megamenu Dropdown -->
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('shop')}}">Shop</a>
                                <!-- Start Megamenu Dropdown -->

                                <!-- End Megamenu Dropdown -->
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('cart')}}">Cart</a>
                                <!-- Start Megamenu Dropdown -->

                                <!-- End Megamenu Dropdown -->
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('compare')}}">Compare</a>
                                <!-- Start Megamenu Dropdown -->

                                <!-- End Megamenu Dropdown -->
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('about')}}">About</a>
                                <!-- Start Megamenu Dropdown -->

                                <!-- End Megamenu Dropdown -->
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('contact')}}">Contact Us</a>
                                <!-- Start Megamenu Dropdown -->

                                <!-- End Megamenu Dropdown -->
                            </li>

                        </ul>
                    </div>
                </nav>
                <!-- Start Navigation -->
                <!-- Start Logo -->
                <div class="p-0 mx-auto text-center navbar-brand logo">
                    <a href="index.html" class="logo-img"><img class="img-fluid" src="{{ asset('assets/front-assets/images/logo/logo.png')}}" alt="logo" title="Posh Auto Parts" /></a>
                </div>
                <!-- End Logo -->
                <!-- Start Right Menu -->
                <div class="w-50 right-side">
                    <!-- Start Minicart -->
                    <div class="float-right minicart">
                        <a href="#" class="cart-btn" title="Cart" data-toggle="modal" data-target="#mycartdrawer">
                            <i class="icon ti-shopping-cart"></i>
                            <div class="cart-count" id="header-ajax">

                                @include('front.cart.header')
                            </div>
                        </a>
                    </div>
                    <!-- End Minicart -->
                    <!-- Start Setting Menu -->
                    <div class="float-right setting-menu">
                        <a href="#" class="setting-toggle" title="My Account">
                            <i class="icon ti-settings"></i>
                        </a>
                        <div class="settinglinks" style="display:none">
                            <!-- Menu Links -->
                            <div class="my-links">
                                <h4>My Account</h4>
                                <ul class="p-0 m-0">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                </ul>
                            </div>
                            <!-- Emd Menu Links -->
                            <!-- Start Currency Picker -->
                            <div class="my-currency">
                                <h4>Currency</h4>
                                <ul class="currency-picker">
                                    <li class="item"><a href="#"><i class="fa fa-usd"></i> USD</a></li>
                                    <li class="item"><a href="#"><i class="fa fa-eur"></i> EUR</a></li>
                                    <li class="item"><a href="#"><i class="fa fa-gbp"></i> GBP</a></li>
                                    <li class="item"><a href="#"><i class="fa fa-inr"></i> INR</a></li>
                                </ul>
                            </div>
                            <!-- End Currency Picker -->
                            <!-- Start Languages -->
                            <div class="my-languages">
                                <h4>Languages</h4>
                                <ul class="languages-picker">
                                    <li class="item english"><a href="#">English</a></li>
                                    <li class="item french"><a href="#">French</a></li>
                                    <li class="item spanish"><a href="#">Spanish</a></li>
                                    <li class="item germany"><a href="#">German</a></li>
                                </ul>
                            </div>
                            <!-- End Languages -->
                        </div>
                    </div>
                    <!-- End Setting Menu -->
                    <!-- Start Search Box -->
                    <div class="float-right search-box">
                        <a href="#" title="Search" class="search-open search-toggle" data-toggle="modal" data-target="#searchform">
                            <i class="icon ti-search"></i>
                        </a>
                    </div>
                    <!-- End Search Show -->
                </div>
                <!-- End Right Menu -->
            </div>
        </div>

    </header>
    <!-- End Header Section -->

    <!-- Start Main Content -->
    <main class="main-content">
        <!-- Start Banner Slidershow Section -->

        @yield('content')

        <!-- End Popular Brand Section -->
    </main>
    <!-- End Main Content -->

    <!-- Start Footer Section -->
    <footer class="footer">
        <div class="clearfix footer-top">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 logo-wellcome">
                        <div class="ftr-logo">
                            <a href="index.html"><img class="img-fluid" src="{{ asset('assets/front-assets/images/logo/gray-logo.png')}}" alt="Posh Auto Parts" title="Posh Auto Parts" /></a>
                        </div>
                        <div class="welcome-text">
                            <p class="m-0">Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.</p>
                        </div>
                        <div class="social-icons">
                            <ul class="flex-row text-center d-flex align-items-center">
                                <li><a href="#" title="Facebook"><i class="icon ti-facebook"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="icon ti-twitter"></i></a></li>
                                <li><a href="#" title="Instagram"><i class="icon ti-instagram"></i></a></li>
                                <li><a href="#" title="Google Plus"><i class="icon ti-google"></i></a></li>
                                <li><a href="#" title="Youtube"><i class="icon ti-youtube"></i></a></li>
                                <li><a href="#" title="Vimeo"><i class="icon ti-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 newsletter-menulinks">
                        <div class="row no-gutters footer-newsletter">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <h3>Sign up to our Newsletter and receive 10% off your first order!</h3>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <form action="#" class="needs-validation" method="post">
                                    <div class="m-0 form-group position-relative">
                                        <input type="text" class="form-control" placeholder="Enter your email address..." required />
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-paper-plane-o"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row no-gutters footer-links">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 menu-items">
                                <h4>Quick Link</h4>
                                <ul class="linklist">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="faqs.html">FAQs</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 menu-items">
                                <h4>Help Link</h4>
                                <ul class="linklist">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="wishlist.html">My Wishlist</a></li>
                                    <li><a href="order-tracking.html">Order Traking</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 menu-items">
                                <h4>Custom Link</h4>
                                <ul class="linklist">
                                    <li><a href="#">Parts Shop</a></li>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="#">Refunds</a></li>
                                    <li><a href="#">Help & support</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact">
                                <h4>Contact Information</h4>
                                <ul class="linklist contact-info d-flex flex-column">
                                    <li><i class="icon ti-location-pin"></i><span>No 40 Baria Street 133/2, <br />NewYork, USA</span></li>
                                    <li><i class="icon fa fa-phone"></i><a href="tel:+011234567890">(+01) 123 456 7890</a></li>
                                    <li><i class="icon ti-email"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix footer-bottom">
            <div class="container">
                <div class="payment-icons pull-right">
                    <i class="fa fa-cc-visa" aria-hidden="true"></i>
                    <i class="fa fa-cc-amex" aria-hidden="true"></i>
                    <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                    <i class="fa fa-cc-discover" aria-hidden="true"></i>
                    <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                </div>
                <div class="copyright-content pt-md-1 pull-left">
                    <span class="content"> Copyright &copy; 2022 Posh Auto Parts. All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- Start Scroll Top -->
    <div id="scrollTop"><i class="ti-arrow-up"></i></div>
    <!-- End Scroll Top -->

    <!-- Start Search Drawer -->
    <div class="search-area modal fade top" id="searchform" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
            <div class="container">
                <div class="modal-content search-inline align-content-center">
                    <div class="search-head position-relative">
                        <h3>What are you looking for?</h3>
                        <a class="search-close" data-dismiss="modal" aria-label="Close">
                            <i class="ti-close" aria-hidden="true"></i>
                        </a>
                    </div>
                    <form action="#" class="position-relative">
                        <input type="text" class="form-control" placeholder="Search Products..." required />
                        <button class="search-btn" type="submit"><i class="ti-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Drawer -->

    <!-- Start Cart Drawer -->
    <div class="minicart-wrapper " id="cart-item-ajax">

        @include('front.cart.cartItem')

    </div>
    <!-- End Cart Drawer -->

    <!-- Start Product Cart Added Popup -->

    <!-- End Product Cart Added Popup -->

    <!-- Start Product Quick View Popup -->
    <div id="open-quickview-popup" class="quickview-popup magnific-popup mfp-hide">
        <div class="quickview-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="product-single-photo slider thumbnails-single">
                        <div class="single-item"><img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/quick-view-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/quick-view-1.jpg')}}" alt="image" title="image" /></div>
                        <div class="single-item"><img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/quick-view-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/quick-view-1.jpg')}}" alt="image" title="image" /></div>
                        <div class="single-item"><img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/quick-view-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/quick-view-1.jpg')}}" alt="image" title="image" /></div>
                        <div class="single-item"><img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/quick-view-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/quick-view-1.jpg')}}" alt="image" title="image" /></div>
                        <div class="single-item"><img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/quick-view-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/quick-view-1.jpg')}}" alt="image" title="image" /></div>
                    </div>
                    <div class="product-thumb slider thumbnail-items">
                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/quick-view-1-item.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/quick-view-1-item.jpg')}}" alt="image" title="image" /></div>
                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/quick-view-1-item.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/quick-view-1-item.jpg')}}" alt="image" title="image" /></div>
                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/quick-view-1-item.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/quick-view-1-item.jpg')}}" alt="image" title="image" /></div>
                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/quick-view-1-item.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/quick-view-1-item.jpg')}}" alt="image" title="image" /></div>
                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/quick-view-1-item.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/quick-view-1-item.jpg')}}" alt="image" title="image" /></div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="profuct-info">
                        <h3 class="product-title">Quick View Popup Product</h3>
                        <div class="clearfix pro-revi-arrow">
                            <div class="product-starrating pull-left">
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                                <span>5 Reviews</span>
                            </div>
                            <div class="pro-arrow pull-right">
                                <a class="pro-next" href="product-details.html"><i class="ti-angle-left"></i></a>
                                <a class="pro-prev" href="product-details-classic.html"><i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                        <ul class="row pro-info-list">
                            <li class="col-12 col-md-4 col-sm-4 instock text-sm-left">In Stock</li>
                            <li class="col-12 col-md-4 col-sm-4 vendor text-sm-center"><b>Vendor:</b> Autoparts</li>
                            <li class="col-12 col-md-4 col-sm-4 sku text-sm-right"><b>SKU:</b> 19115-rdxs</li>
                        </ul>
                    </div>
                    <ul class="d-sm-flex flex-sm-row align-items-sm-center product-price-info">
                        <li class="m-0 product-price"><span class="compare-price">$499.00</span><span class="sale-price">$399.00</span></li>
                        <li class="save-price">You Save <span class="save-count">$100.00 (10%)</span></li>
                    </ul>
                    <p class="sold-in-last"><span class="align-middle">10 sold in last 20 hours</span></p>
                    <ul class="d-flex flex-column pro-details">
                        <li><i class="mr-2 fa fa-check" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur elit.</li>
                        <li><i class="mr-2 fa fa-check" aria-hidden="true"></i>Maecenas vehicula lorem et facilisis eleifend.</li>
                        <li><i class="mr-2 fa fa-check" aria-hidden="true"></i>Quisque mattis augue quis risus euismod pharetra.</li>
                        <li><i class="mr-2 fa fa-check" aria-hidden="true"></i>Curabitur bibendum massa vitae risus lacinia rutrum.</li>
                    </ul>
                    <div class="product-color">
                        <p>Color: <b>RED</b></p>
                        <ul class="flex-row d-flex align-items-center color-item" data-toggle="buttons">
                            <li class="btn red active" data-toggle="tooltip" data-placement="top" title="red"><span></span></li>
                            <li class="btn navy" data-toggle="tooltip" data-placement="top" title="navy"><span></span></li>
                            <li class="btn light-blue" data-toggle="tooltip" data-placement="top" title="light-blue"><span></span></li>
                            <li class="btn green" data-toggle="tooltip" data-placement="top" title="green"><span></span></li>
                            <li class="btn yellow" data-toggle="tooltip" data-placement="top" title="yellow"><span></span></li>
                        </ul>
                    </div>
                    <div class="product-size">
                        <p>Color: <b>XL</b></p>
                        <ul class="flex-row d-flex align-items-center color-item" data-toggle="buttons">
                            <li class="btn x active" data-toggle="tooltip" data-placement="top" title="x"><span>X</span></li>
                            <li class="btn xl" data-toggle="tooltip" data-placement="top" title="xl"><span>XL</span></li>
                            <li class="btn m" data-toggle="tooltip" data-placement="top" title="m"><span>M</span></li>
                            <li class="btn s" data-toggle="tooltip" data-placement="top" title="s"><span>S</span></li>
                            <li class="btn xxl" data-toggle="tooltip" data-placement="top" title="xxl"><span>XXL</span></li>
                        </ul>
                    </div>
                    <div class="addToBox d-sm-flex flex-sm-row">
                        <div class="product-form-item product-quantity">
                            <div class="qty-box">
                                <button type="button" class="qtyminus button" value=""><i class="fa fa-minus"></i></button>
                                <input type="text" name='quantity' value='1' class="qty-input" />
                                <button type="button" class="qtyplus button" value=""><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="product-form-item product-submit btn-block">
                            <a href="#open-addtocart-popup" class="btn btn-primary btn-block product-btn-cart open-addtocart-popup">Add to Cart</a>
                        </div>
                    </div>
                    <div class="wishlistOuter">
                        <a href="#open-wishlist-popup" class="open-wishlist-popup"><i class="mr-2 ti-heart"></i> Add To Wishlist</a>
                    </div>
                    <div class="social-media">
                        <ul class="flex-row d-flex">
                            <li><span>Share:</span></li>
                            <li><a href="#" title="Facebook"><i class="ti-facebook"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="ti-twitter"></i></a></li>
                            <li><a href="#" title="Google Plus"><i class="ti-google"></i></a></li>
                            <li><a href="#" title="Pinterest"><i class="ti-pinterest"></i></a></li>
                            <li><a href="#" title="Email"><i class="ti-email"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Quick View Popup -->

    <!-- Start Product Wishlist Added Popup -->
    <div id="open-wishlist-popup" class="wishlist-popup magnific-popup mfp-hide">
        <div class="text-center wishlist-inner-content">
            <h4>Successfully added in wishlist</h4>
            <p class="pro-img"><img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/addwishlist-popup.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/addwishlist-popup.jpg')}}" alt="image" title="image" /></p>
            <p class="mb-4 modal-prod-name font-15">Carb Fits Cigarette tiyer</p>
            <div class="button-action">
                <button class="mb-3 btn btn-secondary btn-block continue-shopping close-popup">Continue Shopping</button>
                <a href="wishlist.html" class="btn btn-primary btn-block view-wishlist">View Wishlist</a>
            </div>
        </div>
    </div>
    <!-- End Product Wishlist Added Popup -->

    <!-- Start Newsletter Popup -->
    {{--  <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <!-- id="newsletter-popup" -->
        <div class="modal-dialog" role="document">
            <div class="border-0 modal-content">
                <div class="p-0 modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
                    <div class="row no-gutters">
                        <!-- Start Newsletter Content -->
                        <div class="text-center col-12 col-sm-12 col-md-7 d-flex flex-column justify-content-center">
                            <div class="newsletter-details">
                                <h2 class="title">Newsletter Signup</h2>
                                <p class="sub-title">Receive our latest updates about our latest product and promotions.</p>
                                <form action="#" class="needs-validation" novalidate>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your email address..." required />
                                        <button class="btn news-btn" type="submit"><i class="fa fa-long-arrow-right"></i></button>
                                    </div>
                                </form>
                                <p class="message">We Promise to Only Send you Good Things!</p>
                                <div class="p-0 m-0 border-0 social-media">
                                    <ul class="flex-row text-center d-flex align-items-center justify-content-center">
                                        <li><a href="#"> <i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                                        <li><a href="#"><i class="ti-youtube"></i></a></li>
                                        <li><a href="#"><i class="ti-google"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Newsletter Content -->
                        <!-- Start Newsletter Image -->
                        <div class="text-right col-12 col-sm-12 col-md-5 d-none d-md-block">
                            <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/others/newsletter.jpg')}}" data-src="{{ asset('assets/front-assets/images/others/newsletter.jpg')}}" alt="image" title="Newsletter" />
                        </div>
                        <!-- End Newsletter Image -->
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- End Newsletter Popup -->

    <!-- Start Cookie Message -->
    {{--  <div id="cookie-message" class="alert fade show" role="alert">
        <p>This is a standard cookie notice which you can easily adapt or disable as you like in the admin. We yse cookie to ensure that we give you the best expenrience on our website.</p>
        <div class="cookie-action">
            <a class="cookie-more-info" href="#"> Privacy Policy </a>
            <a class="cookie-accept" href="#" data-dismiss="alert" aria-label="Close">Accept <i class="ti-check"></i></a>
        </div>
    </div>  --}}
    <!-- End Cookie Message -->

    <!-- Start Product Suggestion -->
    {{--  <div class="clearfix border-0 product-suggestion-content rounded-0 alert fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="ti-close" aria-hidden="true"></i>
        </button>
        <div class="product-suggestion">
            <div class="suggestion-item">
                <div class="d-table suggestion-product">
                    <div class="align-middle d-table-cell suggestion-img">
                        <a href="product-details.html"><img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1-80x80.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-80x80.jpg')}}" width="100" alt="image" title="image" /></a>
                    </div>
                    <div class="pl-3 align-middle d-table-cell suggestion-detail">
                        <span>Someone purchaed a</span>
                        <a class="my-1 d-block" href="#">Carb Fits Cigarette tiyer</a>
                        <span>18 minutes ago from London. Great Britain</span>
                    </div>
                </div>
            </div>
            <div class="suggestion-item">
                <div class="d-table suggestion-product">
                    <div class="align-middle d-table-cell suggestion-img">
                        <a href="product-details.html"><img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1-80x80.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-80x80.jpg')}}" width="100" alt="image" title="image" /></a>
                    </div>
                    <div class="pl-3 align-middle d-table-cell suggestion-detail">
                        <span>Someone purchaed a</span>
                        <a class="my-1 d-block" href="#">Garbage Plush Case</a>
                        <span>14 Minutes ago from New York, USA</span>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- End Product Suggestion-->

    <!-- Overlay -->
    <div class="overlay"></div>

    </div>
    <!--  End Main Wrapper -->

    <!-- ******** JS Files ******** -->
    <!-- Plugin JS -->
    <script src="{{ asset('assets/front-assets/js/plugins.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/front-assets/js/main.js')}}"></script>

    <!-- Add to cart functionality -->
    <script>
        $(document).on('click', '.add-to-cart', function(e) {
            e.preventDefault();

            var productId = $(this).data('product-id')
            var productQty = $(this).data('quantity')

            var token = "{{ csrf_token() }}"
            var path = "{{ route ('cart.store') }}"

            $.ajax({
                url: path,
                type: 'POST',
                dataType: 'JSON',
                data: {
                    product_id: productId,
                    product_qty: productQty,
                    _token: token
                },
                beforeSend: function() {
                    console.log('Something do before send');
                },
                complete: function() {
                    console.log('Something do after send');
                },
                success: function(response) {
                    console.log(response);
                    $('#cart-item-ajax').html(response['cartItem']);
                    $('#cart-counter').html(response['cart_count']);
                    $('#header-ajax').html(response['header']);
                },
                error: function(jqXhr, textStatus, errorMessage) { // error callback
                    console.log('Error: ' + errorMessage);
                } // End of error

            });
        });

        $(document).on('click', '.remove-pro', function(e) {
            e.preventDefault();

            var productId = $(this).data('id');
            alert(productId);

            var token = "{{ csrf_token() }}"
            var path = "{{ route ('cart.delete') }}"

            $.ajax({
                url: path,
                type: 'POST',
                dataType: 'JSON',
                data: {
                    '_token': token,
                    'rowId': productId
                },
                success: function(response) {
                    //         // console.log(responce);
                    if (document.getElementById('#cart-ajax')) {

                        $('#cart-ajax').html(response['cart']);
                    }

                    // $('#count').html(response['cart_count']);
                    $('#cart-item-ajax').html(response['cartItem']);
                    $('#header-ajax').html(response['header']);
                },
                error: function(jqXhr, testStatus, errorMessage) {
                    console.log('Error: ' + errorMessage);
                }
            })

        })
    </script>
    <!-- End add to cart functionality -->

    @stack('scripts')


</body>

</html>
