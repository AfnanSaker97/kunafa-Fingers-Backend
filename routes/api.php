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
use App\Http\Controllers\DiscountCodeController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;
use Illuminate\Support\Facades\Log;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('verify', 'verify');
    Route::get('getUser', 'getUser')->middleware('auth:sanctum');
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


Route::middleware('auth:sanctum')->group(function() {
    Route::get('getProductsUser', [ProductController::class, 'getProductsUser']); 
    Route::get('getProductByCategory', [ProductController::class, 'getProductByCategory']);
    Route::get('searchUser', [ProductController::class, 'search']);

});



Route::controller(ProductMediaController::class)->group(function(){
    Route::post('ProductMedia', 'store');
});


Route::middleware('auth:sanctum')->group(function() {
    Route::post('favorite-products', [FavoriteProductController::class, 'store']);
    Route::get('favorite-products', [FavoriteProductController::class, 'index']);
    Route::get('getFavoriteProductCount', [FavoriteProductController::class, 'getFavoriteProductCount']);
    
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


Route::controller(UserInfoController::class)->group(function(){
    Route::get('info', 'store');
  
});

Route::controller(SliderController::class)->group(function(){
    Route::get('addSlider', 'store');
    Route::get('Slider', 'index');
});



Route::get('/test-email', function () {
    try {
        $email_verification_code = random_int(1000, 9999);
        Mail::to('fofomsa1997@gmail.com')->send(new VerificationCodeMail($email_verification_code));
        Log::info('Email sent to fofomsa1997@gmail.com with code: ' . $email_verification_code);
        return 'Email sent successfully';
    } catch (\Exception $e) {
        Log::error('Failed to send email: ' . $e->getMessage());
        return 'Failed to send email: ' ;
    }
});