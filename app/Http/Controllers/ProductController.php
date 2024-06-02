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
                return Product::with(['category','productsMedia'])
                ->where('language_id', $languageId)
                ->select('id', 'name', 'description', 'price', 'tags', 'code','category_id')
                ->get();
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
   
        public function show(Request $request)
        {
            // Validate the request
            $validator = Validator::make($request->all(), [
                'language_id' => 'required|exists:languages,id',
                'category_id' => 'required|exists:categories,id',
            ]);
    
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors()->all());
            }
    
            $languageId = $request->input('language_id');
            $categoryId = $request->input('category_id');
            $cacheKey = 'products_' . $languageId . '_' . $categoryId;
    
           // Retrieve products with caching
       $products = Cache::remember($cacheKey, 60, function () use ($languageId, $categoryId) {
        try {
            return Product::with(['category','productsMedia'])
            ->where('language_id', $languageId)
            ->where('category_id', $categoryId)
            ->select('id', 'name', 'description', 'price', 'tags', 'code','category_id')
            ->get();
                } catch (\Exception $e) {
                    \Log::error('Error fetching products: ' . $e->getMessage());
                    return collect(); // Return an empty collection on error
                }
            });

            // Assuming $this->sendResponse() method is defined elsewhere
            return $this->sendResponse($products, 'Products fetched successfully.');
        
    }

    public function ProductByID(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'language_id' => 'required|exists:languages,id',
            'product_id' => 'required|exists:products,id',
        ]);
    
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all());
        }
    
        $languageId = $request->input('language_id');
        $productId = $request->input('product_id');
        $cacheKey = 'product_' . $languageId . '_' . $productId;
    
        // Retrieve product with caching
        $product = Cache::remember($cacheKey, 60, function () use ($languageId, $productId) {
            try {
                return Product::with(['category', 'productsMedia'])
                    ->where('language_id', $languageId)
                    ->where('id', $productId)
                    ->select('id', 'name', 'description', 'price', 'tags', 'code','category_id')
                    ->first();
            } catch (\Exception $e) {
                \Log::error('Error fetching product: ' . $e->getMessage());
                return null; // Return null on error
            }
        });
    
        return $this->sendResponse($product, 'Product fetched successfully.');
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



    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%{$query}%")
                           ->orWhere('description', 'LIKE', "%{$query}%")
                           ->paginate(10);

      return $this->sendResponse($products, 'Product fetched successfully.');
    }
}
