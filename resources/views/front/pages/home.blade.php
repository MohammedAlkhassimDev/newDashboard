@extends('layouts.app')

@section('content')

<div class="ymm-slideshow position-relative sections-spacing">
    <!-- Start YMM Box -->

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
{{--  <div class="home-four-banner sections-spacing">
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
</div>  --}}
<!-- End Four Banner Section -->


<div class="home-collection sections-spacing">
    <div class="p-0 container-fluid">
        <div class="row no-gutters home-collection-prcarousel">
            @foreach($categories as $category)
            <div class="col collection-item">
                <a href="shop-grid-left-sidebar.html" class="animate-scale collection-img">
                    <img class="img-fluid blur-up lazyload w-100" style="height: 170px;" src="{{ asset('media/categories/'. $category->photo )}}" data-src="{{ asset('media/categories/'. $category->photo )}}" width="385" height="395" alt="image" title="image" />
                </a>
                <div class="collection-details">
                    <a href="{{ route('shop.category' , $category->id) }}" class="collection-title">{{ $category->title }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Start Collection Tabs Section -->
<div class="bestseller-section bestseller-style-1 sections-spacing">
    <div class="container">
        <div class="clearfix tabs-header">
            <div class="section-header">
                <h2>New Product</h2>
                <p>Browse the huge variety of our products</p>
            </div>
            <ul class="drawer-tabs tabs">
                @foreach ( $categories as $category )
                <li class="item" data-tab="tab-{{ $category->id }}" ><a>{{  $category->title }}</a></li>

                @endforeach

            </ul>
        </div>
        <!-- Start Tab Container -->
        <div class="tab-content responsiveTabs">
            <!-- Start Tab1 -->

             @foreach ( $categories as $category )
             <h3 class="d_active tab-drawer-heading" data-tab="tab-{{ $category->id }}"><a>{{  $category->title }}</a></h3>
             <div id="tab-{{ $category->id }}" class="drawertab-content">
                 <div class="row row-sp row-eq-height prcarousel">
                     @forelse ( $category->products as $product )

                     <div class="">
                        <div class="product-item">
                            <div class="product-image-action">
                                <div class="product-image">
                                    <a href="{{ route('product.detail' , $product->slug) }}">
                                        <img class="img-fluid blur-up lazyload" style="height: 200px;  display: block; margin-left: auto; margin-right: auto;" src="{{ asset('media/products/'. $product->photo )}}" data-src="{{ asset('media/products/'. $product->photo )}}" alt="image" title="image" />
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
                                <h3 class="product-title"><a href="{{ route('product.detail' , $product->slug) }}">Consectetur adipisicing elit</a></h3>
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

                     @empty
                            <div class="section-header">
                             <h2>No Item in this tab</h2>
                            </div>
                     @endforelse


                     consloe
                 </div>
             </div>
             @endforeach



            <!-- End Tab4 -->
        </div>
        <!-- End Tab Container -->
    </div>
</div>
<!-- End Collection Tabs Section -->



<!-- Start Home Collection Section -->

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

             @foreach($products as $product)
            <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="product-item">
                    <div class="product-image-action">
                        <div class="product-image">
                            <a href="{{ route('product.detail' , $product->slug) }}">
                                <img class="img-fluid blur-up lazyload" style="height: 200px;  display: block; margin-left: auto; margin-right: auto;" src="{{ asset('media/products/'. $product->photo )}}" data-src="{{ asset('media/products/'. $product->photo )}}" alt="image" title="image" />
                            </a>
                        </div>
                        <div class="product-action">
                            <ul>


                                <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup-{{ $product->id}}" class="btn open-addtocart-popup" onclick="event.preventDefault(); document.getElementById('open-addtocart-popup-form-{{ $product->id}}').submit();"><i class="icon ti-shopping-cart"></i></a></li>


                                <form id="open-addtocart-popup-form-{{ $product->id}}"
                                    action="{{ route('cart.store')}}" method="POST"
                                    style="display: none;">
                                    @csrf
                                     <input type="hidden" value="{{$product->id}}" name="product_id"/>
                                     <input type="hidden" name='product_qty' value="1"/>
                                </form>


                                <li class="actions-quickview" data-toggle="tooltip" data-placement="top" title="quick view"><a href="#open-quickview-popup" class="btn open-quickview-popup"><i class="icon ti-zoom-in"></i></a></li>
                                <li class="actions-wishlist" data-toggle="tooltip" data-placement="top" title="add to wishlist"><a href="#open-wishlist-popup" class="btn open-wishlist-popup"><i class="icon ti-heart"></i></a></li>
                                <li class="actions-compare" data-toggle="tooltip" data-placement="top" title="add to compare"><a href="compare.html" class="btn"><i class="icon ti-control-shuffle"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title"><a href="{{ route('product.detail' , $product->slug) }}">{{  $product->title }}</a></h3>
                        <h4 class="product-vendor">{{ $product->summary }}</h4>
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

            <div id="open-addtocart-popup-{{ $product->id}}" class="addtocart-popup magnific-popup mfp-hide">

                <div class="text-center addtocart-inner-content">
                    <h4>Added to Cart Successfully</h4>
                    <p class="pro-img"><img class="img-fluid blur-up lazyload" src="{{ asset('media/products/'. $product->photo )}}" data-src="{{ asset('media/products/'. $product->photo )}}" alt="image" title="image" /></p>
                    <p class="mb-1 modal-prod-name font-15">{{ $product->title}}</p>
                    <p class="font-13">Quantity: 1</p>
                    <div class="addcart-total">
                        There are <b>1</b> items in your cart
                        <div class="mt-2 cart-total">
                            Total: <b class="price">${{ $product->price}}</b>
                        </div>
                    </div>

                </div>
            </div>




            @endforeach
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



<!-- Start Popular Brand Section -->
{{--  <div class="home-brands sections-spacing">
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
</div>  --}}


@endsection

