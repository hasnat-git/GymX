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
                              <h2 class="title">Login</h2>
                           </div>
                        </div>
                        <div class="eg-breadcrumb__content">
                           <h2 class="title"> Login</h2>
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
                           <h3 class="eg-login__title">Login to GymX.</h3>
                           <p>Don’t have an account? <span><a href="{{ route('user.register') }}">Create a free account</a></span></p>
                        </div>
                        <div class="eg-login__option">
                            @if (session('success'))
                            <div class="alert alert-success">
                               {{ session('success') }}
                            </div>
                         @endif

                         @if (session('error'))
                            <div class="alert alert-danger">
                               {{ session('error') }}
                            </div>
                         @endif

                         <!-- Validation Errors -->
                         @if ($errors->any())
                            <div class="alert alert-danger">
                               <ul>
                                  @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                  @endforeach
                               </ul>
                            </div>
                         @endif
                           <form action="{{ route('user.submit') }}" method="POST">
                              @csrf
                              <div class="eg-login__input-wrapper">
                                 <div class="eg-login__input-box">
                                    <div class="eg-login__input">
                                       <label for="email">Your Email</label>
                                       <input id="email" name="email" type="email" placeholder="GymX@mail.com" required>
                                    </div>
                                 </div>
                                 <div class="eg-login__input-box">
                                    <div class="eg-login__input">
                                      <label for="password">Password</label>
                                      <input id="password" name="password" type="password" placeholder="Min. 6 characters" required>
                                    </div>
                                    <div class="eg-login__input-eye" id="eg-password__show-toggle">
                                      <span id="eg-password__show" class="eye-open">
                                          <!-- Eye icon SVG -->
                                      </span>
                                      <span id="eg-password__hide" class="open-close">
                                          <!-- Closed-eye icon SVG -->
                                      </span>
                                    </div>
                                 </div>
                              </div>
                              <div class="eg-login__suggetions d-flex align-items-center justify-content-between mb-20">
                                 <div class="eg-login__remember">
                                    <input id="remember" name="remember" type="checkbox">
                                    <label for="remember">Remember me</label>
                                 </div>
                                 <div class="eg-login__forgot">
                                    <a href="#">Forgot Password?</a>
                                 </div>
                              </div>
                              <div class="eg-login__bottom">
                                 <button type="submit" class="eg-btn w-100">Login</button>
                              </div>
                           </form>
                           <div class="eg-login__mail text-center mt-20 mb-20">
                              <p>or</p>
                           </div>
                           <div class="eg-login__social mb-10 ">
                              <div class="eg-login__option-item">
                                 <a href="#">
                                    <img src="assets/img/icon/login/google.svg" alt="">
                                    Sign in with Google
                                 </a>
                              </div>
                              <div class="eg-login__option-item">
                                 <a href="#">
                                    <img src="assets/img/icon/login/facebook.svg" alt="">
                                    Sign in with Facebook
                                 </a>
                              </div>
                              <div class="eg-login__option-item">
                                 <a href="#">
                                    <img src="assets/img/icon/login/apple.svg" alt="">
                                    Sign in with Apple
                                 </a>
                              </div>
                           </div>
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
<style>
    .alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}

.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
}

</style>
