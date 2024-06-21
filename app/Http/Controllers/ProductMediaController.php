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
            $request->url_media->move(public_path('ProductMedia'), $imageName);
            $url = url('ProductMedia/' . $imageName);
         
        }
        
            $productMedia =ProductMedia::create([
            'product_id' => $request->product_id,
            'url_media' => $url,
        ]);
          // Commit the transaction
          DB::commit();
        return $this->sendResponse($productMedia, 'Photo uploaded successfully.');
    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json(['error' => $e->getMessage()], 500); }
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
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'media_id' => 'required|exists:product_media,id',
            'url_media' => 'nullable|image',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Validation Error', 'messages' => $validator->errors()->all()], 422);
        }
    
        try {
            // Start the transaction
            DB::beginTransaction();
    
            // Find the existing media
            $productMedia = ProductMedia::find($request->media_id);

        // Handle the file upload
        if ($request->hasFile('url_media')) {
            // Delete the old photo
            $oldPhotoPath = public_path(parse_url($productMedia->url_media, PHP_URL_PATH));
            if (file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }

            // Upload the new photo
            $imageName = time() . '.' . $request->url_media->extension();
            $request->url_media->move(public_path('ProductMedia'), $imageName);
            $url = url('ProductMedia/' . $imageName);
        }
        // Update the media record
        $productMedia->update([
            'url_media' => $url,
        ]);

        // Commit the transaction
        DB::commit();

        // Clear the cache
        Cache::forget('productsUser');
        Cache::forget('products');
        Cache::forget('product');
        // Return success response
        return $this->sendResponse($productMedia, 'Photo updated successfully.');
    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(request $request)
    {
        $validator = Validator::make($request->all(), [

            'media_id' => 'required|exists:product_media,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Validation Error', 'messages' => $validator->errors()->all()], 422);
        }
    
            // Find the existing media
            $productMedia = ProductMedia::find($request->media_id);

            $oldPhotoPath = public_path(parse_url($productMedia->url_media, PHP_URL_PATH));
            if (file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }
            $productMedia->delete();
            return $this->sendResponse($productMedia, 'Photo deleted successfully.');
    }
}
