@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
      <!-- header area end -->

      <main class="fix">

         <!-- breadcrumb-area-start -->
         <section class="eg-breadcrumb__area theme-bg mb-130 p-relative z-index-1 scene">
            <div class="eg-breadcrumb">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-lg-12">
                        <div class="eg-breadcrumb__title-opacity d-flex justify-content-center">
                           <h2 class="title">Checkout</h2>
                        </div>
                        <div class="eg-breadcrumb__content">
                           <h2 class="title"> Checkout</h2>
                           <nav aria-label="breadcrumb">
                              <ol class="eg-breadcrumb__list">
                                 <li class="eg-breadcrumb__item"><a href="index-2.html">Home</a></li>
                                 <li class="eg-breadcrumb__item active" aria-current="page">Checkout</li>
                              </ol>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="eg-banner__circle-1"></div>
               <div class="eg-breadcrumb__shape one">
                  <img class="layer" data-depth="0.3" src="assets/img/banner/banner-shape-01.png" alt="img">
               </div>
               <div class="eg-breadcrumb__shape two scene-y">
                  <img class="layer" data-depth="3" src="assets/img/banner/banner-shape-02.png" alt="shape">
               </div>
               <div class="eg-breadcrumb__shape three">
                  <img class="layer" data-depth="0.3" src="assets/img/banner/banner-shape-03.png" alt="shape">
               </div>
               <div class="eg-breadcrumb__shape four">
                  <img class="layer" data-depth="0.3" src="assets/img/banner/banner-shape-04.png" alt="shape">
               </div>
            </div>
         </section>
         <!-- breadcrumb-area-start -->

         <!-- cart-area-start -->
         <section class="eg-checkout__area mb-120">
            <div class="container">
               <div class="eg-checkout__notice mb-15">Returning Customer? <a href="login.html">Click here to Login</a></div>
               <div class="row">
                  <div class="col-lg-7">
                     <div class="eg-checkout__wrapper">
                        <div class="eg-checkout__billing-address">
                           <h3 class="eg-checkout__title mb-35">Billing details</h3>
                           <form class="eg-checkout__form">
                              <div class="row">
                                 <div class="col-xl-12">
                                    <div class="eg-checkout__input-box">
                                       <select class="selectpicker shop-filter">
                                          <option selected="">Select a country</option>
                                          <option value="1">Canada</option>
                                          <option value="2">England</option>
                                          <option value="3">Australia</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="row bs-gutter-x-20">
                                 <div class="col-xl-6">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="first_name" value="" placeholder="First name" required="">
                                    </div>
                                 </div>
                                 <div class="col-xl-6">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="last_name" value="" placeholder="Last name" required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xl-12">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="company_name" value="" placeholder="Company">
                                    </div>
                                 </div>
                                 <div class="col-xl-12">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="Address" value="" placeholder="Address">
                                    </div>
                                 </div>
                                 <div class="col-xl-12">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="company_name" value=""
                                          placeholder="Appartment, unit, etc. (optional)">
                                    </div>
                                 </div>
                                 <div class="col-xl-12">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="Town/City" value="" placeholder="Town / City" required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="row bs-gutter-x-20">
                                 <div class="col-xl-6">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="State" value="" placeholder="State" required="">
                                    </div>
                                 </div>
                                 <div class="col-xl-6">
                                    <div class="eg-checkout__input-box">
                                       <input name="form_zip" type="text" pattern="[0-9]*" placeholder="Zip code">
                                    </div>
                                 </div>
                                 <div class="col-xl-6">
                                    <div class="eg-checkout__input-box">
                                       <input name="email" type="email" placeholder="Email address">
                                    </div>
                                 </div>
                                 <div class="col-xl-6">
                                    <div class="eg-checkout__input-box">
                                       <input type="tel" name="form_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required=""
                                          placeholder="Phone">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xl-12">
                                    <div class="eg-checkout__check-box">
                                       <input id="create_free_account" type="checkbox">
                                       <label for="create_free_account">Create an Account?<span></span></label>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="eg-checkout__shipping-address mt-60">
                           <div class="col-xl-12">
                              <div class="eg-checkout__check-box eg-checkout__shipping-title mb-35">
                                 <input id="create_shipping_account" type="checkbox">
                                 <label for="create_shipping_account">Ship to a different address<span></span></label>
                              </div>
                           </div>
                           <form class="eg-checkout__form">
                              <div class="row">
                                 <div class="col-xl-12">
                                    <div class="eg-checkout__input-box">
                                       <select class="selectpicker shop-filter">
                                          <option selected="">Select a country</option>
                                          <option value="1">Canada</option>
                                          <option value="2">England</option>
                                          <option value="3">Australia</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="row bs-gutter-x-20">
                                 <div class="col-xl-6">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="first_name" value="" placeholder="First name" required="">
                                    </div>
                                 </div>
                                 <div class="col-xl-6">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="last_name" value="" placeholder="Last name" required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xl-12">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="company_name" value="" placeholder="Company">
                                    </div>
                                 </div>
                                 <div class="col-xl-12">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="Address" value="" placeholder="Address">
                                    </div>
                                 </div>
                                 <div class="col-xl-12">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="company_name" value=""
                                          placeholder="Appartment, unit, etc. (optional)">
                                    </div>
                                 </div>
                                 <div class="col-xl-12">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="Town/City" value="" placeholder="Town / City" required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="row bs-gutter-x-20">
                                 <div class="col-xl-6">
                                    <div class="eg-checkout__input-box">
                                       <input type="text" name="State" value="" placeholder="State" required="">
                                    </div>
                                 </div>
                                 <div class="col-xl-6">
                                    <div class="eg-checkout__input-box">
                                       <input name="form_zip" type="text" pattern="[0-9]*" placeholder="Zip code">
                                    </div>
                                 </div>
                              </div>
                              <div class="row bs-gutter-x-20">
                                 <div class="col-xl-6">
                                    <div class="eg-checkout__input-box">
                                       <input name="email" type="email" placeholder="Email Address">
                                    </div>
                                 </div>
                                 <div class="col-xl-6">
                                    <div class="eg-checkout__input-box">
                                       <input type="tel" name="form_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required=""
                                          placeholder="Phone">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xl-12">
                                    <div class="eg-checkout__input-box texarea-box">
                                       <textarea placeholder="Notes about your order" name="form_order_notes"></textarea>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <div class="eg-order__place">
                        <h3 class="eg-checkout__title">Your Order</h3>
                        <div class="eg-order__info-list">
                           <ul>
                              <li class="eg-order__info-list-header">
                                 <h4>Product</h4>
                                 <h4>Total</h4>
                              </li>
                              <li class="eg-order__info-list-desc">
                                 <p>Protein Powder 2kg <span> x 2</span></p>
                                 <span>$274:00</span>
                              </li>
                              <li class="eg-order__info-list-desc">
                                 <p>Pro Rule OQ 01 <span> x 1</span></p>
                                 <span>$74:00</span>
                              </li>
                              <li class="eg-order__info-list-desc">
                                 <p>M2 Muscletech Nitr0 <span> x 3</span></p>
                                 <span>$362:00</span>
                              </li>
                              <li class="eg-order__info-list-desc">
                                 <p>Protein Powder 2kg <span> x 1</span></p>
                                 <span>$145:00</span>
                              </li>
                              <li class="eg-order__info-list-subtotal">
                                 <span>Subtotal</span>
                                 <span>$507.00</span>
                              </li>
                              <li class="eg-order__info-list-shipping">
                                 <span>Shipping</span>
                                 <div class="eg-cart-checkout__shipping-option-wrapper ">
                                    <div class="eg-cart-checkout__shipping-option eg-order__shipping">
                                       <input id="flat_rate" type="radio" name="shipping">
                                       <label for="flat_rate">Flat rate : <span>$20.00</span></label>
                                    </div>
                                    <div class="eg-cart-checkout__shipping-option eg-order__shipping">
                                       <input id="local_pickup" type="radio" name="shipping">
                                       <label for="local_pickup">Local pickup : <span> $25.00</span></label>
                                    </div>
                                    <div class="eg-cart-checkout__shipping-option eg-order__shipping">
                                       <input id="free_shipping" type="radio" name="shipping">
                                       <label for="free_shipping">Free shipping</label>
                                    </div>
                                 </div>
                              </li>
                              <li class="eg-order__info-list-total">
                                 <span>Total</span>
                                 <span>$1,476.00</span>
                              </li>
                           </ul>
                        </div>
                        <div class="eg-checkout-payment">
                           <div class="eg-checkout-payment__item eg-cart-checkout__shipping-option">
                              <input type="radio" id="back_transfer" name="payment">
                              <label for="back_transfer" data-bs-toggle="direct-bank-transfer">Payment Bank Transfer</label>
                              <div class="eg-checkout-payment__desc direct-bank-transfer">
                                 <p>Make your payment directly into our bank account. Please use your Order ID as the payment
                                    reference. Your order will not be shipped until the funds have cleared in our account.</p>
                              </div>
                           </div>
                           <div class="eg-checkout-payment__item eg-cart-checkout__shipping-option">
                              <input type="radio" id="cheque_payment" name="payment">
                              <label for="cheque_payment">Credit Card (Stripe)</label>
                              <div class="eg-checkout-payment__desc cheque-payment">
                                 <p>Make your payment directly into our bank account. Please use your Order ID as the payment
                                    reference. Your order will not be shipped until the funds have cleared in our account.</p>
                              </div>
                           </div>
                           <div class="eg-checkout-payment__item eg-cart-checkout__shipping-option">
                              <input type="radio" id="cod" name="payment">
                              <label for="cod">Cash on Delivery</label>
                              <div class="eg-checkout-payment__desc cash-on-delivery">
                                 <p>Make your payment directly into our bank account. Please use your Order ID as the payment
                                    reference. Your order will not be shipped until the funds have cleared in our account.</p>
                              </div>
                           </div>
                           <div class="eg-checkout-payment__item paypal-payment eg-cart-checkout__shipping-option">
                              <input type="radio" id="paypal" name="payment">
                              <label for="paypal">PayPal <img src="assets/img/icon/payment-option.png" alt=""></label>
                           </div>
                        </div>
                        <div class="eg-checkout__agree mb-25">
                           <div class="eg-checkout__option eg-checkout__check-box">
                              <input id="read_all" type="checkbox">
                              <label for="read_all">I have read and agree to the website.</label>
                           </div>
                        </div>
                        <div class="eg-checkout__btn-wrapper">
                           <a href="checkout.html" class="eg-checkout__btn eg-btn w-100">Place Order</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- cart-area-start -->

      </main>

      <!-- footer area -->
      @endsection
