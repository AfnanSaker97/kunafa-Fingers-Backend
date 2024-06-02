<?php

namespace App\Http\Controllers;

use App\Models\ProductMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
class ProductMediaController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        'url_media' => 'required|image',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => 'Validation Error', 'messages' => $validator->errors()->all()], 422);
    }
        try {
            // Start the transaction
            DB::beginTransaction();
          // Handle the file upload
        if ($request->hasFile('url_media')) {
            $imageName = time() . '.' . $request->url_media->extension();
            $request->url_media->storeAs("ProductMedia/", $imageName);
            $path = URL::asset("kunafa-Fingers-Backend/storage/app/ProductMedia/");
            $url = $path . '/' . $imageName;
        }
        

            $productMedia =ProductMedia::create([
            'product_id' => $request->product_id,
            'url_media' => $url,
        ]);
          // Commit the transaction
          DB::commit();
        return $this->sendResponse($productMedia, 'Photo uploaded successfully.');
    } catch (\Exception $e) {
        // Rollback the transaction on error
        DB::rollBack();
        // Return error response
        return response()->json(['error' => 'Failed to upload photo', 'message' => $e->getMessage()], 500);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductMedia $productMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductMedia $productMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductMedia $productMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductMedia $productMedia)
    {
        //
    }
}
