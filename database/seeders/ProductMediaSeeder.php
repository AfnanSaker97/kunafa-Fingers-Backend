<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductMedia;
class ProductMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductMedia::create(['product_id' => '1', 'url_media' => 'https://kunafa-fingers-backend.tecrek.com/public/ProductMedia/1717327216.jpg']);
        ProductMedia::create(['product_id' => '2', 'url_media' => 'https://kunafa-fingers-backend.tecrek.com/public/ProductMedia/1717327339.jpg']);
        ProductMedia::create(['product_id' => '3', 'url_media' => 'https://kunafa-fingers-backend.tecrek.com/public/ProductMedia/1717327351.jpg']);
        ProductMedia::create(['product_id' => '4', 'url_media' => 'https://kunafa-fingers-backend.tecrek.com/public/ProductMedia/1717327363.jpg']);
        ProductMedia::create(['product_id' => '5', 'url_media' => 'https://kunafa-fingers-backend.tecrek.com/public/ProductMedia/1717327772.jpg']);
       // ProductMedia::create(['product_id' => '3', 'url_media' => 'ms']);
    }
}
