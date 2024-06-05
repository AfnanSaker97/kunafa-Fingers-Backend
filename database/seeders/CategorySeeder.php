<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryTranslations::create(['category_id'=>'1','name' => 'Popular', 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'2','name' => 'Kunafa Plates', 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'3','name' => 'Kunafa Crown', 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'4','name' => 'Kunafa Fingers' , 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'5','name' => 'Baklava' , 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'6','name' => 'Cake' , 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'7','name' => 'Turkish Delights' , 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'8','name' => 'Ice Cream' , 'language_id' => '1']);
    }
}
