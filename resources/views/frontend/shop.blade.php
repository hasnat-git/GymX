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
                           <h2 class="title">Shop</h2>
                        </div>
                     </div>
                     <div class="eg-breadcrumb__content">
                        <h2 class="title"> Shop</h2>
                        <nav aria-label="breadcrumb">
                           <ol class="eg-breadcrumb__list">
                              <li class="eg-breadcrumb__item"><a href="index-2.html">Home</a></li>
                              <li class="eg-breadcrumb__item active" aria-current="page">Shop</li>
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

         <!-- product-area-start -->
         <section class="product-area pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-4">
                     <div class="eg-product__sidebar p-relative">
                        <div class="eg-product__search d-block p-relative mb-30">
                           <form action="#">
                              <input type="text" placeholder="Keywrord...">
                           </form>
                        </div>
                        <div class="eg-product__price-range">
                           <h3 class="eg-product__sidebar-title">Price</h3>
                           <div class="eg-product__range-head">
                              <div id="eg-slider__range"></div>
                              <div class="eg-product__price-range-min-max">
                                 <input type="text" id="amount">
                                 <input type="submit" value="Filter" id="filter">
                              </div>
                           </div>
                        </div>
                        <div class="eg-product__categories">
                           <h3 class="eg-product__sidebar-title">Categories</h3>
                           <ul>
                              <li><a href="shop.html"><span class="fa fa-arrow-right"></span>Protein</a></li>
                              <li><a href="shop.html"><span class="fa fa-arrow-right"></span>Body &amp; Fit</a></li>
                              <li><a href="shop.html"><span class="fa fa-arrow-right"></span>Fat Burners</a></li>
                              <li><a href="shop.html"><span class="fa fa-arrow-right"></span>Nutrition</a></li>
                              <li><a href="shop.html"><span class="fa fa-arrow-right"></span>Uncategorized</a></li>
                              <li><a href="shop.html"><span class="fa fa-arrow-right"></span>Wellness</a></li>
                           </ul>
                        </div>
                        <div class="eg-sidebar__widget mt-30 mb-30">
                           <div class="eg-sidebar__widget-title">
                              <h4 class="title">Popular Tags</h4>
                           </div>
                           <div class="eg-sidebar__widget-content">
                              <div class="eg-sidebar__widget-tagcloud">
                                 <a href="#">Energy</a>
                                 <a href="#">Fitness</a>
                                 <a href="#">Healthy</a>
                                 <a href="#">Powders </a>
                                 <a href="#">Nutrition</a>
                                 <a href="#">Protein</a>
                                 <a href="#">Snacks</a>
                                 <a href="#">Wellness</a>
                                 <a href="#">Food</a>
                                 <a href="#">Diet</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-8">
                     <div class="eg-product__info-top">
                        <div class="eg-product__showing-top">
                           <p class="eg-product__showing-text">Showing 1–9 of 12 Results</p>
                        </div>
                        <div class="eg-product__showing-sort">
                           <select class="eg-product__filter shop-filter">
                              <option selected="">Sort by popular</option>
                              <option value="1">Sort by view</option>
                              <option value="2">Sort by price</option>
                              <option value="3">Sort by ratings</option>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xl-4 col-md-6">
                           <div class="eg-product__item text-center mb-60">
                              <div class="eg-product__thumb">
                                 <a href="shop-details.html"><img src="assets/img/product/product-1.png" alt="product-thumb"></a>
                              </div>
                              <div class="eg-product__content">
                                 <h4 class="eg-product__title"><a href="shop-details.html">Protein Powder 2kg</a></h4>
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
                        </div>
                        <div class="col-xl-4 col-md-6">
                           <div class="eg-product__item text-center mb-60">
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
                        </div>
                        <div class="col-xl-4 col-md-6">
                           <div class="eg-product__item text-center mb-60">
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
                        </div>
                        <div class="col-xl-4 col-md-6">
                           <div class="eg-product__item text-center mb-60">
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
                        </div>
                        <div class="col-xl-4 col-md-6">
                           <div class="eg-product__item text-center mb-60">
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
                        </div>
                        <div class="col-xl-4 col-md-6">
                           <div class="eg-product__item text-center mb-60">
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
                           </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                           <div class="eg-product__item text-center mb-60">
                              <div class="eg-product__thumb">
                                 <a href="shop-details.html"><img src="assets/img/product/product-1.png" alt="product-thumb"></a>
                              </div>
                              <div class="eg-product__content">
                                 <h4 class="eg-product__title"><a href="shop-details.html">Protein Powder 2kg</a></h4>
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
                        </div>
                        <div class="col-xl-4 col-md-6">
                           <div class="eg-product__item text-center mb-60">
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
                        </div>
                        <div class="col-xl-4 col-md-6">
                           <div class="eg-product__item text-center mb-60">
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
                        </div>
                     </div>
                     <div class="eg-postbox__pagination text-center">
                        <nav>
                           <ul>
                              <li>
                                 <a href="#">
                                    <span>
                                       <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M5.15625 8.60547L5.70312 8.05859C5.8125 7.92188 5.8125 7.73047 5.67578 7.59375L3.48828 5.46094H12.9219C13.0859 5.46094 13.25 5.32422 13.25 5.13281V4.36719C13.25 4.20312 13.0859 4.03906 12.9219 4.03906H3.48828L5.67578 1.93359C5.8125 1.79688 5.8125 1.60547 5.70312 1.46875L5.15625 0.921875C5.01953 0.8125 4.82812 0.8125 4.69141 0.921875L1.08203 4.53125C0.972656 4.66797 0.972656 4.85938 1.08203 4.99609L4.69141 8.60547C4.82812 8.71484 5.01953 8.71484 5.15625 8.60547Z" fill="current"></path>
                                        </svg>
                                    </span>
                                 </a>
                              </li>
                              <li> <a href="#">1</a> </li>
                              <li> <span class="current">2</span> </li>
                              <li> <a href="#">3</a> </li>
                              <li>
                                 <a href="#">
                                    <span>
                                       <svg width="14" height="9" viewBox="0 0 13 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M8.06641 0.921875L7.51953 1.46875C7.41016 1.60547 7.41016 1.79688 7.54688 1.93359L9.73438 4.03906H0.328125C0.136719 4.03906 0 4.20312 0 4.36719V5.13281C0 5.32422 0.136719 5.46094 0.328125 5.46094H9.73438L7.54688 7.59375C7.41016 7.73047 7.41016 7.92188 7.51953 8.05859L8.06641 8.60547C8.20312 8.71484 8.39453 8.71484 8.53125 8.60547L12.1406 4.99609C12.25 4.85938 12.25 4.66797 12.1406 4.53125L8.53125 0.921875C8.39453 0.8125 8.20312 0.8125 8.06641 0.921875Z" fill="current"></path>
                                        </svg>
                                    </span>
                                 </a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- product-area-start -->

      </main>

      <!-- footer area -->
      @endsection
