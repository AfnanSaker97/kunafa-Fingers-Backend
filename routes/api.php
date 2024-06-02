<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductMediaController;
use App\Http\Controllers\FavoriteProductController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('verify', 'verify');
    Route::get('logout', 'logout')->middleware('auth:sanctum');
});



Route::controller(CategoryController::class)->group(function(){
    Route::post('Category', 'store');
    Route::get('Categories', 'index');
  
});
//
Route::controller(ProductController::class)->group(function(){
    Route::post('Product', 'store');
    Route::get('Products', 'index');
    Route::get('ProductsByCategory', 'show');
    Route::get('ProductByID', 'ProductByID');
  
});


Route::controller(ProductMediaController::class)->group(function(){
    Route::post('ProductMedia', 'store');
});


Route::controller(FavoriteProductController::class)->group(function(){
    Route::post('FavoriteProduct', 'store')->middleware('auth:sanctum');
    Route::get('FavoriteProduct', 'index')->middleware('auth:sanctum');
});