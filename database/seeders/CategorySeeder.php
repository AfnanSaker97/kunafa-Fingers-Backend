<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\CategoryTranslations;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    /*    Category::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Category/1717940722.jpg']);
        Category::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Category/1717940769.png']);
      
        Category::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Category/1717940813.jpg']);
        Category::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Category/1717940891.png']);
        Category::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Category/1717940939.png']);
        Category::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Category/1717940974.png']);
        Category::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Category/1717941003.png']);
        Category::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Category/1717941089.jpg']);
      

        Category::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Category/1717941003.png']);
        Category::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Category/1717941089.jpg']);
      




        CategoryTranslations::create(['category_id'=>'1','name' => 'Popular', 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'2','name' => 'Kunafa Plates', 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'3','name' => 'Kunafa Crown', 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'4','name' => 'Kunafa Fingers' , 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'5','name' => 'Baklava' , 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'6','name' => 'Cake' , 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'7','name' => 'Turkish Delights' , 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'8','name' => 'Ice Cream' , 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'9','name' => 'Milkshake' , 'language_id' => '1']);
        CategoryTranslations::create(['category_id'=>'10','name' => 'Beverage' , 'language_id' => '1']);
   */

  
   

   CategoryTranslations::create(['category_id'=>'1','name' => 'شائع', 'language_id' => '2']);
   CategoryTranslations::create(['category_id'=>'2','name' => 'أطباق كنافة', 'language_id' => '2']);
   CategoryTranslations::create(['category_id'=>'3','name' => 'كنافة كراون', 'language_id' => '2']);
   CategoryTranslations::create(['category_id'=>'4','name' => 'اصابع كنافة' , 'language_id' => '2']);
   CategoryTranslations::create(['category_id'=>'5','name' => 'البقلاوة' , 'language_id' => '2']);
   CategoryTranslations::create(['category_id'=>'6','name' => 'كيك' , 'language_id' => '2']);
   CategoryTranslations::create(['category_id'=>'7','name' => 'المسرات التركية' , 'language_id' => '2']);
   CategoryTranslations::create(['category_id'=>'8','name' => 'بوظة' , 'language_id' => '2']);
   CategoryTranslations::create(['category_id'=>'9','name' => 'مخفوق الحليب' , 'language_id' => '2']);
   CategoryTranslations::create(['category_id'=>'10','name' => 'المشروبات' , 'language_id' => '2']);

 }
}
