<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Models\Category;
use Validator;
use Illuminate\Support\Facades\Cache;
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
      //  $categories = Cache::remember('categories_' . $languageId, 60, function () use ($languageId) {
            try {
                // Select only necessary columns
                $categories= Category::where('language_id', $languageId)
                    ->select('name', 'image')
                    ->get();
            } catch (\Exception $e) {
                // Log error and return empty array
                \Log::error('Error fetching categories: ' . $e->getMessage());
                return [];
            }
   //     });
        // Assuming $this->sendResponse() method is defined elsewhere
        return $this->sendResponse($categories, 'Categories fetched successfully.');
    }




    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories',
           // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for an image upload
            'language_id' => 'required|exists:languages,id',
        ]);

        // If validation fails, return error response
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
   /* $image = $request->file('image');
    $imageName = time().'.'.$image->getClientOriginalExtension();

    // Save the image to the public disk
    Storage::disk('public')->put($imageName, file_get_contents($image));

    // Get the URL of the uploaded image
    $imageUrl = Storage::disk('public')->url($imageName);
*/
      // Save the image URL to the database
    $category = Category::create([
        'name' => $request->name, // or any other relevant data
        'language_id'=>$request->language_id,
      //  'image' => $imageUrl,
    ]);
        // Return success response
        return $this->sendResponse($category,'Category created successfully.');
    }
    
}
