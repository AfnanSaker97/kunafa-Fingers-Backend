<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' =>'Kunafa Cheese Original','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','price'=>'22.9','tags'=>'200g,Kunafa','code'=>'2222','category_id' => '1','language_id' => '1']);
    
        Product::create(['name' =>'Crunchy Cheese Slice','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','price'=>'22.9','tags'=>'200g,Kunafa','code'=>'2222','category_id' => '1','language_id' => '1']);
    
        Product::create(['name' =>'Kunafa Nutella','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','price'=>'22.9','tags'=>'200g,Kunafa','code'=>'2222','category_id' => '1','language_id' => '1']);
    
        Product::create(['name' =>' Kunafa Mix ','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','price'=>'22.9','tags'=>'200g,Kunafa','code'=>'2222','category_id' => '1','language_id' => '1']);
    

        Product::create(['name' =>'Pistachio Kunafa Finger ','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','price'=>'22.9','tags'=>'200g,Kunafa','code'=>'2222','category_id' => '1','language_id' => '1']);
    
        Product::create(['name' =>'Cheese Kunafa Finger','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','price'=>'22.9','tags'=>'200g,Kunafa','code'=>'2222','category_id' => '1','language_id' => '1']);
    


        Product::create(['name' =>'Kunafa Cheese Original','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','price'=>'22.9','tags'=>'200g,Kunafa','code'=>'2222','category_id' => '2','language_id' => '1']);
    

        Product::create(['name' =>'Kunafa Milk Chocolate','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','price'=>'22.9','tags'=>'200g,Kunafa','code'=>'2222','category_id' => '2','language_id' => '1']);
    
        Product::create(['name' =>'Kunafa Nutella','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','price'=>'22.9','tags'=>'200g,Kunafa','code'=>'2222','category_id' => '2','language_id' => '1']);
    

        Product::create(['name' =>'Kunafa Biscoff','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','price'=>'22.1','tags'=>'200g,Kunafa','code'=>'2222','category_id' => '2','language_id' => '1']);
    
        Product::create(['name' =>'Kunafa Mix','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','price'=>'22.9','tags'=>'200g,Kunafa','code'=>'2222','category_id' => '2','language_id' => '1']);
    
/*

        Product::create(['name' =>'Kunafa cream Slice','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','price'=>'22.9','tags'=>'200g,Kunafa','code'=>'2222','category_id' => '2','language_id' => '1']);
    
        Product::create(['name' =>'Kunafa Cheese Original','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','price'=>'25.9','tags'=>'200g,Kunafa','code'=>'2222','category_id' => '2','language_id' => '1']);
    */
   
    }
}
