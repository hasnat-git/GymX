<?php

use App\Http\Controllers\frontend\blog_detailsController;
use App\Http\Controllers\frontend\blogController;
use App\Http\Controllers\frontend\cartController;
use App\Http\Controllers\frontend\checkoutController;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\forgotController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\ingredientController;
use App\Http\Controllers\frontend\loginController;
use App\Http\Controllers\frontend\product_detailsController;
use App\Http\Controllers\frontend\registerController;
use App\Http\Controllers\frontend\shop_detailsController;
use App\Http\Controllers\frontend\shopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController :: class, 'index']);
Route::get('/blog', [blogController :: class, 'index']);
Route::get('/blog-details', [blog_detailsController :: class, 'index']);
Route::get('/cart', [ cartController:: class, 'index']);
Route::get('/checkout', [checkoutController :: class, 'index']);
Route::get('/contact', [contactController :: class, 'index']);
Route::get('/forgot', [forgotController :: class, 'index']);
Route::get('/ingredients', [ingredientController :: class, 'index']);
Route::get('/login', [loginController :: class, 'index']);
Route::get('/product-details', [product_detailsController :: class, 'index']);
Route::get('/register', [registerController :: class, 'index']);
Route::get('/shop-details', [shop_detailsController :: class, 'index']);
Route::get('/shop', [shopController :: class, 'index']);

Route::post('/contact', [contactController::class, 'submitMessage']);


