<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMedia extends Model
{
    use HasFactory;
    protected $table ='product_media';
    protected $fillable = [
        'url_media',
        'product_id',
      
   
    ];

    

}
