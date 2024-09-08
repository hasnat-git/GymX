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
Route::post('/register', [registerController::class, 'RegisterUser'])->name('user.register');

//user login module
Route::group(['as' => 'user.', 'prefix' => '/'],function(){
    Route::get('login', [loginController :: class, 'index'])->name('login');
    Route::post('login-submit', [loginController::class, 'onLogin'])->name('submit');
    Route::get('logout', [loginController::class, 'logoutUser'])->name('logout');
});

//backend routes
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin.home')->middleware('check.admin');

//Admin Module
Route::group(['as' => 'admin.', 'prefix' => '/admin/'], function(){
    // Login
    Route::get('login', [AdminLoginController::class, 'index'])->name('login');
    Route::post('login-submit', [AdminLoginController::class, 'onLogin'])->name('submit');
    Route::get('logout', [AdminLoginController::class, 'logoutAdmin'])->name('logout');
    // Registration
    Route::get('register', [AdminHomeController::class, 'registerAdmin'])->name('add')->middleware('check.admin');
    Route::post('register', [AdminHomeController::class, 'submitAdminRecord'])->name('register')->middleware('check.admin');
    // Admin Management
    Route::get('admins-list', [AdminHomeController::class, 'showAdminRecord'])->name('show')->middleware('check.admin');
    Route::get('delete/{id}', [AdminHomeController::class, 'deleteAdminRecord'])->name('delete')->middleware('check.admin');
    Route::get('edit/{id}', [AdminHomeController::class, 'editAdminRecord'])->name('edit')->middleware('check.admin');
    Route::put('update/{id}', [AdminHomeController::class, 'updateAdminRecord'])->name('update')->middleware('check.admin');

});

// Team Module
Route::group(['as' => 'team.', 'prefix' => '/admin/'], function(){
    Route::get('team', [TeamMemberController::class, 'index'])->name('show')->middleware('check.admin');
    Route::get('team-member-details/{id}', [TeamMemberController::class, 'showTeamMember'])->name('details')->middleware('check.admin');
    Route::get('team-add', [TeamMemberController::class, 'registerTeam'])->name('add')->middleware('check.admin');
    Route::post('team-add', [TeamMemberController::class, 'submitTeamRecord'])->middleware('check.admin');
    Route::get('team-edit/{id}', [TeamMemberController::class, 'editTeam'])->name('edit')->middleware('check.admin');
    Route::put('team-edit/{id}', [TeamMemberController::class, 'updateTeam'])->name('update')->middleware('check.admin');
    Route::delete('team-delete/{id}', [TeamMemberController::class, 'deleteTeam'])->name('delete')->middleware('check.admin');
});

// FAQs Module
Route::group(['as' => 'faq.', 'prefix' => '/admin/'], function(){
    Route::get('faqs', [AdminFaqsController::class, 'index'])->name('show')->middleware('check.admin');
    Route::get('faq-add', [AdminFaqsController::class, 'addFAQ'])->name('add')->middleware('check.admin');
    Route::post('faq-add', [AdminFaqsController::class, 'submitFaqRecord'])->name('submit')->middleware('check.admin');
    Route::get('faq-edit/{id}', [AdminFaqsController::class, 'editFAQ'])->name('edit')->middleware('check.admin');
    Route::put('faq-edit/{id}', [AdminFaqsController::class, 'updateFAQ'])->name('update')->middleware('check.admin');
    Route::delete('faq-delete/{id}', [AdminFaqsController::class, 'deleteFAQ'])->name('delete')->middleware('check.admin');
});

// Project Module
Route::group(['as' => 'project.', 'prefix' => '/admin/'], function(){
    Route::get('projects', [AdminProjectsController::class, 'index'])->name('show')->middleware('check.admin');
    Route::get('project-add', [AdminProjectsController::class, 'addProject'])->name('add')->middleware('check.admin');
    Route::post('project-add', [AdminProjectsController::class, 'submitProjectRecord'])->middleware('check.admin');
    Route::get('project-edit/{id}', [AdminProjectsController::class, 'editProject'])->name('edit')->middleware('check.admin');
    Route::put('project-edit/{id}', [AdminProjectsController::class, 'updateProject'])->name('update')->middleware('check.admin');
    Route::delete('project-delete/{id}', [AdminProjectsController::class, 'deleteProject'])->name('delete')->middleware('check.admin');
});

// Route::get('/admin/blogs', [AdminBlogController::class, 'index'])->name('blogs.show');
// Route::get('/admin/blog-add', [AdminBlogController::class, 'addBlog'])->name('blog.add');
// Route::post('/admin/project-add', [AdminBlogController::class, 'submitRecord'])->name('blog.sumbit');

// Route::get('/admin/project-edit/{id}', [AdminProjectsController::class, 'editProject'])->name('project.edit');
// Route::put('/admin/project-edit/{id}', [AdminProjectsController::class, 'updateProject'])->name('project.update');


// Route::delete('/admin/blog-delete/{id}', [AdminBlogController::class, 'deleteRecord'])->name('blog.delete');

// Blog Module
Route::group(['as' => 'blog.', 'prefix' => '/admin/'], function(){
    Route::get('blogs', [AdminBlogController::class, 'index'])->name('show')->middleware('check.admin');
    Route::get('blog-add', [AdminBlogController::class, 'addBlog'])->name('add')->middleware('check.admin');
    Route::post('blog-add', [AdminBlogController::class, 'submitRecord'])->name('sumbit')->middleware('check.admin');
    Route::get('blog-edit/{id}', [AdminBlogController::class, 'editRecord'])->name('edit');
    Route::put('blog-edit/{id}', [AdminBlogController::class, 'updateRecord'])->name('update');
    Route::delete('blog-delete/{id}', [AdminBlogController::class, 'deleteRecord'])->name('delete')->middleware('check.admin');
});
//Products module

Route::group(['as' => 'product.', 'prefix' => '/admin/'], function(){
    Route::get('product', [ProductsController::class, 'index'])->name('show')->middleware('check.admin');
    Route::get('product-add', [ProductsController::class, 'addProduct'])->name('add')->middleware('check.admin');
    Route::post('product-submit', [ProductsController::class, 'submitProductRecord'])->middleware('check.admin');
    Route::get('product-edit/{id}', [ProductsController::class, 'editProduct'])->name('edit')->middleware('check.admin');
    Route::put('product-edit/{id}', [ProductsController::class, 'updateProduct'])->name('update')->middleware('check.admin');
    Route::delete('product-delete/{id}', [ProductsController::class, 'deleteProduct'])->name('delete')->middleware('check.admin');
});

//testimonial module

Route::group(['as' => 'testimonial.', 'prefix' => '/admin/'], function(){
    Route::get('testimonial', [AdminTestimonialController::class, 'index'])->name('show')->middleware('check.admin');
    Route::get('testimonial-add', [AdminTestimonialController::class, 'addTestimonial'])->name('add')->middleware('check.admin');
    Route::post('testimonial-submit', [AdminTestimonialController::class, 'submitTestimonialRecord'])->name('submit')->middleware('check.admin');
    Route::get('testimonial-edit/{id}', [AdminTestimonialController::class, 'editTestimonial'])->name('edit')->middleware('check.admin');
    Route::put('testimonial-edit/{id}', [AdminTestimonialController::class, 'updateTestimonial'])->name('update')->middleware('check.admin');
    Route::delete('testimonial-delete/{id}', [AdminTestimonialController::class, 'deleteTestimonial'])->name('delete')->middleware('check.admin');
});



