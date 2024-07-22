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
                        <h2 class="title">Shop Details</h2>
                     </div>
                     <div class="eg-breadcrumb__content">
                        <h2 class="title"> Shop Details</h2>
                        <nav aria-label="breadcrumb">
                           <ol class="eg-breadcrumb__list">
                              <li class="eg-breadcrumb__item"><a href="index-2.html">Home</a></li>
                              <li class="eg-breadcrumb__item active" aria-current="page">Shop Details</li>
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

         <!-- product-single-start -->
         <section class="eg-product-single__area pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="eg-product-details__thumb-tab mb-85">
                        <div class="eg-product-details__thumb-content w-img">
                            <div class="tab-content" id="nav-tabContent">
                              <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                                 <img src="assets/img/product/details/big/product-details-big-1.jpg" alt="">
                              </div>
                              <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                                 <img src="assets/img/product/details/big/product-details-big-2.jpg" alt="">
                              </div>
                              <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                                 <img src="assets/img/product/details/big/product-details-big-3.jpg" alt="">
                              </div>
                              <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">
                                 <img src="assets/img/product/details/big/product-details-big-4.jpg" alt="">
                              </div>
                            </div>
                        </div>
                        <div class="eg-product-details__thumb-nav tp-tab mt-30">
                           <nav>
                              <div class="nav nav-tabs d-flex justify-content-between" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">
                                 <img src="assets/img/product/details/sm/product-details-sm-1.jpg" alt="">
                                </button>
                                <button class="nav-link" id="nav-two-tab" data-bs-toggle="tab" data-bs-target="#nav-two" type="button" role="tab" aria-controls="nav-two" aria-selected="false">
                                 <img src="assets/img/product/details/sm/product-details-sm-2.jpg" alt="">
                                </button>
                                <button class="nav-link" id="nav-three-tab" data-bs-toggle="tab" data-bs-target="#nav-three" type="button" role="tab" aria-controls="nav-three" aria-selected="false">
                                 <img src="assets/img/product/details/sm/product-details-sm-3.jpg" alt="">
                                </button>
                                <button class="nav-link" id="nav-four-tab" data-bs-toggle="tab" data-bs-target="#nav-four" type="button" role="tab" aria-controls="nav-four" aria-selected="false">
                                 <img src="assets/img/product/details/sm/product-details-sm-4.jpg" alt="">
                                </button>
                              </div>
                            </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="eg-product-details__wrapper">
                        <div class="eg-product-details__content">
                           <h3 class="eg-product-details__title">PROTEIN POWDER 2KG</h3>
                           <div class="eg-product-details__stock d-flex align-items-center mt-20 mb-20">
                              <button class="stock mr-15">in stock</button>
                              <div class="eg-product-details__rating">
                                 <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                 <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                 <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                 <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                 <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                 <span class="eg-product-details__rating-count ml-5">(38)</span>
                              </div>
                           </div>
                           <p>Supex food is food produced by methods complying with the standards of Rrganic farming. Standards vary Lorem ipsum do...<a class="see-more" href="#">see more</a></p>
                           <div class="eg-product-details__price mt-30">
                              <h4 class="eg-product-details__ammount"><del class="old-ammount">$210.00</del> $110.00</h4>
                           </div>
                        </div>
                        <div class="eg-product-details__quantity d-flex align-items-center mb-30 mt-30">
                           <h4 class="eg-product-details__quantity-title">QUANTITY</h4>
                           <div class="eg-product-details__quantity-box">
                              <button type="button" class="eg-product-details__quantity-btn minus decrement"><i class="fa fa-minus"></i></button>
                              <span class="counter">1</span>
                              <button type="button" class="eg-product-details__quantity-btn plus increment"><i class="fa fa-plus"></i></button>
                           </div>
                           <div class="eg-product-details__button">
                              <a href="cart.html" class="eg-btn"><span>Add to Cart</span></a>
                           </div>
                        </div>
                        <div class="eg-product-details__bottom mb-30">
                           <div class="eg-product-details__sku">
                              <b>sku :</b><span>QZX8VGA</span>
                           </div>
                           <div class="eg-product-details__categories">
                              <b>Categories :</b>
                              <span><a href="#">Nutrition</a></span>
                           </div>
                           <div class="eg-product-details__tags">
                              <b>Tags :</b>
                              <a href="#">Food,</a>
                              <a href="#">Organic</a>
                           </div>
                        </div>
                        <div class="eg-product-details__socials d-flex align-items-center">
                           <h4 class="eg-product-details__socials-title">Share with friends</h4>
                           <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                           <a href="https://facebook.com/"><i class="fab fa-facebook"></i></a>
                           <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                           <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                       </div>
                     </div>
                  </div>
               </div>
               <div class="eg-review__wrap mt-50">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="eg-review__wrapper">
                           <ul class="nav nav-pills mb-40" id="pills-tab" role="tablist">
                              <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Descriptions</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Reviews</button>
                              </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                              </div>
                              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                 <div class="postbox-comment-wrapper">
                                    <div class="row">
                                       <div class="col-xl-8 col-lg-10">
                                          <div class="eg-postbox__comment eg-review__box">
                                             <ul class="mb-60">
                                                <li>
                                                   <div class="eg-postbox__comment-box d-flex align-items-center">
                                                      <div class="eg-postbox__comment-avater">
                                                         <img src="assets/img/blog/blog-comment-01.png" alt="">
                                                      </div>
                                                      <div class="eg-postbox__comment-content">
                                                         <div class="eg-postbox__comment-header mb-5 d-flex justify-content-between">
                                                            <div class="eg-postbox__comment-author">
                                                               <p class="eg-postbox__comment-name">Jared Smith</p>
                                                               <span class="eg-postbox__comment-meta">February 13, 2023</span>
                                                            </div>
                                                            <div class="eg-postbox__comment-reply">
                                                               <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                                               <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                                               <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                                               <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                                               <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                                            </div>
                                                         </div>
                                                         <p> As a small business owner, I need to stay organized and keep track of a lot of moving parts. That's why I was thrilled to discover GOCO, With its robust project management features.</p>
                                                      </div>
                                                   </div>
                                                   <ul class="children mt-45">
                                                      <li>
                                                         <div class="eg-postbox__comment-box d-flex align-items-center">
                                                            <div class="eg-postbox__comment-avater">
                                                               <img src="assets/img/blog/blog-comment-02.png" alt="">
                                                            </div>
                                                            <div class="eg-postbox__comment-content">
                                                               <div class="eg-postbox__comment-header mb-5 d-flex justify-content-between">
                                                                  <div class="eg-postbox__comment-author">
                                                                     <p class="eg-postbox__comment-name">John Boyega</p>
                                                                     <span class="eg-postbox__comment-meta">February 15, 2023</span>
                                                                  </div>
                                                                  <div class="eg-postbox__review">
                                                                     <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                                                     <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                                                     <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                                                     <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                                                     <span><img src="assets/img/icon/rating-star.svg" alt="rating-star"></span>
                                                                  </div>
                                                               </div>
                                                               <p> I've always struggled with staying motivated when it comes to fitness, but GOCO has changed everything. The app's personalized workout plans and easy-to-follow.</p>
                                                            </div>
                                                         </div>
                                                      </li>
                                                   </ul>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="eg-postbox__form eg-review__box">
                                             <div class="eg-postbox__form-text">
                                                <h4 class="eg-postbox__title">Leave A Review</h4>
                                                <span>Your email address will not be published. Required fields are marked *</span>
                                             </div>
                                             <div class="eg-review__rating mt-25 mb-25">
                                                <span>Your Rating *</span>
                                                <div class="eg-review__rating-icon">
                                                   <span>
                                                      <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.9999 18.26L4.94691 22.208L6.52191 14.28L0.586914 8.792L8.61391 7.84L11.9999 0.5L15.3859 7.84L23.4129 8.792L17.4779 14.28L19.0529 22.208L11.9999 18.26ZM11.9999 15.968L16.2469 18.345L15.2979 13.572L18.8709 10.267L14.0379 9.694L11.9999 5.275L9.96191 9.695L5.12891 10.267L8.70191 13.572L7.75291 18.345L11.9999 15.968Z" fill="currentColor"></path>
                                                      </svg>
                                                   </span>
                                                   <span>
                                                      <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.9999 18.26L4.94691 22.208L6.52191 14.28L0.586914 8.792L8.61391 7.84L11.9999 0.5L15.3859 7.84L23.4129 8.792L17.4779 14.28L19.0529 22.208L11.9999 18.26ZM11.9999 15.968L16.2469 18.345L15.2979 13.572L18.8709 10.267L14.0379 9.694L11.9999 5.275L9.96191 9.695L5.12891 10.267L8.70191 13.572L7.75291 18.345L11.9999 15.968Z" fill="currentColor"></path>
                                                      </svg>
                                                   </span>
                                                   <span>
                                                      <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.9999 18.26L4.94691 22.208L6.52191 14.28L0.586914 8.792L8.61391 7.84L11.9999 0.5L15.3859 7.84L23.4129 8.792L17.4779 14.28L19.0529 22.208L11.9999 18.26ZM11.9999 15.968L16.2469 18.345L15.2979 13.572L18.8709 10.267L14.0379 9.694L11.9999 5.275L9.96191 9.695L5.12891 10.267L8.70191 13.572L7.75291 18.345L11.9999 15.968Z" fill="currentColor"></path>
                                                      </svg>
                                                   </span>
                                                   <span>
                                                      <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.9999 18.26L4.94691 22.208L6.52191 14.28L0.586914 8.792L8.61391 7.84L11.9999 0.5L15.3859 7.84L23.4129 8.792L17.4779 14.28L19.0529 22.208L11.9999 18.26ZM11.9999 15.968L16.2469 18.345L15.2979 13.572L18.8709 10.267L14.0379 9.694L11.9999 5.275L9.96191 9.695L5.12891 10.267L8.70191 13.572L7.75291 18.345L11.9999 15.968Z" fill="currentColor"></path>
                                                      </svg>
                                                   </span>
                                                   <span>
                                                      <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.9999 18.26L4.94691 22.208L6.52191 14.28L0.586914 8.792L8.61391 7.84L11.9999 0.5L15.3859 7.84L23.4129 8.792L17.4779 14.28L19.0529 22.208L11.9999 18.26ZM11.9999 15.968L16.2469 18.345L15.2979 13.572L18.8709 10.267L14.0379 9.694L11.9999 5.275L9.96191 9.695L5.12891 10.267L8.70191 13.572L7.75291 18.345L11.9999 15.968Z" fill="currentColor"></path>
                                                      </svg>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="eg-postbox__form-wrapper mt-25">
                                                <form action="#">
                                                   <div class="row">
                                                      <div class="col-lg-6">
                                                         <div class="eg-postbox__form-input mb-20">
                                                            <label for="name"> Name </label>
                                                            <input type="text" id="name" placeholder="lawsan Dowson" required="">
                                                         </div>
                                                      </div>
                                                      <div class="col-lg-6">
                                                         <div class="eg-postbox__form-input mb-20">
                                                            <label for="email"> email </label>
                                                            <input type="email" id="email" placeholder="alma.lawson@example.com" required="">
                                                         </div>
                                                      </div>
                                                      <div class="col-lg-12">
                                                         <div class="eg-postbox__form-input message mb-20">
                                                            <label for="message"> message </label>
                                                            <textarea name="message" id="message" placeholder="Write Your Review" spellcheck="false"></textarea>
                                                         </div>
                                                      </div>
                                                      <div class="col-lg-12">
                                                         <div class="eg-postbox__form-checkbox d-flex mb-20 eg-checkout__check-box">
                                                            <input class="mr-10" type="checkbox" id="checkbox">
                                                            <label for="checkbox">Save my name, email, and website in this browser for the next time I comment.</label>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <button type="submit" class="eg-postbox__form-btn eg-btn">
                                                      Post Your Review
                                                      <span>
                                                         <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 24 24" style="enable-background: new 0 0 512 512" xml:space="preserve" class="">
                                                            <g>
                                                               <path d="M9 20a1 1 0 0 1-.707-1.707L14.586 12 8.293 5.707a1 1 0 0 1 1.414-1.414l7 7a1 1 0 0 1 0 1.414l-7 7A1 1 0 0 1 9 20z" data-original="#000000"></path>
                                                            </g>
                                                         </svg>
                                                      </span>
                                                   </button>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- product-single-end -->

          <!-- product area -->
          <section class="product__area eg-product__bg fix">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="eg-section text-center">
                        <h2 class="eg-section__title mb-60">Similar Products</h2>
                     </div>
                  </div>
               </div>
               <div class="swiper-container eg-product-3__active">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide eg-product__item text-center mb-45">
                        <div class="eg-product__thumb">
                           <a href="shop-details.html"><img src="assets/img/product/product-1.png" alt="product-thumb"></a>
                        </div>
                        <div class="eg-product__content">
                           <h4 class="eg-product__title"><a href="shop.html">Protein Powder 2kg</a></h4>
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
                     <div class="swiper-slide eg-product__item text-center mb-45">
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
                     <div class="swiper-slide eg-product__item text-center mb-45">
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
                     <div class="swiper-slide eg-product__item text-center mb-45">
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
               </div>
            </div>
         </section>
         <!-- product area end -->

      </main>

      <!-- footer area -->
      @endsection
