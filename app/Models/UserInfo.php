<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip_address',
        'language',
        'user_agent',
        'request_time',
        'countryName',
        'regionName',
        'cityName',   
        'count',
    ];
}
