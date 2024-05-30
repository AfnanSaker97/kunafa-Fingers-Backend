<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use Illuminate\Support\Facades\Cache;
class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'language_id' => 'required|exists:languages,id',
        ]);
       
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
    
        // Retrieve categories data
        $languageId = $request->language_id;
        $products = Cache::remember('products' . $languageId, 60, function () use ($languageId) {
            try {
                // Select only necessary columns
                return Product::where('language_id', $languageId)
                    ->select('name', 'description','price','tags','code')
                    ->paginate(12);
            } catch (\Exception $e) {
                // Log error and return empty array
                \Log::error('Error fetching products: ' . $e->getMessage());
                return [];
            }
        });
        // Assuming $this->sendResponse() method is defined elsewhere
        return $this->sendResponse($products, 'Products fetched successfully.');
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
           // Validate the request data
           $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:products',
            'description' => 'required|string',
            'price' => 'required|string',
            'tags' => 'required|string',
            'code' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'language_id' => 'required|exists:languages,id',
        ]);

        // If validation fails, return error response
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
      // Save the image URL to the database
    $product = Product::create([
        'name' => $request->name, // or any other relevant data
        'language_id'=>$request->language_id,
        'description' => $request->description,
        'price' => $request->price,
        'tags' => $request->tags,
        'code' => $request->code,
        'category_id' => $request->category_id,
    ]);
        // Return success response
        return $this->sendResponse($product,'Product created successfully.');
    
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
