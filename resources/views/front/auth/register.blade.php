@extends('layouts.app')

@section('content')
    <div class="text-center breadcrumbs">
        <div class="container">
            <h1>Login</h1>
            <ul class="p-0 m-0 bg-transparent breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                <li class="breadcrumb-item active">Register</li>
            </ul>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Login Account -->
    <div class="login-account">
        <div class="container">
            <div class="row row-sp">
                <div class="col-sp col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="text-center page-title">
                        <p class="mb-0 subtitle">If you have an account with us, log in using your email address.</p>
                    </div>


                    <form action="{{ route('register') }}" method="POST" class="login-form needs-validation">
                        @csrf
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" class="form-control" placeholder="" name="name" required />
                            <div class="invalid-feedback">Please enter your email.</div>
                        </div>
                        <div class="form-group">
                            <label>Email Address *</label>
                            <input type="email" class="form-control" placeholder="" name="email" required />
                            <div class="invalid-feedback">Please enter your email.</div>
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" class="form-control" placeholder="" name="password" required />
                            <div class="invalid-feedback">Please enter your password.</div>
                        </div>
                        {{--  <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck" required />
                            <label class="mb-0 ml-3 form-check-label" for="dropdownCheck">Remeber Me!</label>
                        </div>
                    </div>  --}}
                        <div class="clearfix text-center form-group button-action">
                            <div class="login-forget pull-left">
                                <button type="submit" class="btn btn-primary">Register</button>
                                <a class="ml-4 forgot-password" href="{{ route('password.request') }}">Forgot your password?</a>
                            </div>

                        </div>
                    </form>




                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline"
                                href="{{ url('auth/google') }}"><img
                                    src="https://img.icons8.com/color/16/000000/google-logo.png"> Signup Using Google</a>

                        </div>
                    </div>
                    <br>

                    <p class="text-center text-inverse">Already have an account? <a href="{{ route('login') }}" data-abc="true">Login</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- End Login Account -->
@endsection
