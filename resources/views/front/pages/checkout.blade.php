@extends('layouts.app')

@section('content')

<div class="text-center breadcrumbs">
    <div class="container">
        <h1>checkout Style1</h1>
        <ul class="p-0 m-0 bg-transparent breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
            <li class="breadcrumb-item active">checkout</li>
        </ul>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start checkout -->


<div class="checkout-content">
    <div class="container">
        <!-- Start Checkout Login -->
        @guest
        <div class="mb-4 card rounded-0 mb-md-5 collapse-head customer-login">
            <div class="border-0 card-header rounded-0">
                Returning customer? <a class="font-13"  href="{{ route('login')  }}" > Click here to login</a>
            </div>
            {{--  <div class="collapse" id="customer-login">
                <div class="card-body rounded-0">
                    <form action="#" class="no-gutters login-form needs-validation" novalidate>
                        <div class="mb-4 form-group col-12 col-sm-4 col-md-4">
                            <label>Email Address *</label>
                            <input type="email" class="form-control" placeholder="" required />
                            <div class="invalid-feedback">Please enter your email.</div>
                        </div>
                        <div class="mb-4 form-group col-sm-4 col-md-4">
                            <label>Password *</label>
                            <input type="password" class="form-control" placeholder="" required />
                            <div class="invalid-feedback">Please enter your password.</div>
                        </div>
                        <div class="mb-4 form-group col-sm-4 col-md-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropdownCheck" required />
                                <label class="ml-3 form-check-label" for="dropdownCheck">Remeber Me!</label>
                            </div>
                        </div>
                        <div class="clearfix text-left button-action">
                            <div class="login-forget pull-left">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                                <a class="ml-4 forgot-password" href="forgot-password.html">Forgot your password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  --}}
        </div>
        @endguest
        <!-- End Checkout Login -->

        <!-- Start Coupon Code -->

        @auth
        <div class="mb-5 card rounded-0 collapse-head coupon-code">
            <div class="border-0 card-header rounded-0">
                Have A Coupon? <a class="font-13" data-toggle="collapse" href="#coupon-code" aria-expanded="false" aria-controls="coupon-code"> Click Here To Enter Your Code</a>
            </div>
            <div class="collapse" id="coupon-code">
                <div class="card-body rounded-0">
                    <form action="" id="couponForm" class="form needs-validation" novalidate>
                        <p>If you have a coupon code, please apply it below.</p>
                        <div class="row">
                            <div class="input-group col-12 col-sm-10 col-md-8 col-lg-8 col-xl-7">
                                <input type="text" class="form-control" placeholder="" required name="coupon" id="coupon" />
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text coupon-btn btn btn-secondary" id="">Apply Coupon</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Coupon Code -->

        <!-- Start Checkout Content -->
        <form method="POST" action={{ route('order.checkout')}}>
            @csrf
        <div class="row">
             <input type="hidden" id="coupon-checkout" name="coupon" />
            <!-- Start Checkout Form -->
            <div class="mb-5 checkout-form col-12 col-sm-12 col-lg-8 mb-lg-0 sidebar-left">
                <!-- Start Shipping Form -->

                    <div class="card rounded-0">
                        <div class="card-header rounded-0">Shipping Address</div>
                        <div class="card-body">
                            <div class="mb-0 row form-group">
                                <div class="mb-4 col-12 col-sm-6 col-md-6">
                                    <label>First Name: *</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="" required />
                                    <div class="invalid-feedback">Please enter your first name.</div>
                                </div>
                                <div class="mb-4 col-12 col-sm-6 col-md-6">
                                    <label>Last Name: *</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="" required />
                                    <div class="invalid-feedback">Please enter your last name.</div>
                                </div>
                            </div>
                            <div class="mb-0 row form-group">
                                <div class="mb-4 col-12 col-sm-12 col-md-12">
                                    <label>Address: *</label>
                                    <textarea class="form-control" name="address" rows="3" placeholder="" required></textarea>
                                    <div class="invalid-feedback">Please enter your address.</div>
                                </div>
                            </div>
                            <div class="mb-0 row form-group">
                                <div class="mb-4 col-12 col-sm-6 col-md-6">
                                    <label>Country: *</label>
                                    <select class="select2 js-country form-control" name="country" required>
                                        <option value="" disabled selected>Select country</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia, Plurinational State of</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, the Democratic Republic of the</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Côte d'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curaçao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and McDonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Réunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthélemy</option>
                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin (French part)</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.S.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                    <div class="invalid-feedback">Please select your country.</div>
                                </div>


                                <div class="mb-4 col-12 col-sm-6 col-md-6">
                                    <label>Zip / Postal Code: *</label>
                                    <input type="text" name="post_code" class="form-control" placeholder="" required />
                                    <div class="invalid-feedback">Please enter your zip/postal code.</div>
                                </div>

                            </div>

                            <div class="mb-0 row form-group">
                                <div class="mb-4 col-12 col-sm-6 col-md-6">
                                    <label>Phone Number: *</label>
                                    <input type="text" name="phone" class="form-control" placeholder="" required />
                                    <div class="invalid-feedback">Please enter your phone number.</div>
                                </div>
                                <div class="mb-4 col-12 col-sm-6 col-md-6">
                                    <label>Email Address: *</label>
                                    <input type="email" name="email" class="form-control" placeholder="" required />
                                    <div class="invalid-feedback">Please enter your email.</div>
                                </div>
                            </div>

                            <!-- Start Billing Form -->

                            <!-- End Billing Form -->

                            <div class="mb-0 row form-group">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <label>Order Notes:</label>
                                    <textarea class="form-control" rows="3" name="note"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- End Shipping Form -->
            </div>
            <!-- End Checkout Form -->

            <!-- Start Cart Order -->
            <div class="checkout-order col-12 col-sm-12 col-lg-4 sidebar sidebar-right">
                <h3>Review Order</h3>
                <!-- Start Order Cart Table -->
                @include('front.cart.cartCheckout')
                <!-- End Order Cart Table -->

                <!-- Start Payment Method -->
                <div class="payment-method accordion" id="payment-method">
                    <!-- Start Cash on delivery -->
                    <div class="mb-3 border-0 card rounded-0">
                        <div class="p-0 bg-white border-0 card-header rounded-0" id="payment-One1">
                            <div class="form-check" role="tablist" data-toggle="collapse" data-target="#paymentOne" aria-expanded="true" aria-controls="paymentOne">
                                <input class="form-check-input" type="radio" name="payment_method" id="paymentRadio1" checked value="cod" />
                                <label class="ml-3 form-check-label w-100" for="paymentRadio1">Cash on delivery</label>
                            </div>

                            <div class="form-check" role="tablist" data-toggle="collapse" data-target="#paymentOne" aria-expanded="true" aria-controls="paymentOne">
                                <input class="form-check-input" type="radio" name="payment_method" id="paymentRadio1" checked value="paypal" />
                                <label class="ml-3 form-check-label w-100" for="paymentRadio1">Bank</label>
                            </div>
                        </div>
                        {{--  <div id="paymentOne" class="collapse show" aria-labelledby="paymentOne" data-parent="#payment-method">
                            <div class="p-0 card-body text-muted font-13">Pay with cash upon delivery.</div>
                        </div>  --}}
                    </div>
                    <!-- End Cash on delivery -->

                    <!-- Start Bank payments -->
                    {{--  <div class="mb-3 border-0 card rounded-0">
                        <div class="p-0 bg-white border-0 card-header rounded-0" id="payment-One2">
                            <div class="form-check" role="tablist" data-toggle="collapse" data-target="#paymentOne2" aria-expanded="false" aria-controls="paymentOne2">
                                <input class="form-check-input" type="radio" name="paymentRadio" id="paymentRadio2" />
                                <label class="ml-3 form-check-label w-100" for="paymentRadio2">Bank payments</label>
                            </div>
                        </div>
                        <div id="paymentOne2" class="collapse" aria-labelledby="paymentOne2" data-parent="#payment-method">
                            <div class="p-0 card-body">
                                <!-- Start Form Card CC Payment -->
                                <div class="card-outline-secondary">
                                    <div class="alert alert-info font-12">
                                        CVC code is required.
                                        <a class="close" data-dismiss="alert" href="#"><i class="ti-close"></i></a>
                                    </div>
                                    <form action="#" autocomplete="off" class="form needs-validation" novalidate>
                                        <div class="mb-4 form-group mb-sm-3">
                                            <label>Card Number</label>
                                            <input type="text" autocomplete="off" class="form-control" maxlength="20" required />
                                            <div class="invalid-feedback">Please enter your card number.</div>
                                        </div>
                                        <div class="mb-0 form-group row mb-sm-3">
                                            <label class="col-12 col-sm-12 col-md-12">Card Exp. Date</label>
                                            <div class="mb-4 col-12 col-sm-4 col-md-4 mb-sm-0">
                                                <select class="select2 form-control" name="cc-exp-mo" required>
                                                    <option value="" disabled selected>Months</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="02">03</option>
                                                    <option value="02">04</option>
                                                    <option value="02">05</option>
                                                    <option value="02">06</option>
                                                    <option value="02">07</option>
                                                    <option value="02">08</option>
                                                    <option value="02">09</option>
                                                    <option value="02">10</option>
                                                    <option value="02">11</option>
                                                    <option value="02">12</option>
                                                </select>
                                                <div class="invalid-feedback">Please select months.</div>
                                            </div>
                                            <div class="mb-4 col-12 col-sm-4 col-md-4 mb-sm-0">
                                                <select class="select2 form-control w-100" name="cc-exp-yr" required>
                                                    <option value="" disabled selected>Year</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                </select>
                                                <div class="invalid-feedback">Please select year.</div>
                                            </div>
                                            <div class="mb-4 col-12 col-sm-4 col-md-4 mb-sm-0">
                                                <input type="text" autocomplete="off" class="form-control" maxlength="3" placeholder="CVC" title="Three digits on the back of your card" required />
                                                <div class="invalid-feedback">Please enter your CVC.</div>
                                            </div>
                                        </div>
                                        <div class="mb-4 form-group mb-sm-3">
                                            <label>Amount</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="text-right form-control" placeholder="32" aria-label="Amount (to the nearest dollar)" required />
                                                <div class="invalid-feedback">Please enter amount.</div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 form-group row">
                                            <div class="mb-4 col-12 col-sm-6 col-md-6 mb-sm-0">
                                                <button class="btn btn-secondary btn-lg btn-block" type="reset">Cancel</button>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Form Card CC Payment -->
                            </div>
                        </div>
                    </div>  --}}
                    <!-- End Bank payments -->
                </div>



                <!-- End Payment Method -->

                <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>

                <div class="mt-5 form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block place-order-btn">Place order</button>
                </div>
            </div>
            <!-- End Cart Order -->
        </div>
         </form>
         @endauth

        <!-- End Checkout Content -->
    </div>
</div>


<script>


let couponForm = document.getElementById("couponForm");

couponForm.addEventListener("submit", (e) => {
  e.preventDefault();

  document.getElementById("coupon-checkout").value = document.getElementById("coupon").value;


    document.getElementById("coupon-code").classList.remove("show");




});


</script>

@endsection
