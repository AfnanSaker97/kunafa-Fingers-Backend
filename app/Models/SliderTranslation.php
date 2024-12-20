<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderTranslation extends Model
{
    use HasFactory;
    protected $fillable = [
        'text1',
        'text2',
        'slider_id',
        'language_id'
    ];
}
