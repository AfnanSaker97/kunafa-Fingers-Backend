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
}
