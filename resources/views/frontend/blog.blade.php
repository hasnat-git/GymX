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
                              {{-- <h2 class="title">Blog & Article</h2> --}}
                           </div>
                        </div>
                        <div class="eg-breadcrumb__content">
                           <h2 class="title"> read Article</h2>
                           {{-- <nav aria-label="breadcrumb">
                              <ol class="eg-breadcrumb__list">
                                 <li class="eg-breadcrumb__item"><a href="index-2.html">Home</a></li>
                                 <li class="eg-breadcrumb__item active" aria-current="page">Blog</li>
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

      <!-- blog start -->
      <section class="eg-postbox__area mb-60">
         <div class="eg-postbox">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-8">
                     <div class="eg-postbox__wrapper">
                        @foreach ($blog as $blog)


                        <article class="eg-postbox__item text-center mb-60">
                           <div class="eg-postbox__thumb w-img">
                              <a href="/blog-details{{ $blog->id }}">
                                 <img src="/backend/images/blog_posts/{{$blog->blog_image}}" alt="img">
                              </a>
                           </div>
                           <div class="eg-postbox__content mt-35">
                              <div class="eg-postbox__meta mb-15">
                                 <span>
                                    <a href="#">
                                       <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <img src="/backend/images/blog_authors/{{$blog->author_image}}"  class="rounded-circle border border-primary" width="30px" height="30px" alt="Image Not Found">
                                       </svg>{{ $blog->author }}
                                    </a>
                                 </span>
                                 <span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="current" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M11.75 2.25H14.75C14.9489 2.25 15.1397 2.32902 15.2803 2.46967C15.421 2.61032 15.5 2.80109 15.5 3V15C15.5 15.1989 15.421 15.3897 15.2803 15.5303C15.1397 15.671 14.9489 15.75 14.75 15.75H1.25C1.05109 15.75 0.860322 15.671 0.71967 15.5303C0.579018 15.3897 0.5 15.1989 0.5 15V3C0.5 2.80109 0.579018 2.61032 0.71967 2.46967C0.860322 2.32902 1.05109 2.25 1.25 2.25H4.25V0.75H5.75V2.25H10.25V0.75H11.75V2.25ZM14 8.25H2V14.25H14V8.25ZM10.25 3.75H5.75V5.25H4.25V3.75H2V6.75H14V3.75H11.75V5.25H10.25V3.75ZM3.5 9.75H5V11.25H3.5V9.75ZM7.25 9.75H8.75V11.25H7.25V9.75ZM11 9.75H12.5V11.25H11V9.75Z" fill="current"/>
                                    </svg>{{ $blog->updated_on }}
                                 </span>
                                 {{-- <span>
                                    <a href="#">
                                       <svg width="18" height="16" viewBox="0 0 18 16" fill="current" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.5 15.875L8.4 13.25H4.5C4.30109 13.25 4.11032 13.171 3.96967 13.0303C3.82902 12.8897 3.75 12.6989 3.75 12.5V4.32725C3.75 4.12834 3.82902 3.93757 3.96967 3.79692C4.11032 3.65627 4.30109 3.57725 4.5 3.57725H16.5C16.6989 3.57725 16.8897 3.65627 17.0303 3.79692C17.171 3.93757 17.25 4.12834 17.25 4.32725V12.5C17.25 12.6989 17.171 12.8897 17.0303 13.0303C16.8897 13.171 16.6989 13.25 16.5 13.25H12.6L10.5 15.875ZM11.8792 11.75H15.75V5.07725H5.25V11.75H9.12075L10.5 13.4735L11.8792 11.75ZM1.5 0.5H14.25V2H2.25V10.25H0.75V1.25C0.75 1.05109 0.829018 0.860322 0.96967 0.71967C1.11032 0.579018 1.30109 0.5 1.5 0.5V0.5Z" fill="current"/>
                                       </svg> (04) Comments
                                    </a>
                                 </span> --}}
                              </div>
                              <h3 class="eg-postbox__title blog-title text-center">
                                 <a href="/blog-details{{ $blog->id }}">
                                    {{ $blog->title }}
                                 </a>
                              </h3>
                              {{-- <div class="eg-postbox__text mt-20 mb-40">
                                <p >{{ $blog->details }}</p>
                            </div> --}}
                            <div class="eg-postbox__text mt-20 mb-40">
                                <p>{{ Str::limit($blog->details, 150) }}</p> <!-- 100 is the character limit -->
                            </div>

                              <div class="eg-postbox__btn">
                                 <a href="/blog-details{{ $blog->id }}" class="eg-btn read-btn">
                                    read more
                                    <span>
                                       <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 24 24" style="enable-background: new 0 0 512 512" xml:space="preserve" class="gray-svg">
                                          <g><path d="M9 20a1 1 0 0 1-.707-1.707L14.586 12 8.293 5.707a1 1 0 0 1 1.414-1.414l7 7a1 1 0 0 1 0 1.414l-7 7A1 1 0 0 1 9 20z" data-original="#000000"></path> </g>
                                       </svg>
                                    </span>
                                 </a>
                              </div>
                           </div>
                        </article>
                        @endforeach
                        {{-- <article class="eg-postbox__item text-center mb-60">
                           <div class="eg-postbox__thumb w-img">
                              <a href="blog-details.html">
                                 <img src="assets/img/blog/postbox-02.png" alt="img">
                              </a>
                           </div>
                           <div class="eg-postbox__content mt-35">
                              <div class="eg-postbox__meta mb-15">
                                 <span>
                                    <a href="#">
                                       <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <img src="/backend/images/logo4.jpg" class="rounded-circle border border-primary" width="30px" height="30px" alt="Image Not Found">
                                       </svg>Alextina
                                    </a>
                                 </span>
                                 <span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="current" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M11.75 2.25H14.75C14.9489 2.25 15.1397 2.32902 15.2803 2.46967C15.421 2.61032 15.5 2.80109 15.5 3V15C15.5 15.1989 15.421 15.3897 15.2803 15.5303C15.1397 15.671 14.9489 15.75 14.75 15.75H1.25C1.05109 15.75 0.860322 15.671 0.71967 15.5303C0.579018 15.3897 0.5 15.1989 0.5 15V3C0.5 2.80109 0.579018 2.61032 0.71967 2.46967C0.860322 2.32902 1.05109 2.25 1.25 2.25H4.25V0.75H5.75V2.25H10.25V0.75H11.75V2.25ZM14 8.25H2V14.25H14V8.25ZM10.25 3.75H5.75V5.25H4.25V3.75H2V6.75H14V3.75H11.75V5.25H10.25V3.75ZM3.5 9.75H5V11.25H3.5V9.75ZM7.25 9.75H8.75V11.25H7.25V9.75ZM11 9.75H12.5V11.25H11V9.75Z" fill="current"/>
                                    </svg> Dec 28, 2023
                                 </span>
                                 <span>
                                    <a href="#">
                                       <svg width="18" height="16" viewBox="0 0 18 16" fill="current" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.5 15.875L8.4 13.25H4.5C4.30109 13.25 4.11032 13.171 3.96967 13.0303C3.82902 12.8897 3.75 12.6989 3.75 12.5V4.32725C3.75 4.12834 3.82902 3.93757 3.96967 3.79692C4.11032 3.65627 4.30109 3.57725 4.5 3.57725H16.5C16.6989 3.57725 16.8897 3.65627 17.0303 3.79692C17.171 3.93757 17.25 4.12834 17.25 4.32725V12.5C17.25 12.6989 17.171 12.8897 17.0303 13.0303C16.8897 13.171 16.6989 13.25 16.5 13.25H12.6L10.5 15.875ZM11.8792 11.75H15.75V5.07725H5.25V11.75H9.12075L10.5 13.4735L11.8792 11.75ZM1.5 0.5H14.25V2H2.25V10.25H0.75V1.25C0.75 1.05109 0.829018 0.860322 0.96967 0.71967C1.11032 0.579018 1.30109 0.5 1.5 0.5V0.5Z" fill="current"/>
                                       </svg> (04) Comments
                                    </a>
                                 </span>
                              </div>
                              <h3 class="eg-postbox__title">
                                 <a href="blog-details.html">
                                    Boost Your Health and Fitness Journey with XYZ Supplement: The Ultimate Game Changer
                                 </a>
                              </h3>
                              <div class="eg-postbox__text mt-20 mb-40">
                                 <p> This blog post will delve into the various benefits and features of the XYZ supplement. It will highlight how the supplement can enhance physical and mental performance, boost energy levels </p>
                              </div>
                              <div class="eg-postbox__btn">
                                 <a href="blog-details.html" class="eg-btn read-btn">
                                    read more
                                    <span>
                                       <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 24 24" style="enable-background: new 0 0 512 512" xml:space="preserve" class="gray-svg">
                                          <g><path d="M9 20a1 1 0 0 1-.707-1.707L14.586 12 8.293 5.707a1 1 0 0 1 1.414-1.414l7 7a1 1 0 0 1 0 1.414l-7 7A1 1 0 0 1 9 20z" data-original="#000000"></path> </g>
                                       </svg>
                                    </span>
                                 </a>
                              </div>
                           </div>
                        </article> --}}
                        {{-- <article class="eg-postbox__item text-center mb-60">
                           <div class="eg-postbox__thumb w-img">
                              <a href="blog-details.html">
                                 <img src="assets/img/blog/postbox-03.png" alt="img">
                              </a>
                           </div>
                           <div class="eg-postbox__content mt-35">
                              <div class="eg-postbox__meta mb-15">
                                 <span>
                                    <a href="#">
                                       <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <img src="/backend/images/logo4.jpg" class="rounded-circle border border-primary" width="30px" height="30px" alt="Image Not Found">
                                       </svg>Alextina
                                    </a>
                                 </span>
                                 <span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="current" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M11.75 2.25H14.75C14.9489 2.25 15.1397 2.32902 15.2803 2.46967C15.421 2.61032 15.5 2.80109 15.5 3V15C15.5 15.1989 15.421 15.3897 15.2803 15.5303C15.1397 15.671 14.9489 15.75 14.75 15.75H1.25C1.05109 15.75 0.860322 15.671 0.71967 15.5303C0.579018 15.3897 0.5 15.1989 0.5 15V3C0.5 2.80109 0.579018 2.61032 0.71967 2.46967C0.860322 2.32902 1.05109 2.25 1.25 2.25H4.25V0.75H5.75V2.25H10.25V0.75H11.75V2.25ZM14 8.25H2V14.25H14V8.25ZM10.25 3.75H5.75V5.25H4.25V3.75H2V6.75H14V3.75H11.75V5.25H10.25V3.75ZM3.5 9.75H5V11.25H3.5V9.75ZM7.25 9.75H8.75V11.25H7.25V9.75ZM11 9.75H12.5V11.25H11V9.75Z" fill="current"/>
                                    </svg> Dec 28, 2023
                                 </span>
                                 <span>
                                    <a href="#">
                                       <svg width="18" height="16" viewBox="0 0 18 16" fill="current" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.5 15.875L8.4 13.25H4.5C4.30109 13.25 4.11032 13.171 3.96967 13.0303C3.82902 12.8897 3.75 12.6989 3.75 12.5V4.32725C3.75 4.12834 3.82902 3.93757 3.96967 3.79692C4.11032 3.65627 4.30109 3.57725 4.5 3.57725H16.5C16.6989 3.57725 16.8897 3.65627 17.0303 3.79692C17.171 3.93757 17.25 4.12834 17.25 4.32725V12.5C17.25 12.6989 17.171 12.8897 17.0303 13.0303C16.8897 13.171 16.6989 13.25 16.5 13.25H12.6L10.5 15.875ZM11.8792 11.75H15.75V5.07725H5.25V11.75H9.12075L10.5 13.4735L11.8792 11.75ZM1.5 0.5H14.25V2H2.25V10.25H0.75V1.25C0.75 1.05109 0.829018 0.860322 0.96967 0.71967C1.11032 0.579018 1.30109 0.5 1.5 0.5V0.5Z" fill="current"/>
                                       </svg> (04) Comments
                                    </a>
                                 </span>
                              </div>
                              <h3 class="eg-postbox__title">
                                 <a href="blog-details.html">
                                    XYZ Supplement: The Secret Weapon for Optimal Wellness and Vitality
                                 </a>
                              </h3>
                              <div class="eg-postbox__text mt-20 mb-40">
                                 <p> This blog post will delve into the various benefits and features of the XYZ supplement. It will highlight how the supplement can enhance physical and mental performance, boost energy levels </p>
                              </div>
                              <div class="eg-postbox__btn">
                                 <a href="blog-details.html" class="eg-btn read-btn">
                                    read more
                                    <span>
                                       <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 24 24" style="enable-background: new 0 0 512 512" xml:space="preserve" class="gray-svg">
                                          <g><path d="M9 20a1 1 0 0 1-.707-1.707L14.586 12 8.293 5.707a1 1 0 0 1 1.414-1.414l7 7a1 1 0 0 1 0 1.414l-7 7A1 1 0 0 1 9 20z" data-original="#000000"></path> </g>
                                       </svg>
                                    </span>
                                 </a>
                              </div>
                           </div>
                        </article> --}}
                        {{-- <article class="eg-postbox__item text-center mb-60">
                           <div class="eg-postbox__thumb w-img">
                              <a href="blog-details.html">
                                 <img src="assets/img/blog/postbox-04.png" alt="img">
                              </a>
                           </div>
                           <div class="eg-postbox__content mt-35">
                              <div class="eg-postbox__meta mb-15">
                                 <span>
                                    <a href="#">

                                       <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">

                                        <img src="/backend/images/logo4.jpg" class="rounded-circle border border-primary" width="30px" height="30px" alt="Image Not Found">

                                       </svg>Alextina
                                    </a>
                                 </span>
                                 <span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="current" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M11.75 2.25H14.75C14.9489 2.25 15.1397 2.32902 15.2803 2.46967C15.421 2.61032 15.5 2.80109 15.5 3V15C15.5 15.1989 15.421 15.3897 15.2803 15.5303C15.1397 15.671 14.9489 15.75 14.75 15.75H1.25C1.05109 15.75 0.860322 15.671 0.71967 15.5303C0.579018 15.3897 0.5 15.1989 0.5 15V3C0.5 2.80109 0.579018 2.61032 0.71967 2.46967C0.860322 2.32902 1.05109 2.25 1.25 2.25H4.25V0.75H5.75V2.25H10.25V0.75H11.75V2.25ZM14 8.25H2V14.25H14V8.25ZM10.25 3.75H5.75V5.25H4.25V3.75H2V6.75H14V3.75H11.75V5.25H10.25V3.75ZM3.5 9.75H5V11.25H3.5V9.75ZM7.25 9.75H8.75V11.25H7.25V9.75ZM11 9.75H12.5V11.25H11V9.75Z" fill="current"/>
                                    </svg> Dec 28, 2023
                                 </span>
                                 <span>
                                    <a href="#">
                                       <svg width="18" height="16" viewBox="0 0 18 16" fill="current" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.5 15.875L8.4 13.25H4.5C4.30109 13.25 4.11032 13.171 3.96967 13.0303C3.82902 12.8897 3.75 12.6989 3.75 12.5V4.32725C3.75 4.12834 3.82902 3.93757 3.96967 3.79692C4.11032 3.65627 4.30109 3.57725 4.5 3.57725H16.5C16.6989 3.57725 16.8897 3.65627 17.0303 3.79692C17.171 3.93757 17.25 4.12834 17.25 4.32725V12.5C17.25 12.6989 17.171 12.8897 17.0303 13.0303C16.8897 13.171 16.6989 13.25 16.5 13.25H12.6L10.5 15.875ZM11.8792 11.75H15.75V5.07725H5.25V11.75H9.12075L10.5 13.4735L11.8792 11.75ZM1.5 0.5H14.25V2H2.25V10.25H0.75V1.25C0.75 1.05109 0.829018 0.860322 0.96967 0.71967C1.11032 0.579018 1.30109 0.5 1.5 0.5V0.5Z" fill="current"/>
                                       </svg> (04) Comments
                                    </a>
                                 </span>
                              </div>
                              <h3 class="eg-postbox__title">
                                 <a href="blog-details.html"> XYZ Supplement: Your Natural Solution for Joint Health and Mobility </a>
                              </h3>
                              <div class="eg-postbox__text mt-20 mb-40">
                                 <p> This blog post will delve into the various benefits and features of the XYZ supplement. It will highlight how the supplement can enhance physical and mental performance, boost energy levels </p>
                              </div>
                              <div class="eg-postbox__btn">
                                 <a href="blog-details.html" class="eg-btn read-btn">
                                    read more
                                    <span>
                                       <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 24 24" style="enable-background: new 0 0 512 512" xml:space="preserve" class="gray-svg">
                                          <g><path d="M9 20a1 1 0 0 1-.707-1.707L14.586 12 8.293 5.707a1 1 0 0 1 1.414-1.414l7 7a1 1 0 0 1 0 1.414l-7 7A1 1 0 0 1 9 20z" data-original="#000000"></path> </g>
                                       </svg>
                                    </span>
                                 </a>
                              </div>
                           </div>
                        </article> --}}
                     </div>
                     <div class="eg-postbox__pagination mb-60 text-center">
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
                  {{-- <div class="col-lg-4 col-md-10">
                     <div class="eg-sidebar__wrapper">
                        <div class="eg-sidebar__widget mb-60">
                           <div class="eg-sidebar__widget-title">
                              <h4 class="title">Search here</h4>
                           </div>
                           <div class="eg-sidebar__widget-content">
                           </div>
                           <div class="eg-sidebar__search">
                              <form action="#">
                                 <div class="eg-sidebar__search-input">
                                    <input type="text" placeholder="Search post">
                                 </div>
                                 <button class="eg-sidebar__search-btn">
                                    <i class="fas fa-search"></i>
                                 </button>
                              </form>
                           </div>
                        </div>
                        <div class="eg-sidebar__widget mb-60">
                           <div class="eg-sidebar__widget-title">
                              <h4 class="title">Explore Categories</h4>
                           </div>
                           <div class="eg-sidebar__widget-content">
                              <ul>
                                 <li><a href="blog-details.html">Protein <span>03</span></a></li>
                                 <li><a href="blog-details.html">Muscle Builders <span>07</span></a></li>
                                 <li><a href="blog-details.html">Nutrition <span>09</span></a></li>
                                 <li><a href="blog-details.html">Uncategorized <span>01</span></a></li>
                                 <li><a href="blog-details.html">Body & Fit <span>00</span></a></li>
                                 <li><a href="blog-details.html">Recovery <span>26</span></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="eg-sidebar__widget mb-60">
                           <div class="eg-sidebar__widget-title">
                              <h4 class="title">page</h4>
                           </div>
                           <div class="eg-sidebar__widget-content widget-page">
                              <ul>
                                 <li><a href="blog-details.html">Protein <span><i class="fas fa-angle-right"></i></span></a></li>
                                 <li><a href="blog-details.html">Nutrition <span><i class="fas fa-angle-right"></i></span></a></li>
                                 <li><a href="blog-details.html">Body & Fit <span><i class="fas fa-angle-right"></i></span></a></li>
                                 <li><a href="blog-details.html">Fat Burners <span><i class="fas fa-angle-right"></i></span></a></li>
                                 <li><a href="blog-details.html">Protein <span><i class="fas fa-angle-right"></i></span></a></li>
                                 <li><a href="blog-details.html">Muscle Builders <span><i class="fas fa-angle-right"></i></span></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="eg-sidebar__widget mb-60">
                           <div class="eg-sidebar__widget-title">
                              <h4 class="title">Recent Posts</h4>
                           </div>
                           <div class="eg-sidebar__widget-content">
                              <div class="eg-rc">
                                 <div class="eg-rc__post d-flex align-items-center mb-20">
                                    <div class="eg-rc__thumb mr-20">
                                       <a href="blog-details.html"><img src="assets/img/blog/rc-post-01.png" alt="img"></a>
                                    </div>
                                    <div class="eg-rc__content">
                                       <div class="eg-rc__meta"><span>4 March, 2023</span> </div>
                                       <h4 class="eg-rc__title">
                                          <a href="blog-details.html">Don’t Underestimate The Software </a>
                                       </h4>
                                    </div>
                                 </div>
                                 <div class="eg-rc__post d-flex align-items-center mb-20">
                                    <div class="eg-rc__thumb mr-20">
                                       <a href="blog-details.html"><img src="assets/img/blog/rc-post-02.png" alt="img"></a>
                                    </div>
                                    <div class="eg-rc__content">
                                       <div class="eg-rc__meta"><span>4 March, 2023</span> </div>
                                       <h4 class="eg-rc__title">
                                          <a href="blog-details.html">Designing Human-Machine Interfaces.. </a>
                                       </h4>
                                    </div>
                                 </div>
                                 <div class="eg-rc__post d-flex align-items-center mb-20">
                                    <div class="eg-rc__thumb mr-20">
                                       <a href="blog-details.html"><img src="assets/img/blog/rc-post-03.png" alt="img"></a>
                                    </div>
                                    <div class="eg-rc__content">
                                       <div class="eg-rc__meta"><span>4 March, 2023</span> </div>
                                       <h4 class="eg-rc__title">
                                          <a href="blog-details.html">Web Design Done Well: Excellent</a>
                                       </h4>
                                    </div>
                                 </div>
                                 <div class="eg-rc__post d-flex align-items-center mb-20">
                                    <div class="eg-rc__thumb mr-20">
                                       <a href="blog-details.html"><img src="assets/img/blog/rc-post-04.png" alt="img"></a>
                                    </div>
                                    <div class="eg-rc__content">
                                       <div class="eg-rc__meta"><span>4 March, 2023</span> </div>
                                       <h4 class="eg-rc__title">
                                          <a href="blog-details.html">Don’t Underestimate The Software </a>
                                       </h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="eg-sidebar__widget mb-60">
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
                  </div> --}}
               </div>
            </div>
         </div>
      </section>
      <!-- blog-end -->
   </main>


   <!-- footer area -->
   @endsection
