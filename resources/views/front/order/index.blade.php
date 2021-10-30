@extends('front.master')
@section('content')
        
        <div class="checkout-page pb-60">
            <div class="container">
                <div class="multisteps-form">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="multisteps-form__progress">
                          <button class="multisteps-form__progress-btn  js-active" type="button" title="Shipping">Shipping</button>
                          <button class="multisteps-form__progress-btn" type="button" title="Payment">Payment    </button>
                          <button class="multisteps-form__progress-btn" type="button" title="Confirm">Confirm   </button>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <form action="{{route('shipping.store')}}" method="post" enctype="multipart/form-data" class="multisteps-form__form">
                            @csrf 
                          
                            <!--single form panel-->
                            <div class="multisteps-form__panel js-active " data-animation="scaleIn">
                                <div class="multisteps-form__content">
                                    <div class="check-out-form">
                                        <h3 class="checkout-title">Shipping Address</h3>
                                        <div class="form-group">
                                            <label for="fullname3">Full Name</label>
                                            <input type="text" class="form-control" id="fullname3" name="name" required placeholder="Full Name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email3">Email </label>
                                            <input type="email" class="form-control" id="email3" name="email" required placeholder="Email " />
                                        </div>
                                        <div class="form-group">
                                            <label for="phone3">Phone</label>
                                            <input type="text" class="form-control" id="phone3" name="phone" required placeholder="Phone" />
                                        </div>
                                        <div class="form-group">
                                            <label for="country3">Country</label>
                                            <input type="text" class="form-control" id="country3" name="country" required placeholder="Country" />
                                        </div>
                                        <div class="form-group">
                                            <label for="street-address3">Street Address</label>
                                            <input type="text" class="form-control" id="street-address3" name="street_adderss" required placeholder="Street Address" />
                                        </div>
                                        <div class="form-group">
                                            <label for="city3">City/Town</label>
                                            <input type="text" class="form-control" id="city3" name="city" required placeholder="City/Town" />
                                        </div>
                                        <div class="form-group">
                                            <label for="state3">State/District</label>
                                            <input type="text" class="form-control" id="state3" name="state" required placeholder="State/District" />
                                        </div>
                                        <div class="form-group">
                                            <label for="zipcode3">Zipcode / Postal Code</label>
                                            <input type="text" class="form-control" id="zipcode3" name="zip_code" required placeholder="Zipcode / Postal Code" />
                                        </div>
                                    </div>
                                    <div class="button-row d-flex justify-content-end">
                                        <button class="btn back js-btn-prev" type="button" title="Prev"><i class="fas fa-angle-left"></i> Back </button>
                                        <button class="btn next js-btn-next" type="button" title="Next">Next <i class="fas fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="multisteps-form__panel " data-animation="scaleIn">
                                <div class="multisteps-form__content">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="check-out-form text-center">
                                                <h3 class="checkout-title">Payment Method</h3>
                                                <a class="payment-method-btn" href="#">paypal</a>
                                                <a class="payment-method-btn" href="#">stripe</a>
                                                <a class="payment-method-btn" href="#">cash on delivery</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="check-out-form">
                                                <div class="credit-card">
                                                    <input class="form-check-input" type="radio" name="paymentmethod" id="exampleRadios1" value="option1" >
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        <span class="card-name">Credit Card</span>
                                                        <img src="images/credit-card.png" alt="credit-card" />
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cardhumber">Card Number</label>
                                                    <input type="text" class="form-control" id="cardhumber" name="cardhumber" required placeholder="4152  5632  2563  5896" />
                                                    <img class="form-img" src="images/p-mastercard.png" alt="p-mastercard" /> 
                                                </div>
                                                <div class="form-group">
                                                    <label for="authorname">Name</label>
                                                    <input type="text" class="form-control" id="authorname" name="authorname" required placeholder="Abdul Kuddus" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <label>Expiration Date</label>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <select class="niceselect ">
                                                                        <option data-display="Month">Month</option>
                                                                        <option value="1">01</option>
                                                                        <option value="2">02</option>
                                                                        <option value="3">03</option>
                                                                        <option value="4">04</option>
                                                                        <option value="5">05</option>
                                                                        <option value="6">06</option>
                                                                        <option value="7">07</option>
                                                                        <option value="8">08</option>
                                                                        <option value="9">09</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <select class="niceselect ">
                                                                        <option data-display="Year">2020</option>
                                                                        <option value="1">2019</option>
                                                                        <option value="2">2018</option>
                                                                        <option value="3">2017</option>
                                                                        <option value="4">2016</option>
                                                                        <option value="4">2015</option>
                                                                        <option value="4">2014</option>
                                                                        <option value="4">2013</option>
                                                                        <option value="4">2012</option>
                                                                        <option value="4">2011</option>
                                                                        <option value="4">2010</option>
                                                                        <option value="4">2009</option>
                                                                        <option value="4">2008</option>
                                                                        <option value="4">2007</option>
                                                                        <option value="4">2006</option>
                                                                        <option value="4">2005</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <label>Security Code</label>
                                                        <div class="row">
                                                            <div class="col-lg-9 col-10 col-md-11 col-sm-11">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="ccv" name="ccv"  placeholder="Three digit" maxlength="3" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-1 col-sm-1 col-2">
                                                                <a class="question" href="#"><i class="fas fa-question-circle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="credit-card">
                                                    <input class="form-check-input" type="radio" name="paymentmethod" id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        <span class="card-name">Paypal</span>
                                                        <img src="images/p-paypal.png" alt="credit-card" />
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex justify-content-end">
                                                <button class="btn back js-btn-prev" type="button" title="Prev"><i class="fas fa-angle-left"></i> back</button>
                                                <button class="btn next js-btn-next" type="button" title="Next">Place Order</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="multisteps-form__panel" data-animation="scaleIn">
                                <div class="check-out-form text-center">
                                    <h3 class="checkout-title">Confirmation</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus at vestibulum, sed nunc, porttitor justo blandit quis diam. Metus odio sit diam, vel cras mauris malesuada lobortis ullamcorper.</p>
                                </div>
                                <div class="button-row d-flex justify-content-center">
                                    <button class="btn back js-btn-prev" type="button" title="Prev"><i class="fas fa-angle-left"></i> Back to Edit</button>
                                    <button class="btn btn-primary" type="submit" title="Confirm">Confirm</button>

                                </div>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>    

@endsection



