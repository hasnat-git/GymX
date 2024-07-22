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
                        <div class="">
                           <div class="eg-breadcrumb__title-opacity d-flex justify-content-center">
                              <h2 class="title">Reset Password</h2>
                           </div>
                        </div>
                        <div class="eg-breadcrumb__content">
                           <h2 class="title"> Reset Password</h2>
                           <nav aria-label="breadcrumb">
                              <ol class="eg-breadcrumb__list">
                                 <li class="eg-breadcrumb__item"><a href="index-2.html">Home</a></li>
                                 <li class="eg-breadcrumb__item active" aria-current="page">Reset Password</li>
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

         <!-- login area start -->
         <section class="eg-login__area pb-120 p-relative z-index-1 fix">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xl-6 col-lg-8">
                     <div class="eg-login__wrapper">
                        <div class="eg-login__top text-center mb-30">
                           <h3 class="eg-login__title">Forgot Password</h3>
                           <p>Enter your email address to request password reset.</p>
                        </div>
                        <div class="eg-login__option">
                           <div class="eg-login__input-wrapper">
                              <div class="eg-login__input-box">
                                 <div class="eg-login__input">
                                    <label for="email">Your Email</label>
                                    <input id="email" type="email" placeholder="supex@mail.com">
                                 </div>
                              </div>
                           </div>
                           <div class="eg-login__bottom mt-30">
                              <a href="#" class="eg-btn w-100">Send Mail</a>
                           </div>
                           <p>Remeber Passowrd? <a href="login.html">Login</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- login area end -->

      </main>

      <!-- footer area -->
      @endsection
