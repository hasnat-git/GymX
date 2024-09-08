@extends('frontend.layouts.main')
@section('title', 'Shop')
@section('main-container')

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
                     <h2 class="title">Shop</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb-area-end -->

   <!-- product-area-start -->
   <section class="product-area pb-120">
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-12">
               <div class="row">
                  @foreach ($products as $product)
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                     <div class="eg-product__item text-center">
                        <div class="eg-product__thumb">
                           <a href="/shop-details{{$product->id}}">
                              <img src="/backend/images/products/{{$product->image}}" alt="product-thumb" class="product-img">
                           </a>
                        </div>
                        <div class="eg-product__content">
                           <h4 class="eg-product__title">
                              <a href="/shop-details{{$product->id}}">{{ $product->title }}</a>
                           </h4>
                           <span class="eg-product__price">${{ $product->price }}</span>
                           <div class="eg-product__btn d-flex align-items-center justify-content-center">
                              <a href="cart.html" class="eg-product__cart mr-15">
                                 <span><img src="assets/img/icon/cart.svg" alt=""></span>
                              </a>
                              <a class="eg-btn" href="/shop-details{{$product->id}}">Buy Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>

               <!-- Pagination Controls -->
               <div class="col-lg-12 mt-4 pagination">
                  {{ $products->links('pagination::bootstrap-4') }}
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- product-area-end -->
</main>

<style>
   .product-area .col-xl-3 {
      padding-right: 0;
   }

   .product-area .row {
      margin-right: 0;
   }

   .eg-product__item {
      padding: 10px;
      border: 1px solid #e0e0e0;
      background-color: #fff;
   }

   .eg-product__thumb img {
      width: 100%;
      max-width: 250px;
      height: 250px;
      object-fit: cover;
      border-radius: 5px;
   }

   .eg-product__content h4 {
      font-size: 16px;
   }

   .eg-product__price {
      font-size: 14px;
   }

   .pagination {
      display: flex;
      justify-content: center; /* Centers the pagination */
      margin-top: 20px;
   }

   .pagination .page-item .page-link {
      color: red; /* Change link color to red */
      padding: 10px 15px;
      border: 1px solid red;
      border-radius: 5px;
      text-decoration: none;
   }

   .pagination .page-item .page-link:hover {
      background-color: red;
      color: #fff;
   }

   .pagination .page-item.active .page-link {
      background-color: red;
      border-color: red;
      color: #fff;
   }
</style>

@endsection
