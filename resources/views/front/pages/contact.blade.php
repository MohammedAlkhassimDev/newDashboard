@extends('layouts.app')

@section('content')

<div class="breadcrumbs text-center">
    <div class="container">
        <h1>Contact Us</h1>
        <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
            <li class="breadcrumb-item active">Contact Us</li>
        </ul>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact Us -->
<div class="contact-us-content">
    <div class="container">
        <!-- Start Contact Info -->
        <div class="contact-info-block">
            <div class="row row-sp row-eq-height">
                <div class="col-sp col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                    <div class="contact-block d-flex flex-column justify-content-center text-center">
                        <i class="icon ti-location-pin" aria-hidden="true"></i>
                        <h4>Address</h4>
                        <p class="mb-0"><b>Store Name Pvt. Ltd</b><br>415 Water St, New York, NY 10002, USA.</p>
                    </div>
                </div>

                <div class="col-sp col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                    <div class="contact-block d-flex flex-column justify-content-center text-center">
                        <i class="icon ti-alarm-clock" aria-hidden="true"></i>
                        <h4>Opening Hours</h4>
                        <p class="mb-0"><b>Monday to Saturday: </b>9am - 10pm <br><b>Sundays</b>: 10am - 6pm</p>
                    </div>
                </div>

                <div class="col-sp col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4 mb-sm-0">
                    <div class="contact-block d-flex flex-column justify-content-center text-center">
                        <i class="icon ti-email" aria-hidden="true"></i>
                        <h4>Email</h4>
                        <p class="mb-0"><a href="mailto:email@example.com">email@example.com</a></p>
                    </div>
                </div>

                <div class="col-sp col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="contact-block d-flex flex-column justify-content-center text-center">
                        <i class="icon ti-mobile" aria-hidden="true"></i>
                        <h4>Toll-free</h4>
                        <p class="mb-0"><a href="tel:(+11)1234567895">(+01) 123 456 7890</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Info -->

        <!-- Start Contact Form -->
        <div class="contact-form sections-spacing">
            <div class="contact-title mb-5">
                <h4>Get in Touch!</h4>
                <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally. We would be happy to answer your questions.</p>
            </div>
            <form action="php/ajax_sendmail.php" name="contactus" method="post" id="contact-form" class="contact-form">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="ContactName">Name *</label>
                        <input type="text" id="ContactName" name="name" class="form-control" placeholder="" />
                        <span class="error_msg" id="name_error"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ContactEmail">Email Address *</label>
                        <input type="email" id="ContactEmail" name="email" class="form-control" placeholder="" />
                        <span class="error_msg" id="email_error"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="ContactPhone">Phone Number *</label>
                        <input type="tel" class="form-control" id="ContactPhone" name="phone" pattern="[0-9\-]*" placeholder=""  />
                        <div class="invalid-feedback">Please enter your phone number.</div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ContactSubject">Subject *</label>
                        <input type="text" id="ContactSubject" name="subject" class="form-control" placeholder="" />
                        <span class="error_msg" id="subject_error"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ContactMessage">Message *</label>
                    <textarea id="ContactMessage" name="message" class="form-control" rows="4" placeholder=""></textarea>
                    <span class="error_msg" id="message_error"></span>
                </div>
                <div class="form-group mailsendbtn button-action mt-1 mt-sm-3 clearfix">
                    <input class="account-create btn btn-secondary" type="submit" name="contactus" value="Send" />
                    <div class="loading"><img class="img-fluid" src="assets/images/ajax-loader.gif" alt="loading"></div>
                </div>
            </form>
        </div>
        <!-- End Contact Form -->
    </div>

    <!-- Start Contact Maps -->
    <div class="contact-maps">
        <div class="container-fluid pl-0 pr-0">
            <div class="responsive-map">
                <iframe src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.31551400776!2d-74.26054636670992!3d40.69714777124596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1549516023553" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    <!-- End Contact Maps -->
</div>

@endsection
