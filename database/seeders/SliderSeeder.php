<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;
use App\Models\SliderTranslation;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     /*   Slider::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Slider/1717935105.jpg']);
        Slider::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Slider/1717935177.jpg']);
        Slider::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Slider/1717936003.webp']);
        Slider::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Slider/1717936133.jpg']);
        Slider::create(['url_media'=>'https://kunafa-fingers-backend.tecrek.com/public/Slider/1717936133.jpg']);
  
        SliderTranslation::create(['slider_id'=>'1','text1' => 'Check the', 'text2' => 'new range of alkeir sweets','language_id' => '1']);
       
        SliderTranslation::create(['slider_id'=>'2','text1' => '0', 'text2' => 'semiramis sweets are available at ibaklawa','language_id' => '1']);
       
        SliderTranslation::create(['slider_id'=>'3','text1' => 'Orders over £15', 'text2' => 'Get 20% Discount on Coffee & Hot Drinks','language_id' => '1']);
       
        SliderTranslation::create(['slider_id'=>'4','text1' => 'iBaklawa', 'text2' => 'OFFERS','language_id' => '1']);
       
        SliderTranslation::create(['slider_id'=>'5','text1' => 'Use Coupon FIRSTORDER', 'text2' => 'Enjoy 5% discount on your first order','language_id' => '1']);
      */ 


      SliderTranslation::create(['slider_id'=>'1','text1' => 'افحص ال', 'text2' => 'مجموعة جديدة من حلويات الكير','language_id' => '2']);
       
      SliderTranslation::create(['slider_id'=>'2','text1' => '0', 'text2' => 'حلويات سميراميس متوفرة في ايباكلاوة','language_id' => '2']);
     
      SliderTranslation::create(['slider_id'=>'3','text1' => 'الطلبات التي تزيد قيمتها عن 15 جنيهًا إسترلينيًا', 'text2' => 'احصل على خصم 20% على القهوة والمشروبات الساخنة','language_id' => '2']);
     
      SliderTranslation::create(['slider_id'=>'4','text1' => 'بقلاوة', 'text2' => 'OFFERS','language_id' => '1']);
     
      SliderTranslation::create(['slider_id'=>'5','text1' => 'استخدم الكوبون FIRSTORDER', 'text2' => 'استمتع بخصم 5% على طلبك الأول','language_id' => '2']);
   
  
    }
}
