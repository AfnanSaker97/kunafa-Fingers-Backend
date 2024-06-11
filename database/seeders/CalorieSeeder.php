<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Calorie;
class CalorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '1']);
        Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '1']);
        Calorie::create(['key'=>'Cheese','value' => '75', 'language_id' => '1','product_id' => '1']);
        Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '1']);
        Calorie::create(['key'=>'Total Calories in 100 grams','value' => '389', 'language_id' => '1','product_id' => '1']);
   
   
    }
}
