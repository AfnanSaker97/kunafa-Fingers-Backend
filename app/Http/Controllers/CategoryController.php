<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Models\Category;
use App\Models\CategoryTranslations;
use Validator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
class CategoryController extends BaseController
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
        $categories = Cache::remember('categories_' . $languageId, 60, function () use ($languageId) {
            try {
                $categories = Category::with([
                    'translations' => function ($query) use ($languageId) {
                        $query->where('language_id', $languageId)
                              ->select('category_id', 'name'); // Ensure the correct columns are selected
                    }
                ])->get();
    
                // Format the categories data if needed
                return $categories->map(function ($category) {
                    return [
                        'id' => $category->id,
                        'name' => optional($category->translations->first())->name ?? '0',
                    ];
                });
            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['error' => $e->getMessage()], 500);
            }
        });
        // Assuming $this->sendResponse() method is defined elsewhere
        return $this->sendResponse($categories, 'Categories fetched successfully.');
    }




    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories',
           'language_id' => 'required|exists:languages,id',
        ]);

        // If validation fails, return error response
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }

      // Save the image URL to the database
    $category = Category::create([
        'name' => $request->name, // or any other relevant data
        'language_id'=>$request->language_id,
    ]);
        // Return success response
        return $this->sendResponse($category,'Category created successfully.');
    }
    
}
