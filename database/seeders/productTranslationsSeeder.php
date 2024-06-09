<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\productTranslations;
class productTranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        productTranslations::create(['name' =>'Kunafa Cheese Original','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','product_id' => '1','language_id' => '1']);
    
     productTranslations::create(['name' =>'Crunchy Cheese Slice','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','product_id' => '2','language_id' => '1']);
    
        productTranslations::create(['name' =>'Kunafa Nutella','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','product_id' => '3','language_id' => '1']);
    



        productTranslations::create(['name' =>' Kunafa Mix ','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','product_id' => '4','language_id' => '1']);
    

        productTranslations::create(['name' =>'Pistachio Kunafa Finger ','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','product_id' => '5','language_id' => '1']);
    
        productTranslations::create(['name' =>'Cheese Kunafa Finger','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','product_id' => '6','language_id' => '1']);
    


        productTranslations::create(['name' =>'Kunafa Cheese Original','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','product_id' => '7','language_id' => '1']);
    

        productTranslations::create(['name' =>'Kunafa Milk Chocolate','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','product_id' => '8','language_id' => '1']);
    
        productTranslations::create(['name' =>'Kunafa Nutella','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','product_id' => '9','language_id' => '1']);
    

        productTranslations::create(['name' =>'Kunafa Biscoff','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','product_id' => '10','language_id' => '1']);
    
      /*  productTranslations::create(['name' =>'Kunafa Mix','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.
        ','product_id' => '11','language_id' => '1']);
    */
    }
}
