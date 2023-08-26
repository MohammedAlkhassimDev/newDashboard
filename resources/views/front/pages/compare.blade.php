@extends('layouts.app')

@section('content')

<div class="text-center breadcrumbs">
    <div class="container">
        <h1>Compare Products</h1>
        <ul class="p-0 m-0 bg-transparent breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
            <li class="breadcrumb-item active">Compare Products</li>
        </ul>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Compare -->
<div class="compare-content">
    <div class="container">
        <!-- Start Compare 3 Products -->
        <div class="compare-table1 table-responsive">
            <!-- Start Compare Title -->
            <div class="section-header">
                <h2>comparing 3 products</h2>
            </div>
            <!-- End Compare Title -->

            <!-- Start Compare Table -->
            <table class="table-bordered w-100">
                <tbody>
                    <tr>
                        <th scope="row">Product</th>
                        <td>
                            <div class="pro-img-dec position-relative">
                                <a href="#" class="campare-remove close"><i class="ti-close"></i></a>
                                <a href="product-details.html"><img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" /></a>
                                <div class="clearfix product-label">
                                    <span class="label sale">Sale</span>
                                </div>
                                <h3 class="mb-2 product-title"><a href="product-details.html">Donec pede justo fringilla</a></h3>
                                <div class="mt-1 product-price">
                                    <span class="compare-price">$125.22</span>
                                    <span class="sale-price">$113.88</span>
                                </div>
                                <form action="#">
                                    <a href="cart.html" class="mt-3 btn btn-primary product-btn-cart add-cart">Add to Cart</a>
                                </form>
                            </div>
                        </td>
                        <td>
                            <div class="pro-img-dec position-relative">
                                <a href="#" class="campare-remove close"><i class="ti-close"></i></a>
                                <a href="product-details.html"><img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" /></a>
                                <h3 class="mb-2 product-title"><a href="product-details.html">Aenean commodo ligula eget dolor</a></h3>
                                <div class="mt-1 product-price">
                                    <span class="sale-price">$70.15</span>
                                </div>
                                <form action="#">
                                    <a href="cart.html" class="mt-3 btn btn-primary product-btn-cart add-cart">Add to Cart</a>
                                </form>
                            </div>
                        </td>
                        <td>
                            <div class="pro-img-dec position-relative">
                                <a href="#" class="campare-remove close"><i class="ti-close"></i></a>
                                <a href="product-details.html"><img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" /></a>
                                <h3 class="mb-2 product-title"><a href="product-details.html">Sociosqu facilisi senectus</a></h3>
                                <div class="mt-1 product-price">
                                    <span class="sale-price">$133.50</span>
                                </div>
                                <form action="#">
                                    <a href="cart.html" class="mt-3 btn btn-primary product-btn-cart add-cart">Add to Cart</a>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Descriptions</th>
                        <td>
                            <div class="pro-decription">
                                <p class="m-0">We are proud to present our best premium HTML theme - Autoparts This is multi-purpose store. Great customization process very easy.</p>
                            </div>
                        </td>
                        <td>
                            <div class="pro-decription">
                                <p class="m-0">We are proud to present our best premium HTML theme - Autoparts This is multi-purpose store. Great customization process very easy.</p>
                            </div>
                        </td>
                        <td>
                            <div class="pro-decription">
                                <p class="m-0">We are proud to present our best premium HTML theme - Autoparts This is multi-purpose store. Great customization process very easy.</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Rating</th>
                        <td>
                            <div class="product-starrating">
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                            </div>
                        </td>
                        <td>
                            <div class="product-starrating">
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                            </div>
                        </td>
                        <td>
                            <div class="product-starrating">
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Vendor</th>
                        <td>
                            <p class="m-0 pro-vendor">Autoparts</p>
                        </td>
                        <td>
                            <p class="m-0 pro-vendor">Car parts</p>
                        </td>
                        <td>
                            <p class="m-0 pro-vendor"> Insights, parts</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Color</th>
                        <td>
                            <p class="m-0 pro-color">Black</p>
                        </td>
                        <td>
                            <p class="m-0 pro-color">Red, Yellow</p>
                        </td>
                        <td>
                            <p class="m-0 pro-color">Light gray</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Size</th>
                        <td>
                            <p class="m-0 pro-size">12, 16</p>
                        </td>
                        <td>
                            <p class="m-0 pro-size">09, 22</p>
                        </td>
                        <td>
                            <p class="m-0 pro-size">24, 38</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Material</th>
                        <td>
                            <p class="m-0 pro-material">100% Polyester</p>
                        </td>
                        <td>
                            <p class="m-0 pro-material">100% Polyester</p>
                        </td>
                        <td>
                            <p class="m-0 pro-material">100% Polyester</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- End Compare Table -->
        </div>
        <!-- End Compare 3 Products -->

        <br/>
        <hr class="my-5" />
        <br/>

        <!-- Start Compare 4 Products -->
        <div class="compare-table2 table-responsive">
            <!-- Start Compare Title -->
            <div class="section-header">
                <h2>comparing 4 products</h2>
            </div>
            <!-- End Compare Title -->

            <!-- Start Compare Table -->
            <table class="table-bordered table-striped w-100">
                <tbody>
                    <tr>
                        <td>
                            <div class="pro-img-dec position-relative">
                                <a href="#" class="campare-remove close"><i class="ti-close"></i></a>
                                <a href="product-details.html"><img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" /></a>
                                <div class="clearfix product-label">
                                    <span class="label sale">Sale</span>
                                </div>
                                <h3 class="mb-2 product-title"><a href="product-details.html">Nullam scelerisque suscipit sociis</a></h3>
                                <div class="mt-1 product-price">
                                    <span class="compare-price">$125.22</span>
                                    <span class="sale-price">$113.88</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="pro-img-dec position-relative">
                                <a href="#" class="campare-remove close"><i class="ti-close"></i></a>
                                <a href="product-details.html"><img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" /></a>
                                <h3 class="mb-2 product-title"><a href="product-details.html">Consectetur adipisicing elit</a></h3>
                                <div class="mt-1 product-price">
                                    <span class="sale-price">$70.15</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="pro-img-dec position-relative">
                                <a href="#" class="campare-remove close"><i class="ti-close"></i></a>
                                <a href="product-details.html"><img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" /></a>
                                <h3 class="mb-2 product-title"><a href="product-details.html">Pellentesque habitant morbi</a></h3>
                                <div class="mt-1 product-price">
                                    <span class="sale-price">$133.50</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="pro-img-dec position-relative">
                                <a href="#" class="campare-remove close"><i class="ti-close"></i></a>
                                <a href="product-details.html"><img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" /></a>
                                <h3 class="mb-2 product-title"><a href="product-details.html">Neque porro quisquam dolorem</a></h3>
                                <div class="mt-1 product-price">
                                    <span class="sale-price">$135.33</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="compare-head">
                        <td>Descriptions</td>
                        <td>Descriptions</td>
                        <td>Descriptions</td>
                        <td>Descriptions</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="pro-decription">
                                <p class="m-0">We are proud to present our best premium HTML theme - Autoparts This is multi-purpose store. Great customization process very easy.</p>
                            </div>
                        </td>
                        <td>
                            <div class="pro-decription">
                                <p class="m-0">We are proud to present our best premium HTML theme - Autoparts This is multi-purpose store. Great customization process very easy.</p>
                            </div>
                        </td>
                        <td>
                            <div class="pro-decription">
                                <p class="m-0">We are proud to present our best premium HTML theme - Autoparts This is multi-purpose store. Great customization process very easy.</p>
                            </div>
                        </td>
                        <td>
                            <div class="pro-decription">
                                <p class="m-0">We are proud to present our best premium HTML theme - Autoparts This is multi-purpose store. Great customization process very easy.</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="compare-head">
                        <td>Rating</td>
                        <td>Rating</td>
                        <td>Rating</td>
                        <td>Rating</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-starrating">
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                            </div>
                        </td>
                        <td>
                            <div class="product-starrating">
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                            </div>
                        </td>
                        <td>
                            <div class="product-starrating">
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                            </div>
                        </td>
                        <td>
                            <div class="product-starrating">
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="compare-head">
                        <td>Vendor</td>
                        <td>Vendor</td>
                        <td>Vendor</td>
                        <td>Vendor</td>
                    </tr>
                    <tr>
                        <td>
                            <p class="m-0 pro-vendor">Autoparts</p>
                        </td>
                        <td>
                            <p class="m-0 pro-vendor">Car parts</p>
                        </td>
                        <td>
                            <p class="m-0 pro-vendor"> Bike, Motor parts</p>
                        </td>
                        <td>
                            <p class="m-0 pro-vendor"> Insights</p>
                        </td>
                    </tr>
                    <tr class="compare-head">
                        <td>Color</td>
                        <td>Color</td>
                        <td>Color</td>
                        <td>Color</td>
                    </tr>
                    <tr>
                        <td>
                            <p class="m-0 pro-color">Black</p>
                        </td>
                        <td>
                            <p class="m-0 pro-color">Red, Yellow</p>
                        </td>
                        <td>
                            <p class="m-0 pro-color">Light gray</p>
                        </td>
                        <td>
                            <p class="m-0 pro-color">White, blue</p>
                        </td>
                    </tr>
                    <tr class="compare-head">
                        <td>Size</td>
                        <td>Size</td>
                        <td>Size</td>
                        <td>Size</td>
                    </tr>
                    <tr>
                        <td>
                            <p class="m-0 pro-size">12, 16</p>
                        </td>
                        <td>
                            <p class="m-0 pro-size">09, 22, 29</p>
                        </td>
                        <td>
                            <p class="m-0 pro-size">24, 38</p>
                        </td>
                        <td>
                            <p class="m-0 pro-size">18, 22, 43</p>
                        </td>
                    </tr>
                    <tr class="compare-head">
                        <td>Material</td>
                        <td>Material</td>
                        <td>Material</td>
                        <td>Material</td>
                    </tr>
                    <tr>
                        <td>
                            <p class="m-0 pro-material">100% Polyester</p>
                        </td>
                        <td>
                            <p class="m-0 pro-material">100% Polyester</p>
                        </td>
                        <td>
                            <p class="m-0 pro-material">100% Polyester</p>
                        </td>
                        <td>
                            <p class="m-0 pro-material">100% Polyester</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <form action="#">
                                <a href="cart.html" class="btn btn-primary product-btn-cart add-cart">Add to Cart</a>
                            </form>
                        </td>
                        <td class="text-center">
                            <form action="#">
                                <a href="cart.html" class="btn btn-primary product-btn-cart add-cart">Add to Cart</a>
                            </form>
                        </td>
                        <td class="text-center">
                            <form action="#">
                                <a href="cart.html" class="btn btn-primary product-btn-cart add-cart">Add to Cart</a>
                            </form>
                        </td>
                        <td class="text-center">
                            <form action="#">
                                <a href="cart.html" class="btn btn-primary product-btn-cart add-cart">Add to Cart</a>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- End Compare Table -->
        </div>
        <!-- End Compare 4 Products -->
    </div>
</div>


@endsection
