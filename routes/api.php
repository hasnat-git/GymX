<?php

use App\Http\Controllers\API\ApiBlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/blog-posts' , [ApiBlogController::class, 'index']);
Route::post('/posts/add-post' , [ApiBlogController::class, 'submitPost']);
Route::get('/posts/{id}' , [ApiBlogController::class, 'showSinglePost']);
Route::put('posts/post-edit/{id}', [ApiBlogController::class, 'updateRecord']);
Route::delete('posts/post-delete/{id}', [ApiBlogController::class, 'deleteRecord'])->name('delete');
