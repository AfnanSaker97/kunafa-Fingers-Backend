<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Create records for Chinese, Arabic, and Malay languages
     Lang::create(['name' => 'Arabic', 'code' => 'ar']);
     Lang::create(['name' => 'Chinese', 'code' => 'zh']);
     Lang::create(['name' => 'Malay', 'code' => 'ms']);
    }
}
