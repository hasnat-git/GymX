@extends('frontend.layouts.main')
@section('title', 'Blog')
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
                              <h2 class="title">Blog Details</h2>
                           </div>
                        </div>
                        <div class="eg-breadcrumb__content">
                           <h2 class="title">Single Blog</h2>
                           {{-- <nav aria-label="breadcrumb">
                              <ol class="eg-breadcrumb__list">
                                 <li class="eg-breadcrumb__item"><a href="index-2.html">Home</a></li>
                                 <li class="eg-breadcrumb__item active" aria-current="page">Blog Details</li>
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

      <!-- blog-details -->
      <section class="eg-postbox__area mb-60">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-10">
                  <div class="eg-postbox__main-wrapper">
                     <div class="eg-postbox__wrapper mb-60">


                        <article class="eg-postbox__item">
                           <div class="eg-postbox__thumb w-img">
                              <img src="/backend/images/blog_posts/{{$blog->blog_image}}" alt="img">
                           </div>
                           <div class="eg-postbox__details">
                              <div class="eg-postbox__meta meta-2 mb-15">
                                 <span>
                                    <img src="/backend/images/blog_authors/{{$blog->author_image}}" width="40px" height="40px" alt="img">{{ $blog->author}}
                                 </span>
                                 <span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="current" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M11.75 2.25H14.75C14.9489 2.25 15.1397 2.32902 15.2803 2.46967C15.421 2.61032 15.5 2.80109 15.5 3V15C15.5 15.1989 15.421 15.3897 15.2803 15.5303C15.1397 15.671 14.9489 15.75 14.75 15.75H1.25C1.05109 15.75 0.860322 15.671 0.71967 15.5303C0.579018 15.3897 0.5 15.1989 0.5 15V3C0.5 2.80109 0.579018 2.61032 0.71967 2.46967C0.860322 2.32902 1.05109 2.25 1.25 2.25H4.25V0.75H5.75V2.25H10.25V0.75H11.75V2.25ZM14 8.25H2V14.25H14V8.25ZM10.25 3.75H5.75V5.25H4.25V3.75H2V6.75H14V3.75H11.75V5.25H10.25V3.75ZM3.5 9.75H5V11.25H3.5V9.75ZM7.25 9.75H8.75V11.25H7.25V9.75ZM11 9.75H12.5V11.25H11V9.75Z" fill="current"/>
                                    </svg> {{ $blog->updated_on}}
                                 </span>
                                 {{-- <span>
                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="current" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M10.5 15.875L8.4 13.25H4.5C4.30109 13.25 4.11032 13.171 3.96967 13.0303C3.82902 12.8897 3.75 12.6989 3.75 12.5V4.32725C3.75 4.12834 3.82902 3.93757 3.96967 3.79692C4.11032 3.65627 4.30109 3.57725 4.5 3.57725H16.5C16.6989 3.57725 16.8897 3.65627 17.0303 3.79692C17.171 3.93757 17.25 4.12834 17.25 4.32725V12.5C17.25 12.6989 17.171 12.8897 17.0303 13.0303C16.8897 13.171 16.6989 13.25 16.5 13.25H12.6L10.5 15.875ZM11.8792 11.75H15.75V5.07725H5.25V11.75H9.12075L10.5 13.4735L11.8792 11.75ZM1.5 0.5H14.25V2H2.25V10.25H0.75V1.25C0.75 1.05109 0.829018 0.860322 0.96967 0.71967C1.11032 0.579018 1.30109 0.5 1.5 0.5V0.5Z" fill="current"/>
                                    </svg> (04) Comments
                                 </span> --}}
                                 {{-- <span>
                                    <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M9.5 2.5C9.15625 2.53125 8.8125 2.5625 8.5 2.65625C8.65625 2.90625 8.71875 3.21875 8.75 3.5C8.75 4.46875 7.9375 5.25 7 5.25C6.6875 5.25 6.375 5.1875 6.15625 5.03125C6.0625 5.34375 6 5.65625 6 6C6 7.9375 7.5625 9.5 9.5 9.5C11.4375 9.5 13 7.9375 13 6C13 4.09375 11.4375 2.53125 9.5 2.53125V2.5ZM18.375 5.5625C16.6875 2.25 13.3125 0 9.5 0C5.65625 0 2.28125 2.25 0.59375 5.5625C0.53125 5.6875 0.5 5.84375 0.5 6C0.5 6.1875 0.53125 6.34375 0.59375 6.46875C2.28125 9.78125 5.65625 12 9.5 12C13.3125 12 16.6875 9.78125 18.375 6.46875C18.4375 6.34375 18.4688 6.1875 18.4688 6.03125C18.4688 5.84375 18.4375 5.6875 18.375 5.5625ZM9.5 10.5C6.40625 10.5 3.5625 8.78125 2.0625 6C3.5625 3.21875 6.40625 1.5 9.5 1.5C12.5625 1.5 15.4062 3.21875 16.9062 6C15.4062 8.78125 12.5625 10.5 9.5 10.5Z" fill="current" />
                                    </svg> 1,526 Viewers
                                 </span> --}}
                              </div>
                              <h3 class="eg-postbox__title mb-50">  {{ $blog->title}}</h3>
                              <div class="eg-postbox__post-text">
                                 <p> {{ $blog->details}} </p>
                              </div>
                              <div class="eg-postbox__quote text-center mt-65">
                                 <blockquote>
                                    <span class="quote-icon mb-20">
                                       <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.93353 16.2269L2.05958 16.0865C0.979887 16.0607 0.122588 15.1614 0.148388 14.0817L0.298682 7.79222C0.314194 7.14307 0.417605 6.49856 0.606567 5.87683C0.614856 5.85025 0.62441 5.82401 0.635861 5.79846L2.64353 1.33737C2.82783 0.803532 3.34086 0.444313 3.90875 0.457883L6.02352 0.508418C6.21856 0.513078 6.40131 0.604495 6.52136 0.757869C6.64206 0.911257 6.68768 1.11036 6.6455 1.30099L5.53261 6.37399L8.16747 6.43695C9.24717 6.46275 10.1045 7.36203 10.0787 8.44172L9.93831 14.3157C9.9125 15.3954 9.01323 16.2527 7.93353 16.2269ZM19.0273 16.4927L13.1534 16.3523C12.0737 16.3265 11.2164 15.4272 11.2422 14.3475L11.3925 8.05803C11.408 7.40824 11.5114 6.76373 11.7004 6.14264C11.7083 6.11605 11.7182 6.08982 11.7297 6.06426L13.7373 1.60286C13.9219 1.06935 14.4353 0.710139 15.0029 0.723701L17.1173 0.774229C17.3124 0.778889 17.4948 0.870299 17.6152 1.02368C17.7355 1.17706 17.7812 1.37616 17.7393 1.5668L16.6267 6.63981L19.2613 6.70276C20.341 6.72856 21.1983 7.62784 21.1725 8.70753L21.0321 14.5815C21.0063 15.6612 20.107 16.5185 19.0273 16.4927Z" fill="#EC3047" />
                                       </svg>
                                    </span>
                                    <h3 class="quote">There are no secrets to success. It is the result of preparation, <br> hard work, and learning from failure.</h3>
                                    <span>Robert Vibes</span>
                                 </blockquote>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="eg-postbox__wrapper mb-60">
                        {{-- <article class="eg-postbox__item">
                           <div class="eg-postbox__thumb">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="eg-postbox__thumb-sm w-img sm-mb-30 mb-30">
                                       <img src="assets/img/blog/blog-details-02.png" alt="img">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="eg-postbox__thumb-sm w-img mb-30">
                                       <img src="assets/img/blog/blog-details-03.png" alt="img">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="eg-postbox__details">
                              <div class="eg-postbox__post-text mt-10 mb-55">
                                 <p> Designers should also focus on developing skills in areas such as user experience, user interface design, and data analysis, as these are becoming increasingly important in today's digital world. Additionally, designers should have a strong understanding of human psychology and behavior to create designs that are not users. </p>
                                 <p> Moreover, designers should embrace sustainability and ethical design practices, as the world is becoming increasingly conscious of environmental and social issues. They should strive to create designs that are environmentally friendly, socially responsible, and inclusive of all individuals. </p>
                                 <p> In summary, designers can prepare for the future by being adaptable, continuously learning, developing new skills, understanding human psychology, and embracing sustainability and ethical design practices</p>
                              </div>
                              <div class="eg-postbox__share pb-60">
                                 <div class="row">
                                    <div class="col-xl-6 col-lg-7">
                                       <div class="eg-postbox__tag mb-30">
                                          <a href="#">marketing</a>
                                          <a href="#">mobile</a>
                                          <a href="#">digital</a>
                                       </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-5">
                                       <div class="eg-postbox__social text-lg-end mb-30">
                                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                                          <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                          <a href="#"><i class="fab fa-twitter"></i></a>
                                          <a href="#"><i class="fas fa-share-alt"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="eg-postbox__quote text-center mt-50 mb-70">
                                 <blockquote>
                                    <div class="mb-25">
                                       <img src="assets/img/blog/blog-qoute.png" alt="img">
                                    </div>
                                    <h4 class="name">About Penny Lane</h4>
                                    <p>The Founder and Creative Director of GOCO, a digital creative studio <br> in USA, has over 15 years of experience as an award-winning Creative <br> Director/Art for clients.</p>
                                 </blockquote>
                              </div>
                              <div class="eg-postbox__post">
                                 <div class="row align-items-center">
                                    <div class="col-lg-5  mb-30">
                                       <div class="eg-postbox__post-prev text-lg-end">
                                          <div class="eg-postbox__post-content text-right">
                                             <h4 class="eg-postbox__post-title"><a href="blog-details.html">Visiting the Ads of the World off the mark blog is like</a></h4>
                                             <span>FEBRUARY 20,2023</span>
                                          </div>
                                          <div class="eg-postbox__post-arrow prev">
                                             <a href="blog-details.html">
                                                <span>
                                                   <svg width="22" height="16" viewBox="0 0 22 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M1.04108 7.18181C0.650553 7.57233 0.650553 8.2055 1.04108 8.59602L7.40504 14.96C7.79556 15.3505 8.42873 15.3505 8.81925 14.96C9.20978 14.5695 9.20978 13.9363 8.81925 13.5458L3.1624 7.88892L8.81925 2.23206C9.20978 1.84154 9.20978 1.20837 8.81925 0.817848C8.42873 0.427324 7.79556 0.427324 7.40504 0.817848L1.04108 7.18181ZM21.5186 6.88892L1.74818 6.88892V8.88892L21.5186 8.88892V6.88892Z" />
                                                   </svg>
                                                </span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-1  mb-30 text-center">
                                       <a href="#" class="tg-blog-nav-filter">
                                          <span>
                                             <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0H0V8H8V0ZM8 10H0V18H8V10ZM10 0H18V8H10V0ZM18 10H10V18H18V10Z" fill="#EC3047" />
                                             </svg>
                                          </span>
                                       </a>
                                    </div>
                                    <div class="col-lg-5 mb-30">
                                       <div class="eg-postbox__post-next">
                                          <div class="eg-postbox__post-content">
                                             <h4 class="eg-postbox__post-title"><a href="blog-details.html">How to Create an Effective Design fundamental</a></h4>
                                             <span class="date">FEBRUARY 20,2023</span>
                                          </div>
                                          <div class="eg-postbox__post-arrow next">
                                             <a href="blog-details.html">
                                                <span>
                                                   <svg width="21" height="16" viewBox="0 0 21 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.2929L14.3431 0.928933C13.9526 0.538409 13.3195 0.538409 12.9289 0.928933C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM-8.74228e-08 9L20 9L20 7L8.74228e-08 7L-8.74228e-08 9Z" />
                                                   </svg>
                                                </span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="eg-postbox__rp mt-55">
                                 <h2 class="eg-postbox__title mb-50">You also might like</h2>
                                 <div class="row">
                                    <div class="col-md-6 mb-30">
                                       <div class="eg-postbox__rp-thumb w-img">
                                          <img src="assets/img/blog/blog-rp-01.png" alt="img">
                                       </div>
                                       <div class="eg-postbox__rp-content">
                                          <h4 class="rp-title"> <a href="blog-details.html"> How to Create an Effective Design Portfolio </a> </h4>
                                          <p> Make sure to include a concise summary that covers the scope of your work your client,.</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 mb-30">
                                       <div class="eg-postbox__rp-thumb w-img">
                                          <img src="assets/img/blog/blog-rp-02.png" alt="img">
                                       </div>
                                       <div class="eg-postbox__rp-content">
                                          <h4 class="rp-title"> <a href="blog-details.html"> Create a Landing Page That Performs Great </a> </h4>
                                          <p> A good landing page should have a strong offer and be able to explain why the offer is valuable.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </article> --}}
                     </div>
                  </div>
                  <div class="eg-postbox__comment">
                     <h4 class="eg-postbox__title mb-50">Comments <span> &lt;2&gt; </span></h4>
                     <ul>
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
                                       <a href="#">Reply</a>
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
                                          <div class="eg-postbox__comment-reply">
                                             <a href="#">Reply</a>
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
                  <div class="eg-postbox__form">
                     <div class="eg-postbox__form-text">
                        <h4 class="eg-postbox__title">Leave A Reply</h4>
                        <span>Your email address will not be published. Required fields are marked *</span>
                     </div>
                     <div class="eg-postbox__form-wrapper mt-25">
                        <form action="#">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="eg-postbox__form-input mb-20">
                                    <label for="name"> Name </label>
                                    <input type="text" id="name" placeholder="lawsan Dowson" required>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="eg-postbox__form-input mb-20">
                                    <label for="email"> email </label>
                                    <input type="email" id="email" placeholder="alma.lawson@example.com" required>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="eg-postbox__form-input mb-20">
                                    <label for="website"> website </label>
                                    <input type="email" id="website" placeholder="bodex.webclear.com" required>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="eg-postbox__form-input message mb-20">
                                    <label for="message"> message </label>
                                    <textarea name="message" id="message" placeholder="Simultaneously we had a problem" spellcheck="false"></textarea>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="eg-postbox__form-checkbox eg-checkout__check-box d-flex mb-20">
                                    <input class="mr-10" type="checkbox" id="checkbox">
                                    <label for="checkbox">Save my name, email, and website in this browser for the next time I comment.</label>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="eg-postbox__form-btn eg-btn">
                              Post Comment
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
      </section>
       <!-- blog-details-end -->

   </main>

   <!-- footer area -->
      <footer class="scene fix">
         <div class="eg-newsletter__bg">
            <div class="container">
               <div class="eg-newsletter__wrap">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <div class="eg-newsletter__content">
                           <h4 class="eg-newsletter__title">Subscribe Newsletters</h4>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="eg-newsletter__form">
                           <form action="#">
                              <input type="email" placeholder="Enter your email">
                              <button class="eg-btn">Subcribe Now</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="eg-footer__bg theme-bg">
            <div class="eg-footer__main">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="offset-lg-1 col-lg-4">
                        <div class="eg-footer__widget mb-35">
                           <div class="eg-footer__widget_link eg-line">
                              <a href="/shop">product</a>
                              <a href="/contact">Contact</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="eg-footer__widget text-center mb-35">
                           {{-- <div class="eg-footer__widget_logo">
                              <a href="index-2.html"><img src="assets/img/logo/logo5.png" alt="logo"></a>
                           </div> --}}
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="eg-footer__widget text-lg-end mb-35">
                           <div class="eg-footer__widget_social">
                              <a href="#"><i class="fab fa-facebook-square"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-vimeo-v"></i></a>
                              <a href="#"><i class="fab fa-youtube"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="eg-footer__bottom">
               <div class="container">
                  <div class="eg-footer__bottom_border">
                     <div class="row">
                        <div class="offset-lg-1 col-lg-5">
                           <div class="eg-footer__copyright mb-30">
                              <span>© Copyrights, 2023 <a href="" target="_blank">GymX</a>. All Right Recived</span>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <div class="eg-footer__terms eg-line text-lg-end mb-30">
                              <a href="#">Terms of Service</a>
                              <a href="#">Privacy Policy</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <h5 class="eg-footer__opacity-text d-none d-lg-block" style="font-size: 170px;">Stay With Us</h5>




            <div class="eg-footer__shape-1">
               <img class="layer" data-depth="0.3" src="assets/img/shape/footer-shape-02.png" alt="footer-shape">
            </div>
            <div class="eg-footer__shape-2 scene-y">
               <img class="layer" data-depth="3" src="assets/img/shape/footer-shape-03.png" alt="footer-shape">
            </div>
         </div>
      </footer>
   <!-- footer-area-end -->

   <!-- JS here -->
      <script src="assets/js/vendor/jquery.js"></script>
      <script src="assets/js/vendor/waypoints.js"></script>
      <script src="assets/js/bootstrap-bundle.js"></script>
      <script src="assets/js/swiper-bundle.js"></script>
      <script src="assets/js/magnific-popup.js"></script>
      <script src="assets/js/nice-select.js"></script>
      <script src="assets/js/odometer.min.js"></script>
      <script src="assets/js/jquery.appear.js"></script>
      <script src="assets/js/jquery.odometer.min.js"></script>
      <script src="assets/js/range-slider.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/parallax.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/main.js"></script>

</body>

</html>
@endsection
