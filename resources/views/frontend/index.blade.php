@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
      <!-- header area end -->

      <main class="fix">

         <!-- banner area  -->
         <section class="banner__area eg-banner__bg theme-bg text-center scene fix">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="eg-banner__wrap mt-70">
                        <div class="eg-banner__title-opacity d-flex justify-content-center">
                           <h2 class="title">Clean Gainer</h2>
                        </div>
                        <div class="eg-banner__thumb d-flex justify-content-center">
                           <div class="eg-banner__thumb-1"><img class="layer" data-depth="0.2" src="assets/img/banner/banner-img-1.png" alt="banner-thumb"></div>
                           <div class="eg-banner__thumb-2"><img src="assets/img/banner/banner-img-2.png" alt="banner-thumb"></div>
                           <div class="eg-banner__thumb-3"><img class="layer" data-depth="0.2" src="assets/img/banner/banner-img-3.png" alt="banner-thumb"></div>
                        </div>
                        <div class="eg-banner__content">
                           <h3 class="title">Gymx Increase your Energy</h3>
                           <div class="eg-banner__btn">
                              <a class="eg-btn" href="/shop">Shop Now<span><i class="fa-solid fa-chevron-right"></i></span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="eg-banner__shape-1 scene-y">
               <img class="layer" data-depth="3" src="assets/img/banner/banner-shape-01.png" alt="banner-shape">
            </div>
            <div class="eg-banner__shape-2 scene-y">
               <img class="layer" data-depth="3" src="assets/img/banner/banner-shape-02.png" alt="banner-shape">
            </div>
            <div class="eg-banner__shape-3">
               <img class="layer" data-depth="0.2" src="assets/img/banner/banner-shape-03.png" alt="banner-shape">
            </div>
            <div class="eg-banner__shape-4">
               <img class="layer" data-depth="0.2" src="assets/img/banner/banner-shape-04.png" alt="banner-shape">
            </div>
            <div class="eg-banner__shape-5 scene-y">
               <img class="layer" data-depth="1.5" src="assets/img/banner/banner-shape-05.png" alt="banner-shape">
            </div>
            <div class="eg-banner__shape-6 scene-y">
               <img class="layer" data-depth="1.5" src="assets/img/banner/banner-shape-06.png" alt="banner-shape">
            </div>
            <div class="eg-banner__circle-1"></div>
            <div class="eg-banner__circle-2"></div>
         </section>
         <!-- banner area end -->

         <!-- brand area  -->
         <section class="brand__area eg-brand__bg pt-125 pb-130 scene">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="eg-brand__wrapper">
                        <h5 class="eg-brand__title text-center">Perfect Brand is Featured on</h5>
                        <div class="eg-brand__wrap">
                           <div class="swiper-container eg-brand__active">
                              <div class="swiper-wrapper">
                                 <div class="swiper-slide eg-brand__item">
                                    <img src="assets/img/brnad/brand-01.png" alt="">
                                 </div>
                                 <div class="swiper-slide eg-brand__item">
                                    <img src="assets/img/brnad/brand-02.png" alt="">
                                 </div>
                                 <div class="swiper-slide eg-brand__item">
                                    <img src="assets/img/brnad/brand-03.png" alt="">
                                 </div>
                                 <div class="swiper-slide eg-brand__item">
                                    <img src="assets/img/brnad/brand-04.png" alt="">
                                 </div>
                                 <div class="swiper-slide eg-brand__item">
                                    <img src="assets/img/brnad/brand-05.png" alt="">
                                 </div>
                                 <div class="swiper-slide eg-brand__item">
                                    <img src="assets/img/brnad/brand-06.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="eg-brand__shape-1 scene-y">
               <img class=" layer" data-depth="3" src="assets/img/brnad/brand-shape-1.png" alt="brand-shape">
            </div>
            <div class="eg-brand__shape-2 scene-y">
               <img class=" layer" data-depth="3" src="assets/img/brnad/brand-shape-2.png" alt="brand-shape">
            </div>
         </section>
         <!-- brand area end  -->

         <!-- about area -->
         <section class="about__area eg-about__bg scene">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-6 mb-40">
                     <div class="eg-about__thumb w-img">
                        <img src="assets/img/about/about-01.png" alt="about-thumb">
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-6 mb-40">
                     <div class="eg-about__wrapper">
                        <div class="eg-about__content">
                           <h4 class="eg-about__title">Supplement Formulas Features of the most favorite Flavor </h4>
                           <p>Our supplements are meticulously formulated with a focus on quality, efficacy, and innovation, ensuring that you receive the best possible results.</p>
                        </div>
                        <div class="eg-about__list">
                           <div class="row">
                              <div class="col-lg-6">
                                 <ul class="eg-about__list-item">
                                    <li><span><i class="fas fa-check"></i></span>Natural Ingredients</li>
                                    <li><span><i class="fas fa-check"></i></span>Flower Formula</li>
                                 </ul>
                              </div>
                              <div class="col-lg-6">
                                 <ul class="eg-about__list-item">
                                    <li><span><i class="fas fa-check"></i></span>Fishbone Diagram</li>
                                    <li><span><i class="fas fa-check"></i></span>Increased Energy</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <span>Our supplements are meticulously formulated with a focus on quality, efficacy, and innovation.</span>
                        <div class="eg-about__btn">
                           <a class="eg-btn" href="/shop">Shop Now <span><i class="fa-solid fa-chevron-right"></i></span></a>
                           <a class="eg-btn about-btn" href="/contact">Contact Us <span><i class="fa-solid fa-chevron-right"></i></span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="eg-about__shape-1">
               <img  class=" layer" data-depth="0.3" src="assets/img/about/about-shape-1.png" alt="about-shape">
            </div>
            <div class="eg-about__shape-2 scene-y">
               <img  class=" layer" data-depth="3" src="assets/img/about/about-shape-2.png" alt="about-shape">
            </div>
         </section>
         <!-- about area area -->

         <!-- product area -->
         <section id="product" class="product__area eg-product__bg fix">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="eg-section text-center">
                        <h2 class="eg-section__title">Best Selling Product</h2>
                     </div>
                  </div>
               </div>
            </div>

            <div class="container-fluid">
               <div class="swiper-container eg-product__active">
                  <div class="swiper-wrapper">
                    @foreach ($product as $product)
                     <div class="swiper-slide eg-product__item text-center mb-50 mt-50">
                        <div class="eg-product__thumb">
                           <a href="/shop-details{{$product->id}}"><img src="/backend/images/products/{{$product->image}}" height="200px" alt="product-thumb"></a>
                        </div>
                        <div class="eg-product__content">
                           <h4 class="eg-product__title"><a href="shop.html">{{ $product->title }}</a></h4>
                           <span class="eg-product__price">${{ $product->price }}</span>

                           <div class="eg-product__btn d-flex align-items-center justify-content-center">
                              <a href="cart.html" class="eg-product__cart mr-15">
                                 <span><img src="assets/img/icon/cart.svg" alt=""></span>
                              </a>
                              <a class="eg-btn" href="#">Buy Now</a>
                           </div>
                        </div>
                     </div>
                     @endforeach

{{--
                     <div class="swiper-slide eg-product__item text-center mb-50 mt-50">
                        <div class="eg-product__thumb">
                           <a href="shop-details.html"><img src="assets/img/product/product-2.png" alt="product-thumb"></a>
                        </div>
                        <div class="eg-product__content">
                           <h4 class="eg-product__title"><a href="shop-details.html">Pro Rule OQ 01</a></h4>
                           <span class="eg-product__price">$110.99</span>
                           <div class="eg-product__rating">
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span class="eg-product__rating-count">(38)</span>
                           </div>
                           <div class="eg-product__btn d-flex align-items-center justify-content-center">
                              <a href="cart.html" class="eg-product__cart mr-15">
                                 <span><img src="assets/img/icon/cart.svg" alt=""></span>
                              </a>
                              <a class="eg-btn" href="#">Buy Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide eg-product__item text-center mb-50 mt-50">
                        <div class="eg-product__thumb">
                           <a href="shop-details.html"><img src="assets/img/product/product-3.png" alt="product-thumb"></a>
                        </div>
                        <div class="eg-product__content">
                           <h4 class="eg-product__title"><a href="shop-details.html">M2 Muscletech Nitro</a></h4>
                           <span class="eg-product__price">$110.99</span>
                           <div class="eg-product__rating">
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span class="eg-product__rating-count">(38)</span>
                           </div>
                           <div class="eg-product__btn d-flex align-items-center justify-content-center">
                              <a href="cart.html" class="eg-product__cart mr-15">
                                 <span><img src="assets/img/icon/cart.svg" alt=""></span>
                              </a>
                              <a class="eg-btn" href="#">Buy Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide eg-product__item text-center mb-50 mt-50">
                        <div class="eg-product__thumb">
                           <a href="shop-details.html"><img src="assets/img/product/product-4.png" alt="product-thumb"></a>
                        </div>
                        <div class="eg-product__content">
                           <h4 class="eg-product__title"><a href="shop-details.html">Rule Yellow Protien</a></h4>
                           <span class="eg-product__price">$110.99</span>
                           <div class="eg-product__rating">
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span class="eg-product__rating-count">(38)</span>
                           </div>
                           <div class="eg-product__btn d-flex align-items-center justify-content-center">
                              <a href="cart.html" class="eg-product__cart mr-15">
                                 <span><img src="assets/img/icon/cart.svg" alt=""></span>
                              </a>
                              <a class="eg-btn" href="#">Buy Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide eg-product__item text-center mb-50 mt-50">
                        <div class="eg-product__thumb">
                           <a href="shop-details.html"><img src="assets/img/product/product-5.png" alt="product-thumb"></a>
                        </div>
                        <div class="eg-product__content">
                           <h4 class="eg-product__title"><a href="shop-details.html">Amino Energy 4b00</a></h4>
                           <span class="eg-product__price">$110.99</span>
                           <div class="eg-product__rating">
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span class="eg-product__rating-count">(38)</span>
                           </div>
                           <div class="eg-product__btn d-flex align-items-center justify-content-center">
                              <a href="cart.html" class="eg-product__cart mr-15">
                                 <span><img src="assets/img/icon/cart.svg" alt=""></span>
                              </a>
                              <a class="eg-btn" href="#">Buy Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide eg-product__item text-center mb-50 mt-50">
                        <div class="eg-product__thumb">
                           <a href="shop-details.html"><img src="assets/img/product/product-6.png" alt="product-thumb"></a>
                        </div>
                        <div class="eg-product__content">
                           <h4 class="eg-product__title"><a href="shop-details.html">Protein Powder 1kg</a></h4>
                           <span class="eg-product__price">$110.99</span>
                           <div class="eg-product__rating">
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                              <span class="eg-product__rating-count">(38)</span>
                           </div>
                           <div class="eg-product__btn d-flex align-items-center justify-content-center">
                              <a href="cart.html" class="eg-product__cart mr-15">
                                 <span><img src="assets/img/icon/cart.svg" alt=""></span>
                              </a>
                              <a class="eg-btn" href="#">Buy Now</a>
                           </div>
                        </div>
                     </div> --}}
                  </div>
                  <div class="eg-product__arrow">
                    <div class="eg-product__prev">
                        <span>
                           <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.04083 7.18205C0.650309 7.57258 0.650309 8.20574 1.04083 8.59627L7.40479 14.9602C7.79532 15.3508 8.42848 15.3508 8.81901 14.9602C9.20953 14.5697 9.20953 13.9365 8.81901 13.546L3.16215 7.88916L8.81901 2.23231C9.20953 1.84178 9.20953 1.20862 8.81901 0.818092C8.42848 0.427568 7.79532 0.427568 7.40479 0.818092L1.04083 7.18205ZM21.5183 6.88916L1.74794 6.88916V8.88916L21.5183 8.88916V6.88916Z" fill="currentColor"/>
                           </svg>
                        </span>
                     </div>
                     <div class="eg-product__next">
                        <span>
                           <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.2929L14.3431 0.928933C13.9526 0.538409 13.3195 0.538409 12.9289 0.928933C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM-8.74228e-08 9L20 9L20 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor"/>
                           </svg>
                        </span>
                     </div>

                  </div>
               </div>
            </div>
         </section>
         <!-- product area end -->

         <!-- feature area -->
         <section class="feature__area eg-feature__bg theme-bg scene">
            <div class="container">
               <div class="eg-feature__opacity d-flex justify-content-center">
                  <h4 class="eg-feature__opacity-title d-none d-xl-block">Supplements</h4>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="eg-feature__section eg-section text-center">
                        <h2 class="eg-section__title title-white">Formulars Features</h2>
                     </div>
                  </div>
               </div>
               <div class="eg-feature__wrapper">
                  <div class="row">
                     <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="eg-feature__list">
                           <ul>
                              <li>
                                 <div class="eg-feature__item">
                                    <div class="eg-feature__icon">
                                       <span><i class="flaticon-hop"></i></span>
                                    </div>
                                    <div class="eg-feature__content">
                                       <h4 class="eg-feature__title">Natural Ingredients</h4>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="eg-feature__item">
                                    <div class="eg-feature__icon">
                                       <span><i class="flaticon-formula-1"></i></span>
                                    </div>
                                    <div class="eg-feature__content">
                                       <h4 class="eg-feature__title">Fishbone Formula</h4>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="eg-feature__item">
                                    <div class="eg-feature__icon">
                                       <span><i class="flaticon-drugs"></i></span>
                                    </div>
                                    <div class="eg-feature__content">
                                       <h4 class="eg-feature__title">Flower Formula</h4>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="eg-feature__thumb-wrap scene">
                           <div class="eg-feature__thumb-main">
                              <img src="assets/img/feature/feature-thumb-01.png" alt="feature-thumb">
                           </div>
                           <div class="eg-feature__shape">
                              <div class="eg-feature__shape-1">
                                 <img class="layer" data-depth="0.4" src="assets/img/feature/feature-shape-01.png" alt="feature-shape">
                              </div>
                              <div class="eg-feature__shape-2">
                                 <img class="layer" data-depth="0.4"  src="assets/img/feature/feature-shape-02.png" alt="feature-shape">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="eg-feature__list eg-feature__list-2">
                           <ul>
                              <li>
                                 <div class="eg-feature__item">
                                    <div class="eg-feature__content">
                                       <h4 class="eg-feature__title">Fishbone Diagram</h4>
                                    </div>
                                    <div class="eg-feature__icon">
                                       <span><i class="flaticon-formula-1"></i></span>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="eg-feature__item">
                                    <div class="eg-feature__content">
                                       <h4 class="eg-feature__title">100% Fat Blasting </h4>
                                    </div>
                                    <div class="eg-feature__icon">
                                       <span><i class="flaticon-fat"></i></span>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="eg-feature__item">
                                    <div class="eg-feature__content">
                                       <h4 class="eg-feature__title"> increased energy</h4>
                                    </div>
                                    <div class="eg-feature__icon">
                                       <span><i class="flaticon-energy-drink"></i></span>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="eg-feature__shape">
               <div class="eg-feature__shape-3 scene-y">
                  <img class="layer" data-depth="3" src="assets/img/feature/feature-shape-03.png" alt="feature-shape">
               </div>
               <div class="eg-feature__shape-4">
                  <img class="layer" data-depth=".4" src="assets/img/feature/feature-shape-04.png" alt="feature-shape">
               </div>
               <div class="eg-feature__shape-5">
                  <img class="layer" data-depth=".3" src="assets/img/feature/feature-shape-04.png" alt="feature-shape">
               </div>
               <div class="eg-feature__shape-6 scene-y">
                  <img class="layer" data-depth="3" src="assets/img/feature/feature-shape-01.png" alt="feature-shape">
               </div>
            </div>
         </section>
         <!-- feature area end -->

         <!-- pricing area -->
         {{-- <section class="pricing__area eg-pricing__bg scene">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="eg-pricing__section eg-section text-center">
                        <h2 class="eg-section__title">Popular Supplement Package</h2>
                     </div>
                  </div>
               </div>
               <div class="eg-pricing__wrapper">
                  <div class="row align-items-end">
                     <div class="col-lg-4 col-md-6 mb-40">
                        <div class="eg-pricing__item">
                           <div class="eg-pricing__head-shadow">
                              <div class="eg-pricing__head">
                                 <span>Essential</span>
                                 <h4 class="eg-pricing__price">$79.99</h4>
                                 <p>Supplements are meticulously formulated with a focus on quality.</p>
                                 <div class="eg-pricing__btn">
                                    <a href="#">Buy Now</a>
                                 </div>
                                 <div class="eg-pricing__opacity">
                                    <h5 class="eg-pricing__opacity-text">Simple Pricing</h5>
                                 </div>
                                 <div class="eg-pricing__shape">
                                    <img src="assets/img/price/peice-shape-01.png" alt="price-shape">
                                 </div>
                              </div>
                           </div>
                           <div class="eg-pricing__list">
                              <ul>
                                 <li><span><i class="fas fa-check-circle"></i></span>01 Person User only</li>
                                  <li><span><i class="fas fa-check-circle"></i></span>40 MG Per Capsule</li>
                                  <li class="inactive"><span><i class="fas fa-check-circle"></i></span>80 Capsules Per Bottle</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 mb-40">
                        <div class="eg-pricing__item pri-active">
                           <div class="eg-pricing__head-shadow">
                              <div class="eg-pricing__head">
                                 <span>Premium</span>
                                 <h4 class="eg-pricing__price">$99.99</h4>
                                 <p>Supplements are meticulously formulated with a focus on quality.</p>
                                 <div class="eg-pricing__btn">
                                    <a href="#">Buy Now</a>
                                 </div>
                                 <div class="eg-pricing__opacity">
                                    <h5 class="eg-pricing__opacity-text">Simple Pricing</h5>
                                 </div>
                                 <div class="eg-pricing__shape">
                                    <img src="assets/img/price/peice-shape-01.png" alt="price-shape">
                                 </div>
                              </div>
                           </div>
                           <div class="eg-pricing__list">
                              <ul>
                                 <li><span><i class="fas fa-check-circle"></i></span>02 Person User only</li>
                                  <li><span><i class="fas fa-check-circle"></i></span>60 MG Per Capsule</li>
                                  <li><span><i class="fas fa-check-circle"></i></span>80 Capsules Per Bottle</li>
                                  <li class="inactive"><span><i class="fas fa-check-circle"></i></span>100 Capsules Per Bottle</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 mb-40">
                        <div class="eg-pricing__item">
                           <div class="eg-pricing__head-shadow">
                              <div class="eg-pricing__head">
                                 <span>Enterprise</span>
                                 <h4 class="eg-pricing__price">$209.99</h4>
                                 <p>Supplements are meticulously formulated with a focus on quality.</p>
                                 <div class="eg-pricing__btn">
                                    <a href="#">Buy Now</a>
                                 </div>
                                 <div class="eg-pricing__opacity">
                                    <h5 class="eg-pricing__opacity-text">Simple Pricing</h5>
                                 </div>
                                 <div class="eg-pricing__shape">
                                    <img src="assets/img/price/peice-shape-01.png" alt="price-shape">
                                 </div>
                              </div>
                           </div>
                           <div class="eg-pricing__list">
                              <ul>
                                 <li><span><i class="fas fa-check-circle"></i></span>04 Person User only</li>
                                  <li><span><i class="fas fa-check-circle"></i></span>60 MG Per Capsule</li>
                                  <li class="inactive"><span><i class="fas fa-check-circle"></i></span>100 Capsules Per Bottle</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="eg-pricing__shape-1">
                     <img  class="layer" data-depth="0.3" src="assets/img/price/peice-shape-02.png" alt="pricing-shape">
                  </div>
                  <div class="eg-pricing__shape-2">
                     <img  class="layer" data-depth="0.2" src="assets/img/price/peice-shape-03.png" alt="pricing-shape">
                  </div>
               </div>
            </div>
         </section> --}}
         <!-- pricing area end -->

         <!-- faq area -->
         <section class="faq__area eg-faq__bg scene">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="eg-faq__section eg-section text-center">
                        <h2 class="eg-section__title">Asking Question</h2>
                     </div>
                  </div>
               </div>
               <div class="eg-faq__wrapper">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="eg-faq__wrap">
                            @foreach ($faq as $faq)
                           <div class="accordion" id="accordionExample">

                              <div class="accordion-item">

                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">
                                    {{$faq->question}}
                                    <span class="eg-faq__btn"></span>
                                  </button>
                                </h2>
                                <div id="collapse{{$faq->id}}" class="accordion-collapse collapse {{ $faq->id == 1 ? 'show' : '' }}" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>{{$faq->answer}}</p>
                                  </div>
                                </div>

                              </div>


                              {{-- <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How does our supplement support overall health and wellness ?
                                    <span class="eg-faq__btn"></span>
                                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>Our supplement is carefully formulated to provide comprehensive support for your health and wellness needs. It combines a unique blend of vitamins, minerals, antioxidants.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header">
                                   <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Can our supplement help with weight management?
                                     <span class="eg-faq__btn"></span>
                                   </button>
                                 </h2>
                                 <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                   <div class="accordion-body">
                                     <p>Our supplement is carefully formulated to provide comprehensive support for your health and wellness needs. It combines a unique blend of vitamins, minerals, antioxidants.</p>
                                   </div>
                                 </div>
                               </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Is our supplement safe to take with other medications ?
                                    <span class="eg-faq__btn"></span>
                                  </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>Our supplement is carefully formulated to provide comprehensive support for your health and wellness needs. It combines a unique blend of vitamins, minerals, antioxidants.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How long does it take to see results from our supplement ?
                                    <span class="eg-faq__btn"></span>
                                  </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>Our supplement is carefully formulated to provide comprehensive support for your health and wellness needs. It combines a unique blend of vitamins, minerals, antioxidants.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What is the science behind the ingredients in our supplement?
                                    <span class="eg-faq__btn"></span>
                                  </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>Our supplement is carefully formulated to provide comprehensive support for your health and wellness needs. It combines a unique blend of vitamins, minerals, antioxidants.</p>
                                  </div>
                                </div>
                              </div> --}}
                            </div>
                            @endforeach
                        </div>
                     </div>
                  </div>
                  <div class="eg-faq__shape-1 scene-y">
                     <img class="layer" data-depth="3" src="assets/img/shape/faq-shape-1.png" alt="faq-shape">
                  </div>
                  <div class="eg-faq__shape-2">
                     <img class="layer" data-depth="0.3" src="assets/img/shape/faq-shape-2.png" alt="faq-shape">
                  </div>
               </div>
            </div>
         </section>
         <!-- faq area end -->

         <!-- testimonial area -->
         <section class="testimonial__area eg-testimonial__bg theme-bg p-relative scene">
            <h4 class="eg-testimonial__opacity-text">Client Testimonial</h4>
            <div class="container">
               <div class="eg-testimonial__wrap">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="swiper-container eg-testimonial__active">
                           <div class="swiper-wrapper">
                            @foreach ($testimonial as $testimonial)



                              <div class="swiper-slide eg-testimonial__item text-center">
                                 <div class="eg-testimonial__avatar-thumb">
                                    <img src="/backend/images/testimonials/{{$testimonial->image}}" alt="testimonial-thumb">
                                 </div>
                                 <div class="eg-testimonial__avatar-info">
                                    <h5 class="eg-testimonial__avatar-title">{{ $testimonial->name }}</h5>
                                    <span>{{ $testimonial->about }}</span>
                                 </div>
                                 <div class="eg-testimonial__content">
                                    <p> "{{  $testimonial->statement }} "</p>
                                 </div>
                                 <div class="eg-testimonial__rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $testimonial->rate)
                                            <span><img src="assets/img/icon/star.svg" alt="rating-star"></span>

                                        @endif
                                    @endfor
                                </div>
                              </div>
                              @endforeach

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="eg-testimonial__arrow">
                     <div class="eg-testimonial__next">
                        <span><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.2929L14.3431 0.928933C13.9526 0.538409 13.3195 0.538409 12.9289 0.928933C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM-8.74228e-08 9L20 9L20 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor"/>
                           </svg>
                        </span>
                     </div>
                     <div class="eg-testimonial__prev">
                        <span><svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1.04083 7.18205C0.650309 7.57258 0.650309 8.20574 1.04083 8.59627L7.40479 14.9602C7.79532 15.3508 8.42848 15.3508 8.81901 14.9602C9.20953 14.5697 9.20953 13.9365 8.81901 13.546L3.16215 7.88916L8.81901 2.23231C9.20953 1.84178 9.20953 1.20862 8.81901 0.818092C8.42848 0.427568 7.79532 0.427568 7.40479 0.818092L1.04083 7.18205ZM21.5183 6.88916L1.74794 6.88916V8.88916L21.5183 8.88916V6.88916Z" fill="currentColor"/>
                           </svg>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="eg-testimonial__shape">
               <div class="eg-testimonial__shape-1 scene-y">
                  <img class="layer" data-depth="3" src="assets/img/testimonial/testimonial-shape-03.png" alt="testimonial-shape">
               </div>
               <div class="eg-testimonial__shape-2 scene-y">
                  <img class="layer" data-depth="3" src="assets/img/testimonial/testimonial-shape-04.png" alt="testimonial-shape">
               </div>
               <div class="eg-testimonial__shape-3 scene-y">
                  <img class="layer" data-depth="3" src="assets/img/testimonial/testimonial-shape-05.png" alt="testimonial-shape">
               </div>
               <div class="eg-testimonial__shape-4 scene-y">
                  <img class="layer" data-depth="3" src="assets/img/testimonial/testimonial-shape-03.png" alt="testimonial-shape">
               </div>
            </div>
         </section>
         <!-- testimonial area end -->

         <!-- blog area -->
         <section class="blog__area eg-blog__bg scene">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="eg-blog__section eg-section text-center">
                        <h2 class="eg-section__title">Read Blog Article</h2>
                     </div>
                  </div>
               </div>

               <div class="row">
                  @foreach ($blog->take(3) as $blog)
                     <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="eg-blog__item text-center mb-40">
                           <div class="eg-blog__thumb w-img">
                              <a href="blog-details.html">
                                 <img src="/backend/images/blog_posts/{{$blog->blog_image}}" alt="img">
                              </a>
                           </div>
                           <div class="eg-blog__content">
                              <div class="eg-blog__meta-date">
                                 <span><i class="far fa-clock"></i>{{ $blog->updated_on }}</span>
                              </div>
                              <h4 class="eg-blog__title">
                                 <a href="blog-details.html">{{ $blog->title }}</a>
                              </h4>
                              <div class="eg-blog__meta-name">
                                 <p><span>Post By</span> - {{ $blog->author }}</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>

               <div class="row">
                  <div class="col-12">
                     <div class="eg-blog__arrow text-center">
                        <div class="eg-blog__arrow_btn">
                           <a href="#product">
                              <span>
                                 <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.70711 0.292892C8.31658 -0.0976315 7.68342 -0.0976314 7.29289 0.292892L0.928932 6.65685C0.538407 7.04738 0.538407 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292892ZM9 17L9 1L7 1L7 17L9 17Z" fill="#000D44"/>
                                 </svg>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="eg-blog__shape-1">
               <img class="layer" data-depth="0.3" src="assets/img/blog/blog-shape-1.png" alt="blog-shape">
            </div>
            <div class="eg-blog__shape-2">
               <img class="layer" data-depth="0.3" src="assets/img/blog/blog-shape-2.png" alt="blog-shape">
            </div>
         </section>

         <!-- blog area end -->

         <!-- instagram area -->
         <div class="eg-instagram__area mb-65">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="eg-instagram__wrap swiper-container eg-instagram__active">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="eg-instagram__item mask-1 mb-40">
                                 <img src="assets/img/instagram/instagram-1.png" alt="">
                                 <div class="eg-instagram__icon">
                                    <a class="popup-image" href="assets/img/instagram/instagram-1.png"><i class="fab fa-instagram"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="eg-instagram__item mask-2 mb-40">
                                 <img src="assets/img/instagram/instagram-2.png" alt="">
                                 <div class="eg-instagram__icon">
                                    <a class="popup-image" href="assets/img/instagram/instagram-2.png"><i class="fab fa-instagram"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="eg-instagram__item mask-3 mb-40">
                                 <img src="assets/img/instagram/instagram-3.png" alt="">
                                 <div class="eg-instagram__icon">
                                    <a class="popup-image" href="assets/img/instagram/instagram-3.png"><i class="fab fa-instagram"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="eg-instagram__item mask-4 mb-40">
                                 <img src="assets/img/instagram/instagram-4.png" alt="">
                                 <div class="eg-instagram__icon">
                                    <a class="popup-image" href="assets/img/instagram/instagram-4.png"><i class="fab fa-instagram"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="eg-instagram__item mask-5 mb-40">
                                 <img src="assets/img/instagram/instagram-5.png" alt="">
                                 <div class="eg-instagram__icon">
                                    <a class="popup-image" href="assets/img/instagram/instagram-5.png"><i class="fab fa-instagram"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="eg-instagram__item mask-1 mb-40">
                                 <img src="assets/img/instagram/instagram-1.png" alt="">
                                 <div class="eg-instagram__icon">
                                    <a class="popup-image" href="assets/img/instagram/instagram-1.png"><i class="fab fa-instagram"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- instagram area end -->

      </main>

      <!-- footer area -->
     @endsection
