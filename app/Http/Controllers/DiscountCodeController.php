<?php

namespace App\Http\Controllers;

use App\Models\DiscountCode;
use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use Carbon\Carbon;
class DiscountCodeController extends BaseController
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
           'code' => 'required|string|max:255',
           'user_id' => 'required|exists:users,id',
           'discount_percentage' => 'required',
           'expire' => 'required',
           'remark' => 'nullable|string|max:255',
        ]);

        // If validation fails, return error response
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
    
      $discountCode = DiscountCode::create([
        'code' => $request->code,
        'user_id'=>$request->user_id,
        'discount_percentage'=>$request->discount_percentage,
        'expire'=>$request->expire,
        'remark'=>$request->remark?? '0',
    ]);
    // Return success response
    return $this->sendResponse($discountCode,'Discount Code created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(DiscountCode $discountCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DiscountCode $discountCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DiscountCode $discountCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DiscountCode $discountCode)
    {
        //
    }


        
     public function verfiyCode(Request $request)
       { 
        try { 
            $validator = Validator::make($request->all(), [    
            'code' => 'required',
        ]);
        
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
        $userId = Auth::id();
        $date = Carbon::now()->format('Y-m-d');   
        $discount = DiscountCode::where([
                ['code', $request->code],
                ['user_id', $userId],
                ['valid', 1],
                ['expire', '>', $date]
            ])->first();

            if(!$discount)
            {
                return $this->sendError('The code is invalid',[]); 
            }
              // Calculate the cart total and the total after applying the discount
              $cartItemsTotal = $this->calculateCartTotal($userId);
              $totalAfterDiscount = $this->applyDiscount($cartItemsTotal, $discount->discount_percentage);
  
            return $this->sendResponse($totalAfterDiscount,'Discount applied successfully'); 
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }

}



  // Calculate the total of cart items
  private function calculateCartTotal($userId)
  {
      return CartItem::where('isChecked', 0)
          ->where('user_id', $userId)
          ->sum('sub_total_price');
  }

  // Apply the discount to the cart total
  private function applyDiscount($cartTotal, $discountPercentage)
  {
      $discountAmount = $cartTotal * ($discountPercentage / 100);
      return $cartTotal - $discountAmount;
  }

}