<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;
class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Create records for Chinese, Arabic, and Malay languages
       Language::create(['name' => 'English', 'code' => 'EN']);
       Language::create(['name' => 'Arabic', 'code' => 'AR']);
       Language::create(['name' => 'Chinese', 'code' => 'zh']);
       Language::create(['name' => 'Malay', 'code' => 'ms']);
    }
}
