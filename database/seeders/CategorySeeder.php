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
        Category::create(['name' => 'أطباق كنافة', 'language_id' => '1']);
        Category::create(['name' => 'كنافة كراون', 'language_id' => '1']);
        Category::create(['name' => 'اصابع كنافة', 'language_id' => '1']);
        Category::create(['name' => 'البقلاوة' , 'language_id' => '1']);
    }
}
