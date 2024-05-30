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
        Category::create(['name' => 'Popular', 'language_id' => '1']);
        Category::create(['name' => 'Kunafa Plates', 'language_id' => '1']);
        Category::create(['name' => 'Kunafa Crown', 'language_id' => '1']);
        Category::create(['name' => 'Kunafa Fingers' , 'language_id' => '1']);
         Category::create(['name' => 'Baklava' , 'language_id' => '1']);
         Category::create(['name' => 'Cake' , 'language_id' => '1']);
         Category::create(['name' => 'Turkish Delights' , 'language_id' => '1']);
         Category::create(['name' => 'Ice Cream' , 'language_id' => '1']);
    }
}
