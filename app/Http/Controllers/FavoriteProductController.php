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
    public function index()
    {   
            $favorites = FavoriteProduct::where([['user_id', Auth::id()],['is_favorite',true]])->with('product')->get();
            return $this->sendResponse($favorites,'Favorite Product fetched successfully.');
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
