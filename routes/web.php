<?php

use App\Http\Controllers\backend\AdminBlogController;
use App\Http\Controllers\backend\AdminFaqsController;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminProjectsController;
use App\Http\Controllers\backend\AdminTestimonialController;
use App\Http\Controllers\backend\ProductsController;
use App\Http\Controllers\backend\TeamMemberController;
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
Route::get('/blog-details{id}', [blog_detailsController :: class, 'index']);
Route::get('/cart', [ cartController:: class, 'index']);
Route::get('/checkout', [checkoutController :: class, 'index']);
Route::get('/contact', [contactController :: class, 'index']);
Route::get('/forgot', [forgotController :: class, 'index']);
Route::get('/ingredients', [ingredientController :: class, 'index']);
Route::get('/login', [loginController :: class, 'index']);
Route::get('/product-details', [product_detailsController :: class, 'index']);
Route::get('/register', [registerController :: class, 'index']);
Route::get('/shop-details{id}', [shop_detailsController :: class, 'index']);
Route::get('/shop', [shopController :: class, 'index']);

Route::post('/contact', [contactController::class, 'submitMessage']);

//backend routes


Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin.home');

//Admin Module
Route::group(['as' => 'admin.', 'prefix' => '/admin/'], function(){
    // Login
    Route::get('login', [AdminLoginController::class, 'index'])->name('login');
    Route::post('login-submit', [AdminLoginController::class, 'onLogin'])->name('submit');
    Route::get('logout', [AdminLoginController::class, 'logoutAdmin'])->name('logout');
    // Registration
    Route::get('register', [AdminHomeController::class, 'registerAdmin'])->name('add');
    Route::post('register', [AdminHomeController::class, 'submitAdminRecord'])->name('register');
    // Admin Management
    Route::get('admins-list', [AdminHomeController::class, 'showAdminRecord'])->name('show');
    Route::get('delete/{id}', [AdminHomeController::class, 'deleteAdminRecord'])->name('delete');
    Route::get('edit/{id}', [AdminHomeController::class, 'editAdminRecord'])->name('edit');
    Route::put('update/{id}', [AdminHomeController::class, 'updateAdminRecord'])->name('update');

});

// Team Module
Route::group(['as' => 'team.', 'prefix' => '/admin/'], function(){
    Route::get('team', [TeamMemberController::class, 'index'])->name('show');
    Route::get('team-member-details/{id}', [TeamMemberController::class, 'showTeamMember'])->name('details');
    Route::get('team-add', [TeamMemberController::class, 'registerTeam'])->name('add');
    Route::post('team-add', [TeamMemberController::class, 'submitTeamRecord']);
    Route::get('team-edit/{id}', [TeamMemberController::class, 'editTeam'])->name('edit');
    Route::put('team-edit/{id}', [TeamMemberController::class, 'updateTeam'])->name('update');
    Route::delete('team-delete/{id}', [TeamMemberController::class, 'deleteTeam'])->name('delete');
});

// FAQs Module
Route::group(['as' => 'faq.', 'prefix' => '/admin/'], function(){
    Route::get('faqs', [AdminFaqsController::class, 'index'])->name('show');
    Route::get('faq-add', [AdminFaqsController::class, 'addFAQ'])->name('add');
    Route::post('faq-add', [AdminFaqsController::class, 'submitFaqRecord'])->name('submit');
    Route::get('faq-edit/{id}', [AdminFaqsController::class, 'editFAQ'])->name('edit');
    Route::put('faq-edit/{id}', [AdminFaqsController::class, 'updateFAQ'])->name('update');
    Route::delete('faq-delete/{id}', [AdminFaqsController::class, 'deleteFAQ'])->name('delete');
});

// Project Module
Route::group(['as' => 'project.', 'prefix' => '/admin/'], function(){
    Route::get('projects', [AdminProjectsController::class, 'index'])->name('show');
    Route::get('project-add', [AdminProjectsController::class, 'addProject'])->name('add');
    Route::post('project-add', [AdminProjectsController::class, 'submitProjectRecord']);
    Route::get('project-edit/{id}', [AdminProjectsController::class, 'editProject'])->name('edit');
    Route::put('project-edit/{id}', [AdminProjectsController::class, 'updateProject'])->name('update');
    Route::delete('project-delete/{id}', [AdminProjectsController::class, 'deleteProject'])->name('delete');
});

// Route::get('/admin/blogs', [AdminBlogController::class, 'index'])->name('blogs.show');
// Route::get('/admin/blog-add', [AdminBlogController::class, 'addBlog'])->name('blog.add');
// Route::post('/admin/project-add', [AdminBlogController::class, 'submitRecord'])->name('blog.sumbit');

// Route::get('/admin/project-edit/{id}', [AdminProjectsController::class, 'editProject'])->name('project.edit');
// Route::put('/admin/project-edit/{id}', [AdminProjectsController::class, 'updateProject'])->name('project.update');


// Route::delete('/admin/blog-delete/{id}', [AdminBlogController::class, 'deleteRecord'])->name('blog.delete');

// Blog Module
Route::group(['as' => 'blog.', 'prefix' => '/admin/'], function(){
    Route::get('blogs', [AdminBlogController::class, 'index'])->name('show');
    Route::get('blog-add', [AdminBlogController::class, 'addBlog'])->name('add');
    Route::post('blog-add', [AdminBlogController::class, 'submitRecord'])->name('sumbit');
    Route::delete('blog-delete/{id}', [AdminBlogController::class, 'deleteRecord'])->name('delete');
});
//Products module

Route::group(['as' => 'product.', 'prefix' => '/admin/'], function(){
    Route::get('product', [ProductsController::class, 'index'])->name('show');
    Route::get('product-add', [ProductsController::class, 'addProduct'])->name('add');
    Route::post('product-submit', [ProductsController::class, 'submitProductRecord']);
    Route::get('product-edit/{id}', [ProductsController::class, 'editProduct'])->name('edit');
    Route::put('product-edit/{id}', [ProductsController::class, 'updateProduct'])->name('update');
    Route::delete('product-delete/{id}', [ProductsController::class, 'deleteProduct'])->name('delete');
});

//testimonial module

Route::group(['as' => 'testimonial.', 'prefix' => '/admin/'], function(){
    Route::get('testimonial', [AdminTestimonialController::class, 'index'])->name('show');
    Route::get('testimonial-add', [AdminTestimonialController::class, 'addTestimonial'])->name('add');
    Route::post('testimonial-submit', [AdminTestimonialController::class, 'submitTestimonialRecord'])->name('submit');
    Route::get('testimonial-edit/{id}', [AdminTestimonialController::class, 'editTestimonial'])->name('edit');
    Route::put('testimonial-edit/{id}', [AdminTestimonialController::class, 'updateTestimonial'])->name('update');
    Route::delete('testimonial-delete/{id}', [AdminTestimonialController::class, 'deleteTestimonial'])->name('delete');
});

