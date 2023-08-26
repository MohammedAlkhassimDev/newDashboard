@extends('layouts.app')

@section('content')

<div class="ymm-slideshow position-relative sections-spacing">
    <!-- Start YMM Box -->
    <div class="container ymm-container clearfix">
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
        <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image:url({{ asset('assets/front-assets/images/slider/banner-1.jpg')}});">
            <div class="container slideshow-details">
                <h3>Faster & Secure Find Your Auto Parts</h3>
                <p>High Performance & Outstanding Technology Combined</p>
                <a href="shop-grid-left-sidebar.html" class="btn btn-primary">Buy now!</a>
            </div>
        </div>
        <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image:url({{ asset('assets/front-assets/images/slider/banner-1.jpg')}});">
            <div class="container slideshow-details">
                <h3>Shop Parts With Confidence</h3>
                <p>Always The Lowest Price. Guaranteed.</p>
                <a href="shop-grid-left-sidebar.html" class="btn btn-primary">Buy now!</a>
            </div>
        </div>
        <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image:url({{ asset('assets/front-assets/images/slider/banner-1.jpg')}});">
            <div class="container slideshow-details">
                <h3>The Automotive Interior Specialist</h3>
                <p>Luxury Car Seat Covers Protect Your Seats</p>
                <a href="shop-grid-left-sidebar.html" class="btn btn-primary">Buy now!</a>
            </div>
        </div>
    </div>
    <!-- End Slidershow Banner -->
</div>

@endsection
