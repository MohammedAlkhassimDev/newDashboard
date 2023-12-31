@extends('layouts.app')

@section('content')


<div class="breadcrumbs text-center">
    <div class="container">
        <h1>Our Shop</h1>
        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
            <li class="breadcrumb-item"><a href="#" title="Home">Home</a></li>
            <li class="breadcrumb-item active">Shop Grid Left Sidebar</li>
        </ul>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Product with Filter -->
<div class="product-filter-sidebar">
    <div class="container">
        <div class="row">
            <!-- Start Product Filter -->
            <div class="col-12 col-sm-12 col-lg-3 sidebar sidebar-left">
                <!-- Start YMM Search Box -->

                <!-- End YMM Search Box -->

                <!-- Start Shop By -->
                <div class="filter-block">
                    <h3 class="block-title shopby">SHOP BY</h3>
                    <div class="block-content">
                        <!-- Start Categories -->
                    
                        <!-- End Categories -->
                        <!-- Start Price -->
                        <div class="block-item price">
                            <h4 class="sub-title">Price</h4>
                            <div class="block-details">
                                <div class="rangeslider">
                                    <div class="slider-range"></div>
                                </div>
                                <div class="form-group m-0 d-flex justify-content-between align-items-center">
                                    <label class="range-number m-0 pull-left"></label>
                                    <button type="submit" class="btn btn-primary pull-right find-btn">Find</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Price -->
                        <!-- Start Color -->
                        <div class="block-item color">
                            <h4 class="sub-title">Color</h4>
                            <div class="block-details product-color">
                                <ul class="d-flex flex-row flex-wrap align-items-center color-item">
                                    <li class="black active" data-toggle="tooltip" data-placement="top" title="black"><span></span></li>
                                    <li class="red" data-toggle="tooltip" data-placement="top" title="red"><span></span></li>
                                    <li class="light-blue" data-toggle="tooltip" data-placement="top" title="light blue"><span></span></li>
                                    <li class="navy" data-toggle="tooltip" data-placement="top" title="navy"><span></span></li>
                                    <li class="green" data-toggle="tooltip" data-placement="top" title="green"><span></span></li>
                                    <li class="yellow" data-toggle="tooltip" data-placement="top" title="yellow"><span></span></li>
                                    <li class="light-yellow" data-toggle="tooltip" data-placement="top" title="light yellow"><span></span></li>
                                    <li class="white" data-toggle="tooltip" data-placement="top" title="white"><span></span></li>
                                    <li class="light-green" data-toggle="tooltip" data-placement="top" title="light green"><span></span></li>
                                    <li class="gray" data-toggle="tooltip" data-placement="top" title="gray"><span></span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Color -->
                        <!-- Start Size -->
                        <div class="block-item size">
                            <h4 class="sub-title">Size</h4>
                            <div class="block-details product-size">
                                <ul class="d-flex flex-row align-items-center color-item">
                                    <li class="x active"><span>X</span></li>
                                    <li class="xl"><span>XL</span></li>
                                    <li class="l"><span>L</span></li>
                                    <li class="m"><span>M</span></li>
                                    <li class="s"><span>S</span></li>
                                    <li class="s"><span>XXL</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Size -->
                        <!-- Start Brand -->
                        <div class="block-item brand">
                            <h4 class="sub-title">Brand</h4>
                            <ul class="block-details list sidebar-brand">
                                <li><a href="#">Toyota</a></li>
                                <li><a href="#">Mercedes</a></li>
                                <li><a href="#">Kia</a></li>
                                <li><a href="#">Audi</a></li>
                                <li><a href="#">Honda</a></li>
                                <li><a href="#">BMW</a></li>
                            </ul>
                        </div>
                        <!-- End Brand -->
                    </div>
                </div>
                <!-- End Shop By -->

                <!-- Start Popular Products -->
                <div class="cms-block popular-products">
                    <h4 class="sub-title">Popular Products</h4>
                    <div class="cms-block-content">
                        <ul class="d-flex flex-column color-item">
                            <li>
                                <div class="pop-img pull-left mr-3"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" /></a></div>
                                <div class="pop-dec pull-left">
                                    <a class="d-block" href="product-details.html">Carbon Fiber Steering Wheel</a>
                                    <span class="d-block product-price">$98.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="pop-img pull-left mr-3"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" /></a></div>
                                <div class="pop-dec pull-left">
                                    <a class="d-block" href="product-details.html">Car Precedent LED Headlight</a>
                                    <span class="d-block product-price">$100.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="pop-img pull-left mr-3"><a href="product-details.html"><img class="img-fluid blur-up lazyload" src="assets/images/products/product-1.jpg" data-src="assets/images/products/product-1.jpg" alt="image" title="image" /></a></div>
                                <div class="pop-dec pull-left">
                                    <a class="d-block" href="product-details.html">Single DIN Stereo Dash Kit</a>
                                    <span class="d-block product-price">$190.00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Popular Products -->

                <!-- Start Popular Tags -->
                <div class="cms-block popular-tags">
                    <h4 class="sub-title">Popular Tags</h4>
                    <div class="cms-block-content">
                        <ul class="d-flex flex-row flex-wrap color-item">
                            <li><a href="#">parts</a></li>
                            <li><a href="#">bike</a></li>
                            <li><a href="#">motor bike</a></li>
                            <li><a href="#">car seat</a></li>
                            <li><a href="#">breaks</a></li>
                            <li><a href="#">helmet</a></li>
                            <li class="tag-btn"><a class="btn btn-secondary" href="#">View All</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Popular Tags -->

                <!-- Start Custom Content -->
                <div class="cms-block custom-content d-none d-lg-block">
                    <h4 class="sub-title">Custom CMS Block</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    <p class="m-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                </div>
                <!-- End Custom Content -->

                <!-- Start Custom Banner -->
                <div class="cms-block popular-tags d-none d-lg-block">
                    <a class="d-block" href="shop-grid-fullwidth.html"><img class="img-fluid blur-up lazyload" src="assets/images/banner/fillter-banner.jpg" data-src="assets/images/banner/fillter-banner.jpg" alt="image" title="image" /></a>
                </div>
                <!-- End Custom Banner -->
            </div>
            <!-- End Product Filter -->

            <!-- Start Products -->
            <div class="product-view-items product-grid col-12 col-sm-12 col-lg-9 sidebar-right">
                <!-- Start Collection Banner Image -->
                <div class="collection-banner-img">
                    <div class="row">
                        <div class="col-12">
                            <img class="img-fluid blur-up lazyload" src="assets/images/collection/collection-sideleft-banner.jpg" data-src="assets/images/collection/collection-sideleft-banner.jpg" alt="image" title="image" />
                        </div>
                    </div>
                </div>
                <!-- End Collection Banner Image -->

                <!-- Start Filters Tollbar -->
                <div class="filters-toolbar">
                    <div class="row row-sp align-items-center">
                        <div class="col-sp col-4 col-sm-4 text-left order-1 order-sm-0">
                            <div class="filters-item">
                                <a href="shop-grid-left-sidebar.html" title="Grid" class="btn active" data-view="grid"><i class="ti-view-grid"></i></a><a href="shop-list-left-sidebar.html" title="List" class="btn" data-view="list"><i class="ti-view-list-alt"></i></a>
                            </div>
                        </div>
                        <div class="col-sp col-12 col-sm-4 text-center mb-4 mb-sm-0 order-0 order-sm-1">
                            <p class="m-0">Showing 1–16 of 21 results</p>
                        </div>
                        <div class="col-sp col-8 col-sm-4 text-right order-2 order-sm-2">
                            <div class="filters-item">
                                <div class="form-group m-0">
                                    <label for="Sortby">Sort by:</label>
                                    <select id="Sortby" class="form-control select2">
                                        <option value="manual">Featured</option>
                                        <option value="best-selling">Best Selling</option>
                                        <option value="title-ascending">Alphabetically, A-Z</option>
                                        <option value="title-descending">Alphabetically, Z-A</option>
                                        <option value="price-ascending">Price, low to high</option>
                                        <option value="price-descending">Price, high to low</option>
                                        <option value="created-descending">Date, new to old</option>
                                        <option value="created-ascending">Date, old to new</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Filters Tollbar -->

                <!-- Start Products Grid -->
                <div class="products products-grid">

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
                                 <li class="actions-addcart" data-toggle="tooltip" data-placement="top" title="add to cart"><a href="#open-addtocart-popup" class="btn open-addtocart-popup"><i class="icon ti-shopping-cart"></i></a></li>
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
             @endforeach

                    </div>

                    <!-- Start Load More Button -->
                    <div class="product-readmore text-center">
                        <button type="submit" class="btn btn-secondary">Load More</button>
                    </div>
                    <!-- End Load More Button -->
                </div>
                <!-- End Products Grid -->

                <!-- Start Collection Description -->
                <div class="collection-dec">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                    <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    <h3>1914 translation by H. Rackham</h3>
                    <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences.</p>
                    <p>Lorem Ipsum extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage.</p>
                </div>
                <!-- End Collection Description -->
            </div>
            <!-- End Products -->
        </div>
    </div>
</div>

@endsection
