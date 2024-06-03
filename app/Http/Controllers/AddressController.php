<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use MatanYadaev\EloquentSpatial\Objects\Point;
class AddressController extends BaseController
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
        try {
            $validator =Validator::make($request->all(), [
                'full_name'=> 'required',
                'address_line_1' => 'required',
                'address_line_2' => 'nullable',
                'city'=> 'required|string',
                'country' => 'nullable|string',
                'postcode' => 'required',
                'contact_number'=> 'required',
               // 'geo_location.latitude' => 'nullable|between:-90,90',
              //  'geo_location.longitude' => 'nullable|between:-180,180',

            ]); 
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors()->all());       
            }
          //  $latitude = $request->input('geo_location.latitude');
            //$longitude = $request->input('geo_location.longitude');
            $user = Auth::user();
            $address = Address::create([
                'full_name' => $request->full_name,
                'user_id'=> $user->id,
                'email' => $user->email,
                'address_line_1' => $request->address_line_1,
                'address_line_2' => $request->address_line_2?? '0',
                'city' => $request->city,
                'country' => $request->country?? '0',
                'postcode' => $request->postcode,
                'contact_number' => $request->contact_number,
               // 'geo_location' => $latitude && $longitude ? new Point($latitude, $longitude) : null,
            ]);
            
        return $this->sendResponse($address,'Address created successfully.');
    
    } catch (\Throwable $th) {
        return response()->json([
            'status' => false,
            'message' => $th->getMessage()
        ], 500); 
    
    } 


    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $validator =Validator::make($request->all(), [
            'id' => 'required|exists:addresses',
            
        ]);
       
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
        $address = Address::find($request->id);
        return $this->sendResponse($address,'Address fetched successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $validator =Validator::make($request->all(), [
                'id' => 'required|exists:addresses', 
                'full_name'=> 'nullable',
                'address_line_1' => 'nullable',
                'address_line_2' => 'nullable',
                'city'=> 'nullable|string',
                'country' => 'nullable|string',
                'postcode' => 'nullable',
                'contact_number'=> 'nullable',
                'email'=> 'nullable',
               // 'geo_location.latitude' => 'nullable|between:-90,90',
              //  'geo_location.longitude' => 'nullable|between:-180,180',

            ]); 
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors()->all());       
            }
            $address = Address::findOrFail($request->id);
            // Update the address fields if they are present in the request
            if ($request->filled('full_name')) {
                $address->full_name = $request->full_name;
            }
            if ($request->filled('address_line_1')) {
                $address->address_line_1 = $request->address_line_1;
            }
            if ($request->filled('address_line_2')) {
                $address->address_line_2 = $request->address_line_2;
            }
            if ($request->filled('city')) {
                $address->city = $request->city;
            }
            if ($request->filled('country')) {
                $address->country = $request->country;
            }
            if ($request->filled('postcode')) {
                $address->postcode = $request->postcode;
            }
            if ($request->filled('contact_number')) {
                $address->contact_number = $request->contact_number;
            }

            if ($request->filled('email')) {
                $address->email = $request->email;
            }
        // Save the updated address
        $address->save();

        return $this->sendResponse($address, 'Address updated successfully.');

    } catch (\Throwable $th) {
        return response()->json([
            'status' => false,
            'message' => $th->getMessage()
        ], 500); 
    }
}

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $validator =Validator::make($request->all(), [
            'id' => 'required|exists:addresses',
            
        ]);
       
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
        $address = Address::find($request->id);
        $address->delete();
        return $this->sendResponse($address,'Address deleted successfully.');
    }
}
