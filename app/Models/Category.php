<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'url_media'
    ];
    public function translations()
    {
        return $this->hasMany(CategoryTranslations::class);
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

}
