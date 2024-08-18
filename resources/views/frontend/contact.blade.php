@extends('frontend.layouts.main')
@section('title', 'Contact')
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
                              <h2 class="title">Contact</h2>
                           </div>
                        </div>
                        <div class="eg-breadcrumb__content">
                           <h2 class="title"> Contact</h2>
                           {{-- <nav aria-label="breadcrumb">
                              <ol class="eg-breadcrumb__list">
                                 <li class="eg-breadcrumb__item"><a href="index-2.html">Home</a></li>
                                 <li class="eg-breadcrumb__item active" aria-current="page">Contact</li>
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

         <!-- contact area start -->
         <section class="eg-contact__area mb-120">
            <div class="container">
               <div class="eg-contact__info">
                  <div class="row">
                     <div class="col-lg-4 col-md-6 mb-40">
                        <div class="eg-contact__item">
                           <span class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="60" height="60" x="0" y="0" viewBox="0 0 368.16 368.16" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M184.08 0c-74.992 0-136 61.008-136 136 0 24.688 11.072 51.24 11.536 52.36 3.576 8.488 10.632 21.672 15.72 29.4l93.248 141.288c3.816 5.792 9.464 9.112 15.496 9.112s11.68-3.32 15.496-9.104l93.256-141.296c5.096-7.728 12.144-20.912 15.72-29.4.464-1.112 11.528-27.664 11.528-52.36 0-74.992-61.008-136-136-136zM293.8 182.152c-3.192 7.608-9.76 19.872-14.328 26.8l-93.256 141.296c-1.84 2.792-2.424 2.792-4.264 0L88.696 208.952c-4.568-6.928-11.136-19.2-14.328-26.808-.136-.328-10.288-24.768-10.288-46.144 0-66.168 53.832-120 120-120s120 53.832 120 120c0 21.408-10.176 45.912-10.28 46.152z" fill="current" opacity="1" data-original="current" class=""></path><path d="M184.08 64.008c-39.704 0-72 32.304-72 72s32.296 72 72 72 72-32.304 72-72-32.296-72-72-72zm0 128c-30.872 0-56-25.12-56-56s25.128-56 56-56 56 25.12 56 56-25.128 56-56 56z" fill="current" opacity="1" data-original="current" class=""></path></g></svg>
                           </span>
                           <h4 class="eg-contact__title">Our Location</h4>
                           <span> Comsats University Rd, off GT road,Sahiwal <br>Sahiwal District, Punjab 57000</span>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 mb-40">
                        <div class="eg-contact__item">
                           <span class="icon">
                             <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="60" height="60" x="0" y="0" viewBox="0 0 473.806 473.806" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M374.456 293.506c-9.7-10.1-21.4-15.5-33.8-15.5-12.3 0-24.1 5.3-34.2 15.4l-31.6 31.5c-2.6-1.4-5.2-2.7-7.7-4-3.6-1.8-7-3.5-9.9-5.3-29.6-18.8-56.5-43.3-82.3-75-12.5-15.8-20.9-29.1-27-42.6 8.2-7.5 15.8-15.3 23.2-22.8 2.8-2.8 5.6-5.7 8.4-8.5 21-21 21-48.2 0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5-6-6.2-12.3-12.6-18.8-18.6-9.7-9.6-21.3-14.7-33.5-14.7s-24 5.1-34 14.7l-.2.2-34 34.3c-12.8 12.8-20.1 28.4-21.7 46.5-2.4 29.2 6.2 56.4 12.8 74.2 16.2 43.7 40.4 84.2 76.5 127.6 43.8 52.3 96.5 93.6 156.7 122.7 23 10.9 53.7 23.8 88 26 2.1.1 4.3.2 6.3.2 23.1 0 42.5-8.3 57.7-24.8.1-.2.3-.3.4-.5 5.2-6.3 11.2-12 17.5-18.1 4.3-4.1 8.7-8.4 13-12.9 9.9-10.3 15.1-22.3 15.1-34.6 0-12.4-5.3-24.3-15.4-34.3l-54.9-55.1zm35.8 105.3c-.1 0-.1.1 0 0-3.9 4.2-7.9 8-12.2 12.2-6.5 6.2-13.1 12.7-19.3 20-10.1 10.8-22 15.9-37.6 15.9-1.5 0-3.1 0-4.6-.1-29.7-1.9-57.3-13.5-78-23.4-56.6-27.4-106.3-66.3-147.6-115.6-34.1-41.1-56.9-79.1-72-119.9-9.3-24.9-12.7-44.3-11.2-62.6 1-11.7 5.5-21.4 13.8-29.7l34.1-34.1c4.9-4.6 10.1-7.1 15.2-7.1 6.3 0 11.4 3.8 14.6 7l.3.3c6.1 5.7 11.9 11.6 18 17.9 3.1 3.2 6.3 6.4 9.5 9.7l27.3 27.3c10.6 10.6 10.6 20.4 0 31-2.9 2.9-5.7 5.8-8.6 8.6-8.4 8.6-16.4 16.6-25.1 24.4-.2.2-.4.3-.5.5-8.6 8.6-7 17-5.2 22.7l.3.9c7.1 17.2 17.1 33.4 32.3 52.7l.1.1c27.6 34 56.7 60.5 88.8 80.8 4.1 2.6 8.3 4.7 12.3 6.7 3.6 1.8 7 3.5 9.9 5.3.4.2.8.5 1.2.7 3.4 1.7 6.6 2.5 9.9 2.5 8.3 0 13.5-5.2 15.2-6.9l34.2-34.2c3.4-3.4 8.8-7.5 15.1-7.5 6.2 0 11.3 3.9 14.4 7.3l.2.2 55.1 55.1c10.3 10.2 10.3 20.7.1 31.3zM256.056 112.706c26.2 4.4 50 16.8 69 35.8s31.3 42.8 35.8 69c1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.4-1.2 12.3-8.2 11.1-15.6-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3 3.7-15.6 11s3.5 14.4 10.9 15.6zM473.256 209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2 3.7-15.5 11-1.2 7.4 3.7 14.3 11.1 15.6 46.6 7.9 89.1 30 122.9 63.7 33.8 33.8 55.8 76.3 63.7 122.9 1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.3-1.1 12.3-8.1 11-15.4z" fill="current" opacity="1" data-original="current" class=""></path></g></svg>
                           </span>
                           <h4 class="eg-contact__title">Contact Us</h4>
                           <a href="tel:01235858598">+923136904694</a>
                           <a href="tel:01233858397">+923136904694</a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 mb-40">
                        <div class="eg-contact__item">
                           <span class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="60" height="60" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M123.25 24.192c0-.018 0-.034-.005-.052s-.007-.063-.009-.094a1.734 1.734 0 0 0-.083-.408c-.006-.018 0-.037-.011-.055s-.01-.015-.013-.023a1.734 1.734 0 0 0-.227-.407c-.021-.028-.043-.053-.066-.08a1.755 1.755 0 0 0-.31-.294c-.012-.009-.022-.02-.034-.028a1.744 1.744 0 0 0-.414-.2c-.034-.012-.068-.022-.1-.032a1.733 1.733 0 0 0-.474-.073H6.5a1.733 1.733 0 0 0-.474.073c-.035.01-.068.02-.1.032a1.744 1.744 0 0 0-.414.2c-.012.008-.022.019-.034.028a1.755 1.755 0 0 0-.31.294c-.022.027-.045.052-.066.08a1.734 1.734 0 0 0-.227.407c0 .008-.01.015-.013.023s-.005.037-.011.055a1.734 1.734 0 0 0-.083.408c0 .032-.009.063-.009.094s-.005.034-.005.052v79.615c0 .023.006.045.007.068a1.737 1.737 0 0 0 .019.188c.008.051.015.1.027.152a1.74 1.74 0 0 0 .056.179c.017.047.033.094.054.139a1.729 1.729 0 0 0 .093.172c.024.04.048.081.075.119a1.743 1.743 0 0 0 .125.152c.033.036.066.072.1.106.021.019.037.042.059.061s.036.017.052.03a1.736 1.736 0 0 0 .452.263c.035.014.071.022.107.033a1.732 1.732 0 0 0 .488.085c.012 0 .023.006.035.006H121.501c.012 0 .023-.006.034-.006a1.732 1.732 0 0 0 .489-.085c.035-.011.07-.019.1-.033a1.736 1.736 0 0 0 .453-.263c.016-.013.036-.017.052-.03s.038-.042.059-.061c.036-.034.069-.069.1-.106a1.743 1.743 0 0 0 .125-.152c.027-.038.051-.078.075-.119a1.729 1.729 0 0 0 .093-.172c.021-.045.037-.092.054-.139a1.74 1.74 0 0 0 .056-.179c.012-.05.019-.1.027-.152a1.737 1.737 0 0 0 .019-.188c0-.023.007-.045.007-.068zM45.8 60.316l17.058 14.677a1.751 1.751 0 0 0 2.283 0L82.2 60.316l35.512 41.741H10.289zM8.25 99.052V28.007l34.9 30.026zm76.6-41.019 34.9-30.026v71.045zm31.931-32.091L81.276 56.493c-.006.005-.014.008-.02.014l-.019.02L64 71.358 46.763 56.527l-.019-.02-.02-.014-35.507-30.551z" fill="current" opacity="1" data-original="current"></path></g></svg>
                           </span>
                           <h4 class="eg-contact__title">Email us</h4>
                           <a href="mailto:GymX.info@.com"> gymEx.info@.com</a>
                           <a href="mailto:GymX.info@.com"> gymEx.info@.com</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="eg-contact__form mt-80">
                @if ($message = Session::get('success'))
                <div class="alert alert-block p-4 border-left-warning" style="background-color:#030303; opacity:1">
                    <strong>
                        <h1 style="color:#a80f0f">{{$message}}</h1>
                    </strong>
                </div>
            @endif
                  <form  method="POST" action="{{ url('/contact') }}">
                    @csrf
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="eg-postbox__form-input mb-20">
                              <label for="name"> Name </label>
                              <input type="text" id="name" placeholder="lawsan Dowson" name="name" value="{{old('name')}}">
                              @if ($errors->has('name'))
                              <span class="text-danger">
                                  {{$errors->first('name')}}
                              </span>
                          @endif
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="eg-postbox__form-input mb-20">
                              <label for="email"> email </label>
                              <input type="email" id="email" placeholder="gymEx@example.com" name="email" required="" value="{{old('email')}}">
                              @if ($errors->has('email'))
                              <span class="text-danger">
                                  {{$errors->first('email')}}
                              </span>
                          @endif
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="eg-postbox__form-input mb-20">
                              <label for="phone"> Phone </label>
                              <input type="text" id="phone"  name="phone" value="{{old('phone')}}">
                              @if ($errors->has('phone'))
                              <span class="text-danger">
                                  {{$errors->first('phone')}}
                              </span>
                          @endif
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="eg-postbox__form-input mb-20">
                              <label for="Subject"> Subject </label>
                              <input type="text" id="Subject" name="subject" value="{{old('subject')}}">
                              @if ($errors->has('subject'))
                              <span class="text-danger">
                                  {{$errors->first('subject')}}
                              </span>
                          @endif
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="eg-postbox__form-input message mb-20">
                              <label for="message"> message </label>
                              <textarea name="message" id="message" placeholder="Simultaneously we had a problem" value="{{old('message')}}"></textarea>
                              @if ($errors->has('message'))
                              <span class="text-danger">
                                  {{$errors->first('message')}}
                              </span>
                          @endif
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="eg-postbox__form-checkbox eg-checkout__check-box d-flex mb-20">
                              <input class="mr-10" type="checkbox" id="checkbox">
                              <label for="checkbox">Save my name, email, and website in this browser for the next time I comment.</label>
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="eg-postbox__form-btn eg-btn" name="submit">
                        Send message
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
         </section>
         <!-- contact area end -->

         <!-- map-area-start -->
         <div class="eg-contact__map-area pb-120">
            <div class="eg-contact__map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13730.912181302727!2d73.149107!3d30.6416211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b6e4dde0c501%3A0xc37ea3d85326203!2sCOMSATS%20University%20Islamabad%20-%20Sahiwal%20Campus!5e0!3m2!1sen!2s!4v1721648533091!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
         </div>
         <!-- map-area-end -->

      </main>

      <!-- footer area -->
      @endsection
