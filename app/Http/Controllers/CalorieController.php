<?php

namespace App\Http\Controllers;

use App\Models\Calorie;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use Illuminate\Support\Facades\Cache;
class CalorieController extends BaseController
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
          // Validate the request data
          $validator = Validator::make($request->all(), [
            'key' => 'required',
            'value' => 'required',
            'product_id' => 'required|exists:products,id',
            'language_id' => 'required|exists:languages,id',
        ]);

        // If validation fails, return error response
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }

        $Calorie = Calorie::create([
          'key' => $request->key,
          'value' => $request->value,
          'product_id' => $request->product_id,
          'language_id' => $request->language_id,
        ]);
        Cache::forget('productsUser');
        Cache::forget('products');
        // Return success response
        return $this->sendResponse($Calorie,'Calorie created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Calorie $calorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calorie $calorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
            // Validate the request data
            $validator = Validator::make($request->all(), [
                'calorie_id' => 'required|exists:calories,id',
                'key' => 'nullable',
                'value' => 'nullable',
            ]);
    
            // If validation fails, return error response
            if($validator->fails()){
                return $this->sendError('Validation Error.', $validator->errors()->all());       
            }
    
                // Find the category by ID
            $Calorie = Calorie::find($request->calorie_id);
            $Calorie->update([
                'key' => $request->key,
                'value' => $request->value,
            ]);
            Cache::forget('productsUser');
            Cache::forget('products');
            // Return success response
            return $this->sendResponse($Calorie,'Calorie updated  successfully.');
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
           // Validate the request data
           $validator = Validator::make($request->all(), [
          'calorie_id' => 'required|exists:calories,id',
        ]);
    
         // If validation fails, return error response
         if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all());
        }
        $calorie = calorie::find($request->calorie_id);
        $calorie ->delete();
        Cache::forget('productsUser');
        Cache::forget('products');
        return $this->sendResponse($calorie, 'calorie deleted successfully.');
    }
}
