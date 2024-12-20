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
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalorieController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('verify', 'verify');
    Route::get('getUser', 'getUser')->middleware('auth:sanctum');
    Route::post('update-user', 'update')->middleware('auth:sanctum');
    Route::get('logout', 'logout')->middleware('auth:sanctum');
});

Route::post('loginAdmin', [AdminController::class, 'loginAdmin']); 
Route::post('forgetPassword', [AdminController::class, 'forgetPassword']); 

Route::middleware(['auth:sanctum','isAdmin'])->controller(AdminController::class)->group(function(){
    Route::post('registerAdmin', 'registerAdmin');
});




Route::middleware(['auth:sanctum','isAdmin'])->group(function() {
    Route::post('Calorie', [CalorieController::class, 'store']); 
    Route::post('update-Calorie', [CalorieController::class, 'update']);
    Route::delete('delete-Calorie', [CalorieController::class, 'destroy']);  


    //users
    Route::get('users', [AdminController::class, 'index']); 

    //Category
    Route::post('Update-Category',[CategoryController::class, 'update']);
    Route::delete('delete-Category',[CategoryController::class, 'destroy']);
    Route::post('Category',[CategoryController::class,'store']);  

//Product
    Route::post('Product', [ProductController::class, 'store']); 
    Route::post('update-Product', [ProductController::class, 'update']); 
    Route::delete('delete-Product', [ProductController::class, 'destroy']); 

//ProductMedia
    Route::post('ProductMedia',[ProductMediaController::class,'store']);
    Route::post('update-productMedia',[ProductMediaController::class,'update']);
    Route::delete('delete-productMedia', [ProductMediaController::class,'destroy']);

//Slider
    Route::post('addSlider', [SliderController::class,'store']);
    Route::post('update-Slider', [SliderController::class,'update']);
    Route::delete('delete-Slider',[SliderController::class, 'destroy']);

//logs
    Route::get('logs', [ProductLogController::class,'index']);


    Route::get('userInfo', [UserInfoController::class, 'index']);

    //order
    Route::get('orders', [OrderController::class, 'index']); 
});


 //report
 Route::get('orders-export', [OrderController::class, 'export']); 

 Route::get('Categories',[CategoryController::class, 'index']);
  
 Route::get('Slider', [SliderController::class,'index']);

//
   Route::controller(ProductController::class)->group(function(){
 
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
    Route::get('ProductByIDUser', [ProductController::class, 'ProductByIDUser']);


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
    Route::post('verifyCode', [DiscountCodeController::class, 'verfiyCode']);
 

    //order
    Route::post('checkOutOrder', [OrderController::class, 'store']);
    Route::get('getAllOrderUser', [OrderController::class, 'getAllOrderUser']);
    Route::get('OrderDetails', [OrderController::class, 'OrderDetails']);
    Route::get('SortOrder', [OrderController::class, 'SortOrder']);
    Route::get('filterOrder', [OrderController::class, 'filterOrder']);
    
});


 Route::get('info', [UserInfoController::class,'store']);
  
 Route::get('language', [UserInfoController::class, 'getDeviceLanguage']);
    Route::controller(ContactUsController::class)->group(function(){
    Route::post('ContactUs', 'store');
});

