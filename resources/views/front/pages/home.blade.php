@extends('front.layouts.app')

@section('content')

<div class="ymm-slideshow position-relative sections-spacing">
    <!-- Start YMM Box -->
    <div class="container clearfix ymm-container">
        <div class="ymm-search-box">
            <div class="ymm-search">
                <h1>YMM Advanced Filter</h1>
                <p>Quick & Easy Shop by Parts</p>
                <form action="#">
                    <div class="form-group">
                        <select class="select2 form-control" name="sellist1">
                            <option value="" disabled selected>Select Year</option>
                            <option value="1">2001</option>
                            <option value="2">2002</option>
                            <option value="3">2003</option>
                            <option value="4">2004</option>
                            <option value="5">2005</option>
                            <option value="6">2006</option>
                            <option value="7">2007</option>
                            <option value="8">2008</option>
                            <option value="9">2009</option>
                            <option value="10">2010</option>
                            <option value="11">2011</option>
                            <option value="12">2012</option>
                            <option value="13">2013</option>
                            <option value="14">2014</option>
                            <option value="15">2015</option>
                            <option value="16">2016</option>
                            <option value="17">2017</option>
                            <option value="18">2018</option>
                            <option value="19">2019</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="select2 form-control" name="sellist2">
                            <option value="" disabled selected>Select Make</option>
                            <option value="1">Audi</option>
                            <option value="2">Ford</option>
                            <option value="3">Hyundai</option>
                            <option value="3">TATA</option>
                            <option value="3">Volvo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="select2 form-control" name="sellist3">
                            <option value="" disabled selected>Select Model</option>
                            <option value="1">Ford Pinto</option>
                            <option value="2">Honda Fitta</option>
                            <option value="3">Hyundai Santa Fe</option>
                            <option value="3">Mazda Moco</option>
                            <option value="3">Skoda Laura</option>
                        </select>
                    </div>
                    <div class="actions-btn d-flex">
                        <button type="submit" class="btn btn-primary w-50">Find</button>
                        <button type="button" class="btn btn-secondary w-50">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End YMM Box -->

    <!-- Start Slidershow Banner -->
    <div class="slideshow slideshow-banner">
        @foreach ( $banners as $banner )
        <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image:url({{ asset('media/banners/'. $banner->photo )}});">
            <div class="container slideshow-details">
                <h3>{{ $banner->title }}</h3>
                <p>{{ $banner->sub_title }}</p>
                <a href="shop-grid-left-sidebar.html" class="btn btn-primary">Buy now!</a>
            </div>
        </div>
        @endforeach


    </div>
    <!-- End Slidershow Banner -->
</div>

<!-- Start Four Banner Section -->
<div class="home-four-banner sections-spacing">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 banner-1">
                <div class="small-banner-1 position-relative">
                    <a class="animate-scale" href="shop-grid-left-sidebar.html"><img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/banner/banner-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/banner/banner-1.jpg')}}" alt="image" title="image" /></a>
                    <div class="banner-details">
                        <h3>Wheel <span>Expert</span></h3>
                        <p>Check out our loving products today</p>
                        <a href="shop-grid-left-sidebar.html" class="btn btn-success">Buy now!</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 banner-23">
                <div class="mb-5 row">
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="small-banner-2 position-relative">
                            <a class="animate-scale" href="shop-grid-left-sidebar.html">
                                <img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/banner/banner-2.jpg')}}" data-src="{{ asset('assets/front-assets/images/banner/banner-2.jpg')}}" alt="image" title="image" />
                                <div class="banner-details">
                                    <h3>Tools</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="small-banner-3 position-relative">
                            <a class="animate-scale" href="shop-grid-left-sidebar.html">
                                <img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/banner/banner-3.jpg')}}" data-src="{{ asset('assets/front-assets/images/banner/banner-2.jpg')}}" alt="image" title="image" />
                                <div class="banner-details">
                                    <h3>Replacement</h3>
                                    <p>Parts</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="small-banner-4 position-relative">
                            <a class="animate-scale" href="shop-grid-left-sidebar.html">
                                <img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/banner/banner-3.jpg')}}" data-src="{{ asset('assets/front-assets/images/banner/banner-3.jpg')}}" alt="image" title="image" />
                                <div class="banner-details">
                                    <h3>Motor Bike</h3>
                                    <p>Parts</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Four Banner Section -->

<!-- Start Collection Tabs Section -->
<div class="bestseller-section bestseller-style-1 sections-spacing">
    <div class="container">
        <div class="clearfix tabs-header">
            <div class="section-header">
                <h2>New Product</h2>
                <p>Browse the huge variety of our products</p>
            </div>
            <ul class="drawer-tabs tabs">
                <li class="item active" data-tab="tab1"><a>Interior</a></li>
                <li class="item" data-tab="tab2"><a>Engine</a></li>
                <li class="item" data-tab="tab3"><a>Suspension</a></li>
                <li class="item" data-tab="tab4"><a>Lighting</a></li>
            </ul>
        </div>
        <!-- Start Tab Container -->
        <div class="tab-content responsiveTabs">
            <!-- Start Tab1 -->
            <h3 class="d_active tab-drawer-heading" data-tab="tab1"><a>Interior</a></h3>
            <div id="tab1" class="drawertab-content">
                <div class="row row-sp row-eq-height prcarousel">
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-label">
                                    <span class="label new">New</span>
                                    <span class="label sale">Sale</span>
                                </div>
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload primary-img" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover secondary-img" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="clearfix product-counter" data-countdown="2024/10/01"></div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Donec pede justo fringilla</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="compare-price">$125.22</span>
                                    <span class="sale-price">$113.88</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-label">
                                    <span class="label soldout">-20%</span>
                                </div>
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Aenean commodo ligula eget dolor</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="compare-price">$75.20</span>
                                    <span class="sale-price">$70.15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-label">
                                    <span class="label soldout">Sold Out</span>
                                </div>
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Sociosqu facilisi senectus</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$133.50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-label">
                                    <span class="label hot">Hot</span>
                                </div>
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Nullam scelerisque suscipit sociis</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="compare-price">$145.05</span>
                                    <span class="sale-price">$135.33</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Consectetur adipisicing elit</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-half-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$113.88</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab1 -->
            <!-- Tab2 -->
            <h3 class="tab-drawer-heading" data-tab="tab2"><a>Engine</a></h3>
            <div id="tab2" class="drawertab-content">
                <div class="row row-sp row-eq-height prcarousel">
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Pellentesque habitant morbi</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$113.88</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-label">
                                    <span class="label soldout">-20%</span>
                                </div>
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Neque porro quisquam dolorem</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-half-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="compare-price">$75.20</span>
                                    <span class="sale-price">$70.15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Praesent convallis scelerisque</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$133.50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Aliquam faucibus sem nec</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-half-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$135.33</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Fusce quis felis accumsan</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$113.88</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab2 -->
            <!-- Start Tab3 -->
            <h3 class="tab-drawer-heading" data-tab="tab3"><a>Suspension</a></h3>
            <div id="tab3" class="drawertab-content">
                <div class="row row-sp row-eq-height prcarousel">
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-label">
                                    <span class="label new">New</span>
                                    <span class="label sale">Sale</span>
                                </div>
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Stockvault oil plastic</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="compare-price">$125.22</span>
                                    <span class="sale-price">$113.88</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Aliquam tincidunt mauris</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$70.15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-label">
                                    <span class="label soldout">Sold Out</span>
                                </div>
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Lorem ipsum dolor sit amet</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$133.50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Ut imperdiet enim feugiat</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$135.33</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Pure Power facture</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-half-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$113.88</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab3 -->
            <!-- Start Tab4 -->
            <h3 class="tab-drawer-heading" data-tab="tab4"><a>Lighting</a></h3>
            <div id="tab4" class="drawertab-content">
                <div class="row row-sp row-eq-height prcarousel">
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-label">
                                    <span class="label new">New</span>
                                </div>
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Auto parts Tools</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$125.88</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Tools U-Joint</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-half-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$70.15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Screw tools Filter</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-half-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$133.50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-label">
                                    <span class="label hot">Hot</span>
                                </div>
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Nullam lights Car</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$135.33</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-image">
                                    <a href="product-details.html">
                                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                        <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                                    </a>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                        <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                        <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                        <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <h3 class="product-title"><a href="product-details.html">Ut imperdiet enim feugiat</a></h3>
                                <h4 class="product-vendor">Posh Auto Parts</h4>
                                <div class="product-starrating">
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star"></i>
                                    <i class="spr-icon fa fa-star-o"></i>
                                </div>
                                <div class="product-price">
                                    <span class="sale-price">$113.88</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab4 -->
        </div>
        <!-- End Tab Container -->
    </div>
</div>
<!-- End Collection Tabs Section -->

<!-- Start Video Information Section -->
<div class="video-information sections-spacing">
    <div class="container">
        <div class="row d-sm-flex flex-sm-row align-items-sm-center">
            <!-- Start Video Image -->
            <div class="col-12 col-sm-12 col-md-6 video-image">
                <div id="play-youtube-video" class="position-relative d-block">
                    <img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/others/offer-image.png')}}" data-src="{{ asset('assets/front-assets/images/others/offer-image.png')}}" alt="image" title="image" />
                    <a href="#open-video-popup" class="vid-icon open-video-popup"><i class="ti-control-play"></i></a>
                </div>
                <div id="open-video-popup" class="youtube-video-popup magnific-popup mfp-hide">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="mfp-iframe embed-responsive-item" src="about:blank" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
            <!-- End Video Image -->

            <!-- Start Video Info -->
            <div class="col-12 col-sm-12 col-md-6 video-info">
                <div class="section-header">
                    <h2>What We Offers</h2>
                    <p>Wide selection of Auto parts professional choice</p>
                </div>
                <div class="row storeFeatures">
                    <div class="text-center col-12 col-sm-6 col-md-6 feature-item">
                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/icons/appointment.jpg')}}" data-src="{{ asset('assets/front-assets/images/icons/appointment.jpg')}}" alt="image" title="image" />
                        <h5>Online Appointment</h5>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididu et dolore.</span>
                    </div>
                    <div class="text-center col-12 col-sm-6 col-md-6 feature-item">
                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/icons/services-prices.jpg')}}" data-src="{{ asset('assets/front-assets/images/icons/services-prices.jpg')}}" alt="image" title="image" />
                        <h5>Best Services Prices</h5>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididu et dolore.</span>
                    </div>
                    <div class="text-center col-12 col-sm-6 col-md-6 feature-item">
                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/icons/wheel-balancing.jpg')}}" data-src="{{ asset('assets/front-assets/images/icons/wheel-balancing.jpg')}}" alt="image" title="image" />
                        <h5>The Wheel Balancing</h5>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididu et dolore.</span>
                    </div>
                    <div class="text-center col-12 col-sm-6 col-md-6 feature-item">
                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/icons/carzone-painting.jpg')}}" data-src="{{ asset('assets/front-assets/images/icons/carzone-painting.jpg')}}" alt="image" title="image" />
                        <h5>Carzone Painting</h5>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididu et dolore.</span>
                    </div>
                </div>
            </div>
            <!-- End Video Info -->
        </div>
    </div>
</div>
<!-- End Video Information Section -->

<!-- Start Home Collection Section -->
<div class="home-collection sections-spacing">
    <div class="p-0 container-fluid">
        <div class="row no-gutters home-collection-prcarousel">
            <div class="col collection-item">
                <a href="shop-grid-left-sidebar.html" class="animate-scale collection-img">
                    <img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/collection/collection1.jpg')}}" data-src="{{ asset('assets/front-assets/images/collection/collection1.jpg')}}" alt="image" title="image" />
                </a>
                <div class="collection-details">
                    <a href="shop-grid-left-sidebar.html" class="collection-title">Interior Accessories</a>
                </div>
            </div>
            <div class="col collection-item">
                <a href="shop-grid-left-sidebar.html" class="animate-scale collection-img">
                    <img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/collection/collection1.jpg')}}" data-src="{{ asset('assets/front-assets/images/collection/collection1.jpg')}}" alt="image" title="image" />
                </a>
                <div class="collection-details">
                    <a href="shop-grid-left-sidebar.html" class="collection-title">Exterior Accessories</a>
                </div>
            </div>
            <div class="col collection-item">
                <a href="shop-grid-left-sidebar.html" class="animate-scale collection-img">
                    <img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/collection/collection1.jpg')}}" data-src="{{ asset('assets/front-assets/images/collection/collection1.jpg')}}" alt="image" title="image" />
                </a>
                <div class="collection-details">
                    <a href="shop-grid-left-sidebar.html" class="collection-title">Tools & Equipment</a>
                </div>
            </div>
            <div class="col collection-item">
                <a href="shop-grid-left-sidebar.html" class="animate-scale collection-img">
                    <img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/collection/collection1.jpg')}}" data-src="{{ asset('assets/front-assets/images/collection/collection1.jpg')}}" alt="image" title="image" />
                </a>
                <div class="collection-details">
                    <a href="shop-grid-left-sidebar.html" class="collection-title">Performance Products</a>
                </div>
            </div>
            <div class="col collection-item">
                <a href="shop-grid-left-sidebar.html" class="animate-scale collection-img">
                    <img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/collection/collection1.jpg')}}" data-src="{{ asset('assets/front-assets/images/collection/collection1.jpg')}}" alt="image" title="image" />
                </a>
                <div class="collection-details">
                    <a href="shop-grid-left-sidebar.html" class="collection-title">Lighting</a>
                </div>
            </div>
            <div class="col collection-item">
                <a href="shop-grid-left-sidebar.html" class="animate-scale collection-img">
                    <img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/collection/collection1.jpg')}}" data-src="{{ asset('assets/front-assets/images/collection/collection1.jpg')}}" alt="image" title="image" />
                </a>
                <div class="collection-details">
                    <a href="shop-grid-left-sidebar.html" class="collection-title">Tyre Protector</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Home Collection Section -->

<!-- Start Popular Product Section -->
<div class="popular-product sections-spacing">
    <div class="container">
        <div class="clearfix title-btn">
            <div class="section-header">
                <h2>Popular Product</h2>
                <p>Browse the huge variety of our products</p>
            </div>
            <div class="viewall-btn top-btn">
                <a href="shop-grid-fullwidth.html" class="btn btn-secondary">View all</a>
            </div>
        </div>
        <div class="row row-sp row-eq-height">
            @forelse ($products as $product)
            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="product-item">
                    <div class="product-image-action">
                        <div class="product-label">
                            <span class="label new">New</span>
                            <span class="label sale">Sale</span>
                        </div>
                        <div class="product-image">
                            <a href="product-details.html">
                                <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                            </a>
                        </div>
                        <div class="product-action">
                            <ul>
                                <!-- add to cart -->
                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart">
                                    <a href="" data-quantity="1" data-product-id="{{$product -> id}}" class="btn add-to-cart" id="add-to-cart{{$product -> id}}"><i class="icon ti-shopping-cart"></i></a>
                                </li>
                                <!-- <a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a> -->
                                <!-- end add to cart -->
                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">{{ $product -> title }}</a></h3>
                        <h4 class="product-vendor"></h4>
                        <div class="product-starrating">
                            <i class="spr-icon fa fa-star"></i>
                            <i class="spr-icon fa fa-star"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span class="compare-price">$125.22</span>
                            <span class="sale-price">$ {{ $product -> price }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="">No products found !</div>
            @endforelse 
            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="product-item">
                    <div class="product-image-action">
                        <div class="product-image">
                            <a href="product-details.html">
                                <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                            </a>
                        </div>
                        <div class="product-action">
                            <ul>
                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Nemo enim ipsam voluptatem</a></h3>
                        <h4 class="product-vendor">Posh Auto Parts</h4>
                        <div class="product-starrating">
                            <i class="spr-icon fa fa-star"></i>
                            <i class="spr-icon fa fa-star"></i>
                            <i class="spr-icon fa fa-star"></i>
                            <i class="spr-icon fa fa-star"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span class="sale-price">$99.99</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="product-item">
                    <div class="product-image-action">
                        <div class="product-image">
                            <a href="product-details.html">
                                <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                            </a>
                        </div>
                        <div class="product-action">
                            <ul>
                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Nam libero tempore cum</a></h3>
                        <h4 class="product-vendor">Posh Auto Parts</h4>
                        <div class="product-starrating">
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span class="sale-price">$133.50</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="product-item">
                    <div class="product-image-action">
                        <div class="product-label">
                            <span class="label soldout">-20%</span>
                        </div>
                        <div class="product-image">
                            <a href="product-details.html">
                                <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                            </a>
                        </div>
                        <div class="product-action">
                            <ul>
                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Cases are perfectly simple</a></h3>
                        <h4 class="product-vendor">Posh Auto Parts</h4>
                        <div class="product-starrating">
                            <i class="spr-icon fa fa-star"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span class="compare-price">$155.00</span>
                            <span class="sale-price">$145.44</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="product-item">
                    <div class="product-image-action">
                        <div class="product-image">
                            <a href="product-details.html">
                                <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                            </a>
                        </div>
                        <div class="product-action">
                            <ul>
                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Neque iaculis vehicula</a></h3>
                        <h4 class="product-vendor">Posh Auto Parts</h4>
                        <div class="product-starrating">
                            <i class="spr-icon fa fa-star"></i>
                            <i class="spr-icon fa fa-star-half-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span class="sale-price">$111.11</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="product-item">
                    <div class="product-image-action">
                        <div class="product-image">
                            <a href="product-details.html">
                                <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                            </a>
                        </div>
                        <div class="product-action">
                            <ul>
                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Faucibus augue egestas</a></h3>
                        <h4 class="product-vendor">Posh Auto Parts</h4>
                        <div class="product-starrating">
                            <i class="spr-icon fa fa-star"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span class="sale-price">$120.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="product-item">
                    <div class="product-image-action">
                        <div class="product-label">
                            <span class="label hot">Hot</span>
                        </div>
                        <div class="product-image">
                            <a href="product-details.html">
                                <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                            </a>
                        </div>
                        <div class="product-action">
                            <ul>
                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Pellentesque nulla in tellus</a></h3>
                        <h4 class="product-vendor">Posh Auto Parts</h4>
                        <div class="product-starrating">
                            <i class="spr-icon fa fa-star"></i>
                            <i class="spr-icon fa fa-star"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span class="sale-price">$250.50</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="product-item">
                    <div class="product-image-action">
                        <div class="product-label">
                            <span class="label new">New</span>
                        </div>
                        <div class="product-image">
                            <a href="product-details.html">
                                <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1.jpg')}}" alt="image" title="image" />
                                <img class="img-fluid blur-up lazyload product-imghover" src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/products/product-1-1.jpg')}}" alt="image" title="image" />
                            </a>
                        </div>
                        <div class="product-action">
                            <ul>
                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Suspendisse posuere nibh</a></h3>
                        <h4 class="product-vendor">Posh Auto Parts</h4>
                        <div class="product-starrating">
                            <i class="spr-icon fa fa-star"></i>
                            <i class="spr-icon fa fa-star"></i>
                            <i class="spr-icon fa fa-star-half-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                            <i class="spr-icon fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span class="sale-price">$199.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Popular Product Section -->

<!-- Start Information Section -->
<div class="information sections-spacing">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="flex-row info-area d-flex align-items-center">
                    <div class="info-icon">
                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/icons/free-shipping-small.png')}}" data-src="{{ asset('assets/front-assets/images/icons/free-shipping-small.png')}}" alt="image" title="image" />
                    </div>
                    <div class="info-details">
                        <h5>Fast &amp; Free Shipping</h5>
                        <span>On Order Over $90</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="flex-row info-area d-flex align-items-center">
                    <div class="info-icon">
                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/icons/save-20-small.png')}}" data-src="{{ asset('assets/front-assets/images/icons/save-20-small.png')}}" alt="image" title="image" />
                    </div>
                    <div class="info-details">
                        <h5>Save 20% When You</h5>
                        <span>Call+01 2345700</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="flex-row info-area d-flex align-items-center">
                    <div class="info-icon">
                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/icons/money-back-small.png')}}" data-src="{{ asset('assets/front-assets/images/icons/money-back-small.png')}}" alt="image" title="image" />
                    </div>
                    <div class="info-details">
                        <h5>Money Back Gurantee</h5>
                        <span>30 Days money back gurantee!</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="flex-row info-area d-flex align-items-center">
                    <div class="info-icon">
                        <img class="img-fluid blur-up lazyload" src="{{ asset('assets/front-assets/images/icons/support-24-small.png')}}" data-src="{{ asset('assets/front-assets/images/icons/support-24-small.png')}}" alt="image" title="image" />
                    </div>
                    <div class="info-details">
                        <h5>Support 24/7</h5>
                        <span>We support online 24 hours</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Information Section -->

<!-- Start Latest Blog Section -->
<div class="home-blog sections-spacing">
    <div class="container">
        <div class="clearfix title-btn">
            <div class="section-header pull-left">
                <h2>Latest Blog</h2>
                <p>Check it out every our updates</p>
            </div>
            <div class="viewall-btn top-btn">
                <a href="blog.html" class="btn btn-secondary">View all</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="blog-item position-relative">
                    <div class="blog-image">
                        <a class="animate-scale" href="single-post-gallery.html"><img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/blog/home-blog-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/blog/home-blog-1.jpg')}}" alt="image" title="image" /></a>
                    </div>
                    <div class="blog-details">
                        <div class="flex-row article-date-article d-flex align-items-center">
                            <div class="mr-4 article-date">
                                <i class="mr-1 icon ti-alarm-clock"></i>
                                <span class="date month">10</span>
                                <span class="date day">March</span>
                                <span class="date year">2019</span>
                            </div>
                            <div class="article-author"><i class="mr-1 icon ti-user"></i><span class="author"> Demo</span></div>
                        </div>
                        <h3 class="article-title"> <a href="single-post-gallery.html">Awesome template with lot's of features on the board!</a> </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="blog-item position-relative">
                    <div class="blog-image">
                        <a class="animate-scale" href="single-post-gallery.html"><img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/blog/home-blog-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/blog/home-blog-1.jpg')}}" alt="image" title="image" /></a>
                    </div>
                    <div class="blog-details">
                        <div class="flex-row article-date-article d-flex align-items-center">
                            <div class="mr-4 article-date">
                                <i class="mr-1 icon ti-alarm-clock"></i>
                                <span class="date month">15</span>
                                <span class="date day">March</span>
                                <span class="date year">2019</span>
                            </div>
                            <div class="article-author"><i class="mr-1 icon ti-user"></i><span class="author"> Demo</span></div>
                        </div>
                        <h3 class="article-title"> <a href="single-post-gallery.html">Powerful and flexible premium Ecommerce themes</a> </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="blog-item position-relative">
                    <div class="blog-image">
                        <a class="animate-scale" href="single-post-gallery.html"><img class="img-fluid blur-up lazyload w-100" src="{{ asset('assets/front-assets/images/blog/home-blog-1.jpg')}}" data-src="{{ asset('assets/front-assets/images/blog/home-blog-1.jpg')}}" alt="image" title="image" /></a>
                    </div>
                    <div class="blog-details">
                        <div class="flex-row article-date-article d-flex align-items-center">
                            <div class="mr-4 article-date">
                                <i class="mr-1 icon ti-alarm-clock"></i>
                                <span class="date month">18</span>
                                <span class="date day">March</span>
                                <span class="date year">2019</span>
                            </div>
                            <div class="article-author"><i class="mr-1 icon ti-user"></i><span class="author"> Demo</span></div>
                        </div>
                        <h3 class="article-title"> <a href="single-post-gallery.html">How to increase Auto Sales: A Dealers' Guide</a> </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Latest Blog Section -->

<!-- Start Popular Brand Section -->
<div class="home-brands sections-spacing">
    <div class="container">
        <div class="clearfix section-header">
            <h2>Popular Brand</h2>
            <p>Check it out every our updates</p>
        </div>
        <div class="row row-sp brand-slider">

            @foreach ( $brands as $brand )
            <div class="col-sp col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <h3 class="brands-item" href="#">{{ $brand->title }}</h3>
            </div>
            @endforeach



        </div>
    </div>
</div>

@endsection

