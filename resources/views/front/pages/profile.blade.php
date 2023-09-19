@extends('layouts.app')
@section('content')


<div class="text-center breadcrumbs">
    <div class="container">
        <h1>My Account</h1>
        <ul class="p-0 m-0 bg-transparent breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
            <li class="breadcrumb-item active">My Account</li>
        </ul>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start My Account -->
<div class="my-account-content">
    <div class="container">
        <div class="account-upper-info">
            <div class="row align-items-center justify-content-center row-eq-height no-gutters">
                <div class="info-item col-12 col-sm-12 col-md-3 col-lg-3">
                    <p class="mb-1">Hello <strong>Posh</strong></p>
                    <p class="mb-0">(not <strong>Posh</strong>? <a class="link-color" href="login.html">Log out</a>)</p>
                </div>
                <div class="info-item col-12 col-sm-12 col-md-4 col-lg-4">
                    <p class="mb-1">Need Assistance? Customer service at.</p>
                    <p class="mb-0"><a href="mailto:admin@example.com">admin@example.com</a></p>
                </div>
                <div class="info-item col-12 col-sm-12 col-md-3 col-lg-3">
                    <p class="mb-1">E-mail them at </p>
                    <p class="mb-0"><a href="mailto:support@example.com">support@example.com</a></p>
                </div>
                <div class="info-item col-12 col-sm-12 col-md-2 col-lg-2 text-md-center">
                    <a href="cart.html" class="view-cart link-color">View Cart</a>
                </div>
            </div>
        </div>

        <div class="account-inner-info">
            <div class="row">
                <!-- Start My Account Nav -->
                <div class="mb-5 account-nav mb-sm-0 col-12 col-sm-3 col-md-3">
                    <div class="flex-row nav flex-sm-nowrap flex-sm-column nav-pills" id="v-pills-tab" role="tablist">
                        <a class="nav-link active" id="my-account-home-tab" data-toggle="pill" href="#my-account-home" role="tab" aria-controls="my-account-home" aria-selected="true">Dashboard</a>
                        <a class="nav-link" id="my-account-order-tab" data-toggle="pill" href="#my-account-order" role="tab" aria-controls="my-account-order" aria-selected="false">Orders</a>
                        <a class="nav-link" id="my-account-address-tab" data-toggle="pill" href="#my-account-address" role="tab" aria-controls="my-account-address" aria-selected="false">Addresses</a>
                        <a class="nav-link" id="my-account-details-tab" data-toggle="pill" href="#my-account-details" role="tab" aria-controls="my-account-details" aria-selected="false">Account Details</a>
                        <a class="nav-link" href="login.html">Logout</a>
                    </div>
                </div>
                <!-- End My Account Nav -->

                <!-- Start My Account Details -->
                <div class="account-details col-12 col-sm-9 col-md-9">
                    <div class="tab-content" id="account-tabContent">
                        <!-- Start Dashboard -->
                        <div class="dashboard tab-pane fade show active" id="my-account-home" role="tabpanel" aria-labelledby="my-account-home-tab">
                            <div class="tab-pane fade active show" id="dashboard">
                                <h3>Dashboard </h3>
                                <p>From your account dashboard. you can easily check &amp; view your <a class="link-color" href="">recent orders</a>, manage your <a class="link-color" href="">shipping and billing addresses</a> and <a href="" class="link-color">edit your password and account details</a>.</p>
                            </div>
                        </div>
                        <!-- End Dashboard -->

                        <!-- Start Orders -->
                        <div class="tab-pane fade" id="my-account-order" role="tabpanel" aria-labelledby="my-account-order-tab">
                            <div class="tab-pane fade active show" id="orders">
                                <h3>Orders</h3>
                                <div class="order-table table-responsive">
                                    <table class="table text-center table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($orders as $index => $order )

                                            <tr>
                                                <td>{{ $index+1 }}</td>
                                                <td>{{ $order->created_at }}</td>
                                                <td><span class="success">{{ $order->status }}</span></td>
                                                <td>${{ $order->total_amount }} for {{ $order->quantity }} item </td>
                                                <td><a class="link-color view" href="#">View</a></td>
                                            </tr>

                                            @empty

                                            <tr>
                                                <td colspan="5" class="text-center">Nothing in your history</td>
                                            </tr>


                                            @endforelse ( as )



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Orders -->


                        <!-- Start Address -->
                        <div class="tab-pane fade" id="my-account-address" role="tabpanel" aria-labelledby="my-account-address-tab">
                            <h3>Address</h3>
                            <p>The following addresses will be used on the checkout page by default.</p>
                            <div class="row">
                                <div class="mb-4 col-12 col-sm-6 col-md-6 mb-sm-0">
                                    <h4>Shipping Address</h4>
                                    <a class="mb-4 d-block link-color" href="#">Edit</a>
                                    <p class="mb-2"><strong>Block:</strong> B</p>
                                    <p class="mb-2"><strong>House:</strong> No 40</p>
                                    <p class="mb-2"><strong>Street:</strong> Baria Street 133/2,</p>
                                    <p class="mb-2"><strong>Road:</strong> NewYork, USA</p>
                                    <p class="mb-2"><strong>Call:</strong> (+01) 123 456 7890</p>
                                    <p class="mb-2"><strong>FAX:</strong> 1 200 454 2569</p>
                                    <p class="mb-2"><strong>E-mail:</strong> info@example.com</p>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6">
                                    <h4>Billing address</h4>
                                    <a class="mb-4 d-block link-color" href="#">Edit</a>
                                    <p>You have not set up this type of address yet.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Address -->

                        <!-- Start Account Details -->
                        <div class="tab-pane fade" id="my-account-details" role="tabpanel" aria-labelledby="my-account-details-tab">
                            <h3>Account Details</h3>
                            <form action="#" class="save-register-form needs-validation" novalidate>
                                <p>Already have an account? <a href="login.html" class="link-color">Log in instead!</a></p>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="mr" value="mr" required />
                                            <label class="mb-0 ml-1 form-check-label" for="mr">Mr.</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="mrs" value="mrs" required />
                                            <label class="mb-0 ml-1 form-check-label" for="mrs">Mrs.</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>First Name *</label>
                                        <input type="text" class="form-control" placeholder="" required />
                                        <div class="invalid-feedback">Please enter your first name.</div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Last Name *</label>
                                        <input type="text" class="form-control" placeholder="" required />
                                        <div class="invalid-feedback">Please enter your last name.</div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Email Address *</label>
                                        <input type="email" class="form-control" placeholder="" required />
                                        <div class="invalid-feedback">Please enter your email.</div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Password *</label>
                                        <input type="password" class="form-control" placeholder="" required />
                                        <div class="invalid-feedback">Please enter your password.</div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <small>(E.g.: 12/01/2018)</small>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="receive-offers" required />
                                            <label class="mb-0 ml-3 form-check-label" for="receive-offers">Receive offers from our partners</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <p class="mb-2"><strong>Sign up for our newsletter</strong></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="newsletter" required />
                                            <label class="mb-0 ml-3 form-check-label" for="newsletter">You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="mt-1 account-save mt-sm-3">
                                            <button type="submit" class="btn btn-secondary">Save Changes</button >
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Account Details -->
                    </div>
                </div>
                <!-- End My Account Details -->
            </div>
        </div>
    </div>
</div>
<!-- End My Account -->
@endsection
