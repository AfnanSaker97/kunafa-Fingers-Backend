<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductMediaController;
use App\Http\Controllers\FavoriteProductController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProductLogController;
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
    Route::get('search', 'search');
    Route::get('RandomProduct', 'RandomProduct');
   
});


Route::controller(ProductMediaController::class)->group(function(){
    Route::post('ProductMedia', 'store');
});


Route::middleware('auth:sanctum')->group(function() {
    Route::post('favorite-products', [FavoriteProductController::class, 'store']);
    Route::get('favorite-products', [FavoriteProductController::class, 'index']);
});

Route::middleware('auth:sanctum')->group(function() {
    Route::post('addCartItem', [CartItemController::class, 'store']);
    Route::get('CartItem', [CartItemController::class, 'index']);
    Route::get('TotalCart', [CartItemController::class, 'TotalCart']);
    Route::post('updateCartItem', [CartItemController::class, 'update']);
    Route::delete('deleteCartItem', [CartItemController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->group(function() {
    Route::post('addAddress', [AddressController::class, 'store']);
    Route::get('Address', [AddressController::class, 'index']);
    Route::get('AddressById', [AddressController::class, 'show']);
    Route::post('updateAddress', [AddressController::class, 'update']);
    Route::delete('deleteAddress', [AddressController::class, 'destroy']);
});



Route::middleware('auth:sanctum')->group(function() {
    Route::post('addDiscountCode', [DiscountCodeController::class, 'store']);
   // Route::get('Address', [DiscountCodeController::class, 'index']);
  //  Route::get('AddressById', [DiscountCodeController::class, 'show']);

});

Route::controller(ProductLogController::class)->group(function(){
    Route::get('logs', 'index');
  
});