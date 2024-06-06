<?php

namespace App\Http\Controllers;

use App\Models\FavoriteProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
class FavoriteProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
          // Validate the request
      $validator = Validator::make($request->all(), [
        'language_id' => 'required|exists:languages,id',
       
          ]);
    
        if ($validator->fails()) {
        return $this->sendError('Validation Error.', $validator->errors()->all());
          }
          $languageId = $request->input('language_id');
            // Fetch favorite products with the necessary translations
       $favorites = FavoriteProduct::where('user_id', Auth::id())
       ->where('is_favorite', true)
       ->with([
        'product.translations' => function ($query) use ($languageId) {
            $query->select('product_id', 'name', 'description')->where('language_id', $languageId);
        },
        'product.category.translations' => function ($query) use ($languageId) {
            $query->select('category_id', 'name')->where('language_id', $languageId);
        },
        'product.productsMedia:url_media,product_id',
      ])
      ->get();

       // Transform the favorite products
       $favorites = $favorites->map(function ($favorite) {
        $product = $favorite->product;
        return [
            'id' => $product->id,
            'name' => optional($product->translations->first())->name ?? '0',
            'description' => optional($product->translations->first())->description ?? '0',
            'price' => $product->price,
            'new_price' => $product->new_price,
            'tags' => $product->tags,
            'code' => $product->code,
            'is_favorite' => $favorite->first()->is_favorite ?? '0',
            'category' => optional($product->category->translations->first())->name ?? '0',
            'category_id' => optional($product->category->first())->id,
            'productsMedia' => $product->productsMedia,
        ];
    });
            return $this->sendResponse($favorites,'Favorite Product fetched successfully.');
    }


    public function getFavoriteProductCount()
    {   
        // Retrieve the count of favorite products for the authenticated user
        $favoritesCount = FavoriteProduct::where('user_id', Auth::id())
                                          ->where('is_favorite', true)
                                          ->count();
    
        // Assuming $this->sendResponse() method is defined elsewhere
        return $this->sendResponse($favoritesCount, 'Favorite products count fetched successfully.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Validate the request
    $validator = Validator::make($request->all(), [
        'product_id' => 'required|exists:products,id',
    ]); 

    if ($validator->fails()) {
        return response()->json(['error' => 'Validation Error', 'messages' => $validator->errors()->all()], 422);
    }

      // Check if the favorite already exists
      $favoriteProduct = FavoriteProduct::where('user_id', Auth::id())
      ->where('product_id', $request->product_id)
      ->first();

      if ($favoriteProduct) {
        // Toggle the favorite status
        $favoriteProduct->is_favorite = !$favoriteProduct->is_favorite;
        $favoriteProduct->save();
        $message = $favoriteProduct->is_favorite ? 'Product added to favorites.' : 'Product removed from favorites.';
    } else {
        // Create a new favorite
        $favoriteProduct = FavoriteProduct::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'is_favorite' => true,
        ]);
        $message = 'Product added to favorites.';
    }
    Cache::forget('productsUser');
    return $this->sendResponse($favoriteProduct, $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(FavoriteProduct $favoriteProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FavoriteProduct $favoriteProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FavoriteProduct $favoriteProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FavoriteProduct $favoriteProduct)
    {
        //
    }
}
