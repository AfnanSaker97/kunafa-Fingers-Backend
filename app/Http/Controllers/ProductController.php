<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductLog;
use App\Models\FavoriteProduct;
use App\Models\productTranslations;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

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
        
            $languageId = $request->language_id;
        
            $products = Cache::remember('products' . $languageId, 60, function () use ($languageId) {
                try {
                    $products = Product::with([
                        'translations' => function ($query) use ($languageId) {
                            $query->select('product_id', 'name', 'description')->where('language_id', $languageId);
                        },
                        'category.translations' => function ($query) use ($languageId) {
                            $query->select('category_id', 'name')->where('language_id', $languageId);
                        },
                        'productsMedia:url_media,product_id', // Select only necessary columns for products media
                    ])->where('isActive',1)->select('id', 'category_id', 'price', 'new_price', 'tags', 'code')
                    ->get();
        
                   // Format the products
            return $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->translations->first()->name ?? '0',
                    'description' => $product->translations->first()->description ?? '0',
                    'price' => $product->price,
                    'new_price' => $product->new_price,
                    'tags' => $product->tags,
                    'code' => $product->code,
                    'category' => $product->category->translations,
                    'productsMedia' => $product->productsMedia,
                ];
            });
                } catch (\Exception $e) {
                    // Log error and return empty array
                    return response()->json(['error' =>  $e->getMessage()], 500);
                }
            });
        
            return $this->sendResponse($products, 'Products fetched successfully.');
        }




    public function getProductsUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'language_id' => 'required|exists:languages,id',
        ]);
       
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
    
        // Retrieve categories data
        $languageId = $request->language_id;
        $products = Cache::remember('productsUser' . $languageId, 60, function () use ($languageId) {
        try {
            $products = Product::with([
                'translations' => function ($query) use ($languageId) {
                    $query->select('product_id', 'name', 'description')->where('language_id', $languageId);
                },
                'category.translations' => function ($query) use ($languageId) {
                    $query->select('category_id', 'name')->where('language_id', $languageId);
                },
                'productsMedia:url_media,product_id', // Select only necessary columns for products media
                'FavoriteProduct:is_favorite,product_id',
                ])->where('isActive',1)->select('id', 'category_id', 'price', 'new_price', 'tags', 'code')
                ->get();
                return $products->map(function ($product) {
                    return [
                        'id' => $product->id,
                        'name' => $product->translations->first()->name ?? '0',
                        'description' => $product->translations->first()->description ??'0' ,
                        'price' => $product->price,
                        'new_price' => $product->new_price,
                        'tags' => $product->tags,
                        'code' => $product->code,
                        'category' => $product->category->translations,
                        'FavoriteProduct' => $product->FavoriteProduct,
                        'productsMedia' => $product->productsMedia,
                       
                    ];
                });


            } catch (\Exception $e) {
                // Log error and return empty array
                return response()->json(['error' =>  $e->getMessage()], 500);
              
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
            'name_en' => 'required|string|max:255',
            'name_zh' => 'required|string|max:255',
            'name_ms' => 'required|string|max:255',

            'description_en' => 'required|string',
            'description_zh' => 'required|string',
            'description_ms' => 'required|string',
            'price' => 'required|string',
            'new_price' => 'nullable|string',
            'tags' => 'required|string',
            'code' => 'required|string',
            'category_id' => 'required|exists:categories,id',
           
        ]);

        // If validation fails, return error response
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
      // Save the image URL to the database
    $product = Product::create([
      //   // or any other relevant data
        'price' => $request->price,
        'new_price' => $request->new_price?? '0',
        'tags' => $request->tags,
        'code' => $request->code,
        'category_id' => $request->category_id,
    ]);

      // Create the product translations
      $translations = [
        ['language_id' =>1, 'name' => $request->name_en, 'description' => $request->description_en],
        ['language_id' => 2, 'name' => $request->name_zh, 'description' => $request->description_zh],
        ['language_id' => 3, 'name' => $request->name_ms, 'description' => $request->description_ms],
    ];

    foreach ($translations as $translation) {
        $product->translations()->create($translation);
    }

      Cache::forget('productsUser');
      Cache::forget('products');

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
            $products = Product::with([
                'translations' => function ($query) use ($languageId) {
                    $query->select('product_id', 'name', 'description')->where('language_id', $languageId);
                },
                'category.translations' => function ($query) use ($languageId) {
                    $query->select('category_id', 'name')->where('language_id', $languageId);
                },
                'productsMedia:url_media,product_id', // Select only necessary columns for products media
                ]) ->where('category_id', $categoryId)
                ->where('isActive',1)
                ->select('id', 'category_id', 'price', 'new_price', 'tags', 'code')
                ->get();

                return $products->map(function ($product) {
                    return [
                        'id' => $product->id,
                        'name' => $product->translations->first()->name ?? '0',
                        'description' => $product->translations->first()->description ??'0' ,
                        'price' => $product->price,
                        'new_price' => $product->new_price,
                        'tags' => $product->tags,
                        'code' => $product->code,
                        'category' => $product->category->translations,
                        'productsMedia' => $product->productsMedia,
                       
                    ];
                });

    
                } catch (\Exception $e) {
                    \Log::error('Error fetching products: ' . $e->getMessage());
                    return collect(); // Return an empty collection on error
                }
            });

            // Assuming $this->sendResponse() method is defined elsewhere
            return $this->sendResponse($products, 'Products fetched successfully.');
        
    }

    public function getProductByCategory(Request $request)
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
        $products = Product::with([
            'translations' => function ($query) use ($languageId) {
                $query->select('product_id', 'name', 'description')->where('language_id', $languageId);
            },
            'category.translations' => function ($query) use ($languageId) {
                $query->select('category_id', 'name')->where('language_id', $languageId);
            },
            'productsMedia:url_media,product_id', // Select only necessary columns for products media
            'FavoriteProduct:is_favorite,product_id',
            ]) ->where('category_id', $categoryId)
            ->where('isActive',1)
            ->select('id', 'category_id', 'price', 'new_price', 'tags', 'code')
            ->get();

            return $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->translations->first()->name ?? '0',
                    'description' => $product->translations->first()->description ??'0' ,
                    'price' => $product->price,
                    'new_price' => $product->new_price,
                    'tags' => $product->tags,
                    'code' => $product->code,
                    'category' => $product->category->translations,
                   'FavoriteProduct' => $product->FavoriteProduct,
                    'productsMedia' => $product->productsMedia,
                   
                ];
            });


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
            $product = Product::with([
                'translations' => function ($query) use ($languageId) {
                    $query->select('product_id', 'name', 'description')->where('language_id', $languageId);
                },
                'category.translations' => function ($query) use ($languageId) {
                    $query->select('category_id', 'name')->where('language_id', $languageId);
                },
                'productsMedia' => function ($query) {
                    $query->select('url_media', 'product_id'); // Select only necessary columns for products media
                },
            ])
            ->where('id', $productId)
            ->select('id', 'category_id', 'price', 'new_price', 'tags', 'code')
            ->firstOrFail(); // Use firstOrFail to handle missing product

            return [
                'id' => $product->id,
                'name' => optional($product->translations->first())->name ?? '0',
                'description' => optional($product->translations->first())->description ?? '0',
                'price' => $product->price,
                'new_price' => $product->new_price,
                'tags' => $product->tags,
                'code' => $product->code,
                'category' =>$product->category->translations,
                'productsMedia' => $product->productsMedia,
            ];
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
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
    // Validate the request
    $validator = Validator::make($request->all(), [
    'language_id' => 'required|exists:languages,id',
   
      ]);

    if ($validator->fails()) {
    return $this->sendError('Validation Error.', $validator->errors()->all());
      }

      $query = $request->input('query');
      $categoryId = $request->input('category_id'); //  // Add category to the request
      $languageId = $request->input('language_id'); // Add language to the request
      $userId = Auth::guard('sanctum')->user()->id ?? null;
   
        try {
            $products = Product::with([
                'translations' => function ($query) use ($languageId) {
                    $query->select('product_id', 'name', 'description')->where('language_id', $languageId);
                },
                'category.translations' => function ($query) use ($languageId) {
                    $query->select('category_id', 'name')->where('language_id', $languageId);
                },
            ])
            ->whereHas('translations', function ($q) use ($query, $languageId) {
                $q->where('language_id', $languageId)
                  ->where(function ($q) use ($query) {
                      $q->where('name', 'LIKE', "%{$query}%")
                        ->orWhere('description', 'LIKE', "%{$query}%");
                  });
            })
            ->when($categoryId, function ($q) use ($categoryId) {
                $q->where('category_id', $categoryId);
            })
            ->where('isActive',1)
            ->paginate(10);
    
            $products = $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => optional($product->translations->first())->name ?? '0',
                    'description' => optional($product->translations->first())->description ?? '0',
                    'price' => $product->price,
                    'new_price' => $product->new_price,
                    'tags' => $product->tags,
                    'code' => $product->code,
                    'category' => $product->category->translations,
                ];
            });

       // Check if only one product is found
       if ($userId && $products->isNotEmpty()) {
        $productId = $products->first()['id']; // Access the 'id' directly
        ProductLog::create([
            'user_id' => $userId, 
            'product_id' => $productId,
        ]);
    }
   
      return $this->sendResponse($products, 'Product fetched successfully.');
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
    }




    
public function RandomProduct(Request $request)
{
    // Validate the request
    $validator = Validator::make($request->all(), [
        'language_id' => 'required|exists:languages,id',
    ]);

    if ($validator->fails()) {
        return $this->sendError('Validation Error.', $validator->errors()->all());
    }

    // Retrieve categories data
    $languageId = $request->language_id;
    $products = Cache::remember('products_random_' . $languageId, 60, function () use ($languageId) {
        try {
            $products = Product::with([
                'translations' => function ($query) use ($languageId) {
                    $query->select('product_id', 'name', 'description')->where('language_id', $languageId);
                },
                'category.translations' => function ($query) use ($languageId) {
                    $query->select('category_id', 'name')->where('language_id', $languageId);
                },
                'productsMedia:url_media,product_id', // Select only necessary columns for products media
            ])->where('isActive',1)
            ->inRandomOrder()
            ->select('id', 'category_id', 'price', 'new_price', 'tags', 'code')
            ->get();

            return $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->translations->first()->name ?? '0',
                    'description' => $product->translations->first()->description ??'0' ,
                    'price' => $product->price,
                    'new_price' => $product->new_price,
                    'tags' => $product->tags,
                    'code' => $product->code,
                    'category' => $product->category->translations,
                   
                ];
            });
           
        } catch (\Exception $e) {
            // Log error and return empty array
            return response()->json(['error' => $e->getMessage()], 500);
        }
    });

    // Assuming $this->sendResponse() method is defined elsewhere
    return $this->sendResponse($products, 'Products fetched successfully.');
}
}
