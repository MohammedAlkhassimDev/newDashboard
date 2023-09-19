@extends('layouts.app')

@section('content')

<div class="text-center breadcrumbs">
    <div class="container">
        <h1>Forgot Password</h1>
        <ul class="p-0 m-0 bg-transparent breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
            <li class="breadcrumb-item active">Forgot Password</li>
        </ul>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Forgot Password -->
<div class="forgot-password">
    <div class="container">
        <div class="row row-sp">
            <div class="col-sp col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="text-center page-title">
                    <h1>Forgot Password</h1>
                    <p class="mb-0 subtitle">Email address you u to log in to your account. <br/> Well send you an email with instructions to choose a new password. </p>
                </div>

                <form action="{{ route('password.email') }}" method="POST" class="pass-forgot-form needs-validation" novalidate>
                    @csrf
                    <div class="form-group">
                        <label>Email Address *</label>
                        <input type="email" class="form-control" placeholder="" name="email" required />
                        <div class="invalid-feedback">Password reset instructions will be sent to this email address.</div>
                    </div>
                    <div class="mt-5 text-center forgot-password-btn">
                        <button type="submit" class="btn btn-primary btn-block">Password Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
