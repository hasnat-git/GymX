@extends('frontend.layouts.main')
@section('title', 'Cart')
@section('main-container')
      <!-- header area end -->

      <main class="fix">

         <!-- breadcrumb-area-start -->
         <section class="eg-breadcrumb__area theme-bg mb-130 p-relative z-index-1 scene">
            <div class="eg-breadcrumb">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-lg-12">
                        <div class="">
                           <div class="eg-breadcrumb__title-opacity d-flex justify-content-center">
                              <h2 class="title">Cart</h2>
                           </div>
                        </div>
                        <div class="eg-breadcrumb__content">
                           <h2 class="title"> Cart</h2>
                           {{-- <nav aria-label="breadcrumb">
                              <ol class="eg-breadcrumb__list">
                                 <li class="eg-breadcrumb__item"><a href="index-2.html">Home</a></li>
                                 <li class="eg-breadcrumb__item active" aria-current="page">Cart</li>
                              </ol>
                           </nav> --}}
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
         <section class="eg-cart__area mb-95">
            <div class="container">
               <div class="row justify-content-between">
                  <div class="col-xl-9 col-lg-8">
                     <div class="eg-cart mr-30">
                        <div class="eg-cart__responsive">
                           <table class="table eg-cart__table">
                               <thead>
                                   <tr>
                                       <th>Item</th>
                                       <th>Price</th>
                                       <th>Quantity</th>
                                       <th>Total</th>
                                       <th>Remove</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td class="eg-cart__meta d-flex align-items-center">
                                          <div class="eg-cart__meta-img">
                                             <img src="assets/img/product/cart/cart-01.png" alt="GymX">
                                          </div>
                                          <h3 class="eg-cart__meta-title"><a href="product-details.html">PRO RULE OQ 01</a></h3>
                                       </td>
                                       <td class="eg-cart__price"><span>$10.99</span></td>
                                       <td class="eg-product-details__quantity-box">
                                          <div class="eg-product-details__quantity-box">
                                             <button class="eg-product-details__quantity-btn minus decrement"><i class="fa fa-minus"></i></button>
                                             <span class="counter">1</span>
                                             <button class="eg-product-details__quantity-btn plus increment"><i class="fa fa-plus"></i></button>
                                          </div>
                                       </td>
                                       <td class="text-end">$10.99</td>
                                       <td>
                                          <a href="cart.html" class="table eg-cart__remove">
                                             <svg width="17" height="17" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z" fill="currentColor"></path>
                                             </svg>
                                          </a>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="eg-cart__meta d-flex align-items-center">
                                          <div class="eg-cart__meta-img">
                                             <img src="assets/img/product/cart/cart-02.png" alt="GymX">
                                          </div>
                                          <h3 class="eg-cart__meta-title"><a href="product-details.html">RULE YELLOW PROTIEN</a></h3>
                                       </td>
                                       <td class="eg-cart__price"><span>$19.99</span></td>
                                       <td class="eg-product-details__quantity-box">
                                          <div class="eg-product-details__quantity-box">
                                             <button class="eg-product-details__quantity-btn minus decrement"><i class="fa fa-minus"></i></button>
                                             <span class="counter">1</span>
                                             <button class="eg-product-details__quantity-btn plus increment"><i class="fa fa-plus"></i></button>
                                          </div>
                                       </td>
                                       <td class="text-end">$39.98</td>
                                       <td>
                                          <a href="cart.html" class="table eg-cart__remove">
                                             <svg width="17" height="17" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z" fill="currentColor"></path>
                                             </svg>
                                          </a>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="eg-cart__meta d-flex align-items-center">
                                          <div class="eg-cart__meta-img">
                                             <img src="assets/img/product/cart/cart-03.png" alt="GymX">
                                          </div>
                                          <h3 class="eg-cart__meta-title"><a href="product-details.html">Protein Powder 2kg</a></h3>
                                       </td>
                                       <td class="eg-cart__price"><span>$10.99</span></td>
                                       <td class="eg-product-details__quantity-box">
                                          <div class="eg-product-details__quantity-box">
                                             <button class="eg-product-details__quantity-btn minus decrement"><i class="fa fa-minus"></i></button>
                                             <span class="counter">1</span>
                                             <button class="eg-product-details__quantity-btn plus increment"><i class="fa fa-plus"></i></button>
                                          </div>
                                       </td>
                                       <td class="text-end">$10.99</td>
                                       <td>
                                          <a href="cart.html" class="table eg-cart__remove">
                                             <svg width="17" height="17" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z" fill="currentColor"></path>
                                             </svg>
                                          </a>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                       <div class="eg-cart__bottom mt-60">
                          <div class="row align-items-end">
                             <div class="col-xl-6 col-md-8 mb-25">
                                <div class="eg-cart__coupon">
                                   <form action="#">
                                      <div class="eg-cart__coupon-input-box">
                                         <label>Coupon Code:</label>
                                         <div class="eg-cart__coupon-input d-flex align-items-center">
                                            <input type="text" placeholder="Enter Coupon Code">
                                            <button type="submit">Apply</button>
                                         </div>
                                      </div>
                                   </form>
                                </div>
                             </div>
                             <div class="col-xl-6 col-md-4 mb-25">
                                <div class="eg-cart__update text-md-end">
                                   <button type="button" class="eg-cart__update-btn eg-btn"> Update Cart </button>
                                </div>
                             </div>
                          </div>
                       </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4">
                     <div class="eg-cart-checkout__wrapper">
                        <div class="eg-cart-checkout__top d-flex align-items-center justify-content-between">
                           <span class="eg-cart-checkout__top-title">Subtotal</span>
                           <span class="eg-cart-checkout__top-price">$740</span>
                        </div>
                        <div class="eg-cart-checkout__shipping">
                           <h4 class="eg-cart-checkout__shipping-title">Shipping</h4>

                           <div class="eg-cart-checkout__shipping-option-wrapper">
                              <div class="eg-cart-checkout__shipping-option">
                                 <input id="flat_rate" type="radio" name="shipping">
                                 <label for="flat_rate">Flat rate : <span>$20.00</span></label>
                              </div>
                              <div class="eg-cart-checkout__shipping-option">
                                 <input id="local_pickup" type="radio" name="shipping">
                                 <label for="local_pickup">Local pickup : <span> $25.00</span></label>
                              </div>
                              <div class="eg-cart-checkout__shipping-option">
                                 <input id="free_shipping" type="radio" name="shipping">
                                 <label for="free_shipping">Free shipping</label>
                              </div>
                           </div>
                        </div>
                        <div class="eg-cart-checkout__total d-flex align-items-center justify-content-between">
                           <span>Total</span>
                           <span>$734</span>
                        </div>
                        <div class="eg-cart-checkout__proceed">
                           <a href="/checkout" class="eg-cart-checkout__btn eg-btn w-100">Proceed to Checkout</a>
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
