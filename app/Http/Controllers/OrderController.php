<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Validator;
use Auth;
use Carbon\Carbon;
class OrderController extends BaseController
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
        $validator = Validator::make($request->all(), [
            "array_product_ids" => "sometimes|array|min:1",
            "array_product_ids.*" => "required",
            'code' => 'sometimes|nullable|exists:discount_codes,code',
            'address_id' => 'required|exists:addresses,id',
            ]);
           
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors()->all());       
            }

            $date = Carbon::now()->format('Y-m-d H:i:s');
            $user = Auth::user();
         
            $cartItems = $user->CartItems()->whereIn('product_id', $request->array_product_ids)->where('isChecked', 0)->get();
       
            if ($cartItems->isEmpty()) {
                $msg ='Nothing in the cart!'; 
                return $this->sendResponse([],$msg);
             }

             $cartItemsTotal = CartItem::where('isChecked', 0)->where('user_id', $user->id)
            ->sum('sub_total_price');
            $order = new Order();
            $order->user_id = $user->id;
            $order->address_id = $request->address_id;
            $order->order_date = $date;
            $order->total_price =  $cartItemsTotal;
            $order->price_after_discount =  $cartItemsTotal;
            $order->save();
            foreach ($cartItems as $cartItem) 
            {
            $cartItem->order_id = $order->id;

            $cartItem->Save();
            }
            return $this->sendResponse($order, 'order added successfully.');
        }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
