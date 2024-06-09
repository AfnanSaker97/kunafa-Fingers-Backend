<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'isActive',
        'url_media'
    ];
    public function translations()
    {
        return $this->hasMany(SliderTranslation::class);
    }
}
