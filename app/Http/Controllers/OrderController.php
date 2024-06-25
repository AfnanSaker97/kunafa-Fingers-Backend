<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\CartItem;
use App\Models\DiscountCode;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Validator;
use Auth;
use Carbon\Carbon;
use App\Http\Controllers\DiscountCodeController;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrdersExport;
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


            $discount = null;
            $price_discount = $cartItemsTotal; // default to the total price
        
            if ($request->code) {
                $discount = DiscountCode::where([
                    ['code', $request->code],
                    ['user_id', $user->id],
                    ['valid', 1],
                    ['expire', '>', $date]
                ])->first();
        
                if ($discount) {
                    $price_discount = DiscountCodeController::applyDiscount($cartItemsTotal, $discount->discount_percentage);
                }
            }
  
            $order = new Order();
            $order->user_id = $user->id;
            $order->address_id = $request->address_id;
            $order->order_date = $date;
            $order->total_price =  $cartItemsTotal;
            $order->price_after_discount = $price_discount;
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



    public function getAllOrderUser(Request $request)
    {
        // Get the authenticated user
        $user =Auth::user();
    // Fetch orders with cart items for the user's cart and sort them by creation date
    $orders = Order::with('CartItems')
      ->where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->get();

    // Filter orders to only include those with cart items
    $filteredOrders = $orders->filter(function ($order) {
        return $order->cartItems->isNotEmpty();
    });
    return $this->sendResponse($filteredOrders, 'order fetched successfully.');
      

    }


    public function OrderDetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required|exists:orders,id',  
            ]);
           
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors()->all());       
            }
            $order = Order::with(['user','address','CartItems'])->findOrFail($request->order_id);
            return $this->sendResponse($order, 'order fetched successfully.');
        }




        

    public function SortOrder(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'startDate' => 'required|date', // Assuming you want the start date to be a required date
            'endDate' => 'required|date',
        ]);
        
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
        
        $startDate = $request->startDate; // Get the start date from the request
        $endDate = $request->endDate;  // Get the current date and format it
        
        $orders = Order::with(['user', 'address', 'CartItems'])
                ->whereDate('created_at', '>=', $startDate)
                ->whereDate('created_at', '<=', $endDate)
                ->orderByDesc('created_at')
                ->get();
        
      return $this->sendResponse($orders, 'order fetched successfully.');
    }




    public function filterOrder(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'status_id' => 'required|in:1,2,3,4,5,6', // Add validation for allowed status_id values
        ]);
        
        if ($validated->fails()) {
            return ApiResponseClass::validateResponse($validated->errors()->all());
        }
        
        $status = [
            1 => 'pending',
            2 => 'Processing',
            3 => 'confirmed',
            4 => 'Shipped',
            5 => 'Delivered',
            6 => 'Cancelled',
        ];
        $orders = Order::with(['user', 'CartItems', 'address'])
        ->where('status', $status[$request->status_id])
        ->get();

        return $this->sendResponse($orders, 'order fetched successfully.');
    }

    public function export() 
    {
        return Excel::download(new OrdersExport, 'orders.xlsx');
    }

}
