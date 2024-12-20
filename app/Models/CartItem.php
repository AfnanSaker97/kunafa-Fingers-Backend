<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $table ='cart_items';
    protected $fillable = ['user_id', 'product_id','quantity','price','sub_total_price','isChecked','note','order_id'];


    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

  
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }


  
}
