@extends('layouts.app')

@section('content')
<main class="main-content">
    <!-- Start Breadcrumb -->
    <div class="breadcrumbs text-center">
        <div class="container">
            

        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Page Not Found -->
    <div class="not-found-page my-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 col-sm-10 col-md-8 col-lg-8 col-xl-7 text-center">


                    <div class="page-not-found">

                        <h2>Thank You !</h2>
                        <br>
                        <p>We've send the link to your inbox. Lorem ipsum dolor sit,</p>
                        <br>

                        <a href="{{ route('home') }}" class="back-btn btn btn-primary">Back to home page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Not Found -->
</main>
@endsection
