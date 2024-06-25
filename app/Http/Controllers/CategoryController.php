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
                        'url_media' => $category->url_media ,
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
            'name_en' => 'required|string|max:255|unique:category_translations,name',
            'name_ar' => 'required|string|max:255|unique:category_translations,name',
            'name_zh' => 'required|string|max:255|unique:category_translations,name',
            'name_ms' => 'required|string|max:255|unique:category_translations,name',
            'url_media' => 'required|file',
        ]);

        // If validation fails, return error response
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
   // Handle the file upload
            if ($request->hasFile('url_media')) {
                $imageName = time() . '.' . $request->url_media->extension();
                $request->url_media->move(public_path('Category'), $imageName);
                $url = url('Category/' . $imageName);
             
            }
            
        // Save the image URL to the database
        $Category = Category::create([
          'url_media' => $url,
        ]);
        // Create the product translations
        $translations = [
            ['language_id' =>1, 'name' => $request->name_en],
            ['language_id' =>2, 'name' => $request->name_ar],
            ['language_id' => 3,'name' => $request->name_zh],
            ['language_id' => 4, 'name' => $request->name_ms],
        ];
        foreach ($translations as $translation) {
            $Category->translations()->create($translation);
        }
        // Return success response
        return $this->sendResponse($Category,'Category created successfully.');
    }



    public function update(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'url_media' => 'required|file',
        ]);

        // If validation fails, return error response
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
   // Handle the file upload
            if ($request->hasFile('url_media')) {
                $imageName = time() . '.' . $request->url_media->extension();
                $request->url_media->move(public_path('Category'), $imageName);
                $url = url('Category/' . $imageName);
             
            }
            // Find the category by ID
        $category = Category::find($request->category_id);
        $category->update([
            'url_media' => $url,
        ]);
        // Return success response
        return $this->sendResponse($category,'Category updated  successfully.');
    }

    

    
    public function destroy(Request $request)
    {
           // Validate the request data
           $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
        ]);
    
         // If validation fails, return error response
         if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all());
        }
        $category = Category::find($request->category_id);
        $category ->delete();
        return $this->sendResponse($product, 'category deleted successfully.');
    }
}
