<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'order_date',
        'total_price',
        'user_id',
        'address_id',
    ];


    public function CartItems()
    {
        return $this->hasMany(CartItem::class);
    }

     // An order belongs to a user
     public function user()
     {
         return $this->belongsTo(User::class);
     }
 
     // An order belongs to an address
     public function address()
     {
         return $this->belongsTo(Address::class);
     }
}
