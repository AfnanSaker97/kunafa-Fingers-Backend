<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Validator;
use Auth;
class CartItemController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = CartItem::paginate(10);
      
        return $this->sendResponse($cartItems, 'CartItem fetched successfully.');
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
        'quantity' => 'required|numeric',
        'product_id' => 'required|exists:products,id',
        'note' => 'sometimes|string|nullable',
        ]);
       
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
        // Retrieve the product and current user ID
        $product = Product::find($request->product_id);
        $userId = Auth::id();
        if (!$product) {
            return $this->sendError('message', 'The selected product id is invalid.');
        }

         // Determine the price to use
       $price = $product->new_price ?: $product->price;
        // Check if the product is already in the cart
        $existingCartItem = CartItem::where([
          ['product_id', $request->product_id],
          ['isChecked', 0],
          ['user_id', $userId]
        ])->first();

      
    try {
        DB::beginTransaction();

        if ($existingCartItem) {
            // Update the existing cart item
            $existingCartItem->quantity +=  $request->quantity;
             // Check if the quantity is zero or less
             if ($existingCartItem->quantity <= 0) {
                $existingCartItem->delete();
                DB::commit();
                return $this->sendResponse($existingCartItem, 'Product removed from cart successfully.');
            }
            $existingCartItem->price =$price;
            $existingCartItem->note = $request->note ?? $existingCartItem->note;
            $existingCartItem->sub_total_price =$price * $existingCartItem->quantity;
            $existingCartItem->save();

            $cartItem = $existingCartItem;
        } else {
            // Create a new cart item
            $cartItem = CartItem::create([
                'quantity' =>  $request->quantity,
                'user_id' => $userId,
                'product_id' => $request->product_id,
                'price' => $price,
                'sub_total_price' =>$price * $request->quantity,
                'note' => $request->note?? '0',
            ]);
    
        }

   

        DB::commit();

        return $this->sendResponse($cartItem, 'Product added to cart successfully.');
    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(CartItem $cartItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CartItem $cartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CartItem $cartItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartItem $cartItem)
    {
        //
    }
}
