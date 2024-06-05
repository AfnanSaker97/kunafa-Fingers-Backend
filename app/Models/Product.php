<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Auth;
class Product extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $fillable = [
       
        'price',
        'new_price',
        'isActive',
        'tags',
        'code',
        'category_id',
        'language_id'
   
    ];

    public function translations()
    {
        return $this->hasMany(productTranslations::class);
    }
 

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }


   public function productsMedia()
   {
       return $this->hasMany(ProductMedia::class);
   }


   public function FavoriteProduct()
   {
    return $this->hasMany(FavoriteProduct::class)->where('user_id', Auth::id());
   }
 
}
