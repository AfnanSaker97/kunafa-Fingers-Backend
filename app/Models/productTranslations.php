<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productTranslations extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'language_id', 'name', 'description'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
