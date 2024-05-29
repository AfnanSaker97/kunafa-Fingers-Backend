<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Models\Category;
use Validator;
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
                // Select only necessary columns
                return Category::where('language_id', $languageId)
                    ->select('name', 'image')
                    ->paginate(12);
            } catch (\Exception $e) {
                // Log error and return empty array
                \Log::error('Error fetching categories: ' . $e->getMessage());
                return [];
            }
        });
        // Assuming $this->sendResponse() method is defined elsewhere
        return $this->sendResponse($categories, 'Categories fetched successfully.');
    }




    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for an image upload
            'language_id' => 'required|exists:languages,id',
        ]);

        // If validation fails, return error response
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
        // Create the category
        $category = new Category();
        $category->name = $request->name;
        $category->image = $request->file('image')->store('category_images'); // Example of storing uploaded image
        $category->language_id = $request->language_id;
        $category->save();

        // Return success response
        return $this->sendResponse($data,'Category created successfully.');
    }
    
}
