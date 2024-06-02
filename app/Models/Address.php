<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table ='addresses';
    protected $fillable = ['user_id', 'address_line_1','address_line_2','email','country','city',
    'postcode','contact_number','geo_location','full_name'];


    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
