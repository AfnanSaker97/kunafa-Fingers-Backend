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
   /*     productTranslations::create(['name' =>'Kunafa Cheese Original' ,'description' =>'Kunafa Cheese Original is a traditional Middle Eastern dessert consisting of shredded phyllo dough layered with a sweet cheese filling, baked until golden brown, and soaked in syrup, providing a rich and indulgent treat with a perfect balance of crispy and creamy textures.

        ','product_id' => '1','language_id' => '1']);
    
     productTranslations::create(['name' =>'Crunchy Cheese Slice','description' =>'Crunchy Cheese Slice Kunafa, which combines the traditional flavors of kunafa with a unique twist of a crunchy texture and a rich cheese filling.

        ','product_id' => '2','language_id' => '1']);
    
        productTranslations::create(['name' =>'Kunafa Mix','description' =>'Kunafa Mix is a dessert consisting of layers of shredded phyllo dough filled with a sweet pistachio mixture, baked until golden brown, and soaked in syrup, offering a delightful combination of crispy texture and rich flavors..

        ','product_id' => '3','language_id' => '1']);
    


        productTranslations::create(['name' =>'Kunafa Nutella','description' =>'Kunafa Nutella is a dessert variation of traditional kunafa, featuring layers of shredded phyllo dough filled with Nutella spread, baked until golden and crispy, offering a delightful fusion of Middle Eastern and chocolatey flavors..

        ','product_id' => '4','language_id' => '1']);
    

        productTranslations::create(['name' =>'Kunafa cream Slice','description' =>'Kunafa Cream Slice is a dessert comprising layers of shredded phyllo dough filled with a creamy custard or whipped cream filling, providing a luscious and indulgent treat with a contrast of crispy and smooth textures.

        ','product_id' => '5','language_id' => '1']);
    


        productTranslations::create(['name' =>'Pistachio Kunafa Finger','description' =>'Pistachio Kunafa Finger is a dessert where pistachio filling is wrapped in shredded phyllo dough, baked until crispy, and served as finger-sized portions, offering a delightful blend of crunchy texture and nutty flavor in each bite.

        ','product_id' => '6','language_id' => '1']);
    



        /*productTranslations::create(['name' =>'Kunafa Cheese Original','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','product_id' => '7','language_id' => '1']);
    

        productTranslations::create(['name' =>'Cheese Kunafa Finger','description' =>'The products are lovingly made from high quality ingredients by experienced master bakers.

        ','product_id' => '8','language_id' => '1']);
    
*/
        
       

    /*    productTranslations::create(['name' =>'Kunafa Cheese Original','description' =>'Kunafa Cheese Original is a traditional Middle Eastern dessert consisting of shredded phyllo dough layered with a sweet cheese filling, baked until golden brown, and soaked in syrup, providing a rich and indulgent treat with a perfect balance of crispy and creamy textures.

        ','product_id' => '7','language_id' => '1']);
    


        productTranslations::create(['name' =>'Kunafa Mix chocolate','description' =>'Kunafa Mix Chocolate is a dessert variation of traditional kunafa, featuring layers of shredded phyllo dough filled with chocolate spread, baked until golden and crispy, offering a delightful fusion of Middle Eastern and chocolatey flavors in each bite.

        ','product_id' => '8','language_id' => '1']);
    

        productTranslations::create(['name' =>'Kunafa Nutella','description' =>'Kunafa Nutella is a modern twist on the traditional Middle Eastern dessert, Kunafa, featuring layers of shredded phyllo dough filled with Nutella spread, baked until golden and crispy, offering a delightful fusion of Middle Eastern and chocolatey flavors.

        ','product_id' => '9','language_id' => '1']);
    

        productTranslations::create(['name' =>'Kunafa Biscoff','description' =>'Kunafa Biscoff is a delicious variation of the traditional Middle Eastern dessert, Kunafa, where layers of shredded phyllo dough are filled with Biscoff spread, baked until golden and crispy, offering a delightful combination of crispy texture and caramelized cookie flavor.

        ','product_id' => '10','language_id' => '1']);

        productTranslations::create(['name' =>'Kunafa Mix','description' =>'Kunafa Mix is a versatile dessert featuring shredded phyllo dough layered with various fillings like chocolate, Nutella, or pistachios, baked until golden and crispy, offering a delightful blend of Middle Eastern flavors and crispy textures in each bite.
        ','product_id' => '11','language_id' => '1']);
    

           
        productTranslations::create(['name' =>'Kunafa Cheese ice cream','description' =>'Kunafa Cheese Ice Cream is a unique dessert that combines the creamy richness of traditional Kunafa Cheese with the cool sweetness of ice cream, offering a delightful fusion of textures and flavors in every spoonful.

        ','product_id' => '12','language_id' => '1']);
    


        
        productTranslations::create(['name' =>'Kunafa Pistachio','description' =>'Kunafa Pistachio is a delightful dessert featuring shredded phyllo dough filled with a sweet pistachio mixture, baked until golden and crispy, offering a perfect blend of nutty flavor and crispy texture in each bite.

        ','product_id' => '13','language_id' => '1']);


        productTranslations::create(['name' =>'Kunafa cream Slice','description' =>'Kunafa Cream Slice is a delectable dessert composed of shredded phyllo dough layered with a creamy custard or whipped cream filling, providing a rich and indulgent treat with a perfect contrast of crispy and smooth textures.

        ','product_id' => '14','language_id' => '1']);
    
 
    
        productTranslations::create(['name' =>'Crunchy Cheese Slice','description' =>'Crunchy Cheese Slice is a savory-sweet treat featuring shredded phyllo dough layered with a rich cheese filling, baked until golden and crispy, offering a delightful combination of crunchy texture and creamy cheesiness in every bite.

        ','product_id' => '15','language_id' => '1']);
    

        productTranslations::create(['name' =>'Pistachio Kunafa Crown','description' =>'Pistachio Kunafa Crown is a decadent dessert where shredded phyllo dough is wrapped around a pistachio filling, baked until crispy and golden, presenting a regal and nutty treat with a delightful blend of crunchy texture and pistachio flavor.

        ','product_id' => '16','language_id' => '1']);


        productTranslations::create(['name' =>'Nutella Kunafa Crown','description' =>'Nutella Kunafa Crown is a luxurious dessert featuring shredded phyllo dough encasing a rich Nutella filling, baked until golden and crispy, offering a delightful combination of Middle Eastern and chocolatey flavors fit for royalty.

        ','product_id' => '17','language_id' => '1']);
    
     
      
        productTranslations::create(['name' =>'Dates Kunafa Crown','description' =>'Dates Kunafa Crown is a sumptuous dessert where shredded phyllo dough wraps around a filling of sweet dates, baked until golden and crispy, offering a delightful fusion of Middle Eastern flavors and natural sweetness in every bite.

        ','product_id' => '18','language_id' => '1']);
    

        productTranslations::create(['name' =>'Saffron Kunafa Crown','description' =>'Saffron Kunafa Crown is a luxurious dessert where shredded phyllo dough is filled with a saffron-infused mixture, baked until golden and crispy, offering a delightful blend of exotic flavors and rich textures fit for a royal indulgence.

        ','product_id' => '19','language_id' => '1']);
    
     
       
        productTranslations::create(['name' =>'Milk Chocolate Kunafa Crown', 'description' =>'Milk Chocolate Kunafa Crown is a decadent dessert featuring shredded phyllo dough filled with a creamy milk chocolate mixture, baked until golden and crispy, offering a delightful fusion of Middle Eastern and chocolatey flavors in each royal bite.

       ','product_id' => '20','language_id' => '1']);
    

       
       productTranslations::create(['name' =>'White Chocolate Kunafa Crown','description' =>'White Chocolate Kunafa Crown is a luxurious dessert where shredded phyllo dough envelops a rich white chocolate filling, baked until golden and crispy, offering a delightful blend of Middle Eastern flair and creamy sweetness in each regal slice.

       ','product_id' => '21','language_id' => '1']);

       productTranslations::create(['name' =>'Biscoff Kunafa Crown','description' =>'Biscoff Kunafa Crown is a delightful dessert where shredded phyllo dough encases a luscious Biscoff spread filling, baked until golden and crispy, presenting a harmonious blend of Middle Eastern tradition and indulgent cookie flavor in every royal bite.

       ','product_id' => '22','language_id' => '1']);


       productTranslations::create(['name' =>'Cheese Kunafa Finger','description' =>'Cheese Kunafa Finger is a delectable dessert featuring shredded phyllo dough filled with a creamy cheese mixture, baked until golden and crispy, offering a delightful combination of savory cheesiness and crunchy texture in each finger-sized portion.

       ','product_id' => '23','language_id' => '1']);


       
       productTranslations::create(['name' =>'Cheese Milk Chocolate Kunafa Finger','description' =>'Cheese Milk Chocolate Kunafa Finger is a decadent dessert combining shredded phyllo dough filled with a creamy cheese and milk chocolate mixture, baked until golden and crispy, offering a delightful fusion of savory cheese and rich chocolate flavors in each delightful bite.

       ','product_id' => '24','language_id' => '1']);
     


       productTranslations::create(['name' =>'Pistachio Kunafa Finger','description' =>'Pistachio Kunafa Finger is a delightful dessert where shredded phyllo dough wraps around a sweet pistachio filling, baked until golden and crispy, offering a perfect blend of nutty flavor and crispy texture in each finger-sized portion.

       ','product_id' => '25','language_id' => '1']);


       
       productTranslations::create(['name' =>'Pistachio Kunafa Finger W/Milk Chocolate','description' =>'Pistachio Kunafa Finger with Milk Chocolate is a luscious dessert combining shredded phyllo dough with a sweet pistachio filling, complemented by creamy milk chocolate, baked until golden and crispy, offering a delightful fusion of nutty pistachio and indulgent chocolate flavors in each bite-sized portion.

       ','product_id' => '26','language_id' => '1']);



       productTranslations::create(['name' =>'Cream Kunafa Finger', 'description' =>'Cream Kunafa Finger is a delightful dessert featuring shredded phyllo dough filled with a creamy and luscious custard or whipped cream filling, baked until golden and crispy, offering a perfect balance of crispy texture and smooth creaminess in each finger-sized portion.

       ','product_id' => '27','language_id' => '1']);



       productTranslations::create(['name' =>'Nutella Kunafa Finger', 'description' =>'Nutella Kunafa Finger is a delectable dessert where shredded phyllo dough wraps around a rich Nutella filling, baked until golden and crispy, presenting a delightful combination of Middle Eastern tradition and chocolatey indulgence in each finger-sized portion.

       ','product_id' => '28','language_id' => '1']);


       productTranslations::create(['name' =>'Mix Baklava', 'description' =>'Mix Baklava is a delightful assortment of traditional Middle Eastern pastries made with layers of phyllo dough, nuts, and sweet syrup, offering a rich and indulgent selection of flavors and textures in every bite-sized piece.

       ','product_id' => '29','language_id' => '1']);


       productTranslations::create(['name' =>'Pistachio Baklava', 'description' =>'Pistachio Baklava is a classic Middle Eastern dessert featuring layers of crispy phyllo dough filled with a sweet pistachio mixture, baked to golden perfection, offering a delightful combination of nutty flavor and crunchy texture in each bite-sized piece.

       ','product_id' => '30','language_id' => '1']);



       productTranslations::create(['name' =>'Baklava Crown', 'description' =>'Baklava Crown is an elegant variation of the classic Middle Eastern dessert, Baklava, featuring layers of buttery phyllo dough filled with a rich nut mixture, baked until golden and crispy, and shaped into a regal crown, offering a delightful blend of crunchy texture and sweet nuttiness in each royal slice.

       ','product_id' => '31','language_id' => '1']);


       productTranslations::create(['name' =>'Baklava Triangle Ice Cream', 'description' =>'Baklava Triangle Ice Cream is a delightful fusion dessert, combining traditional baklava layers with a creamy ice cream filling, offering a harmonious blend of crispy phyllo dough, sweet syrup, and cool, refreshing ice cream in every triangular bite.

       ','product_id' => '32','language_id' => '1']);



       productTranslations::create(['name' =>'Baklava Triangle', 'description' =>'Baklava Triangle is a classic Middle Eastern pastry made with layers of phyllo dough, nuts, and sweet syrup, folded into a triangular shape, offering a delicious combination of crispy layers and sweet, nutty filling in each bite-sized piece.

       ','product_id' => '33','language_id' => '1']);



       productTranslations::create(['name' =>'Baklava Triangle Chocolate W/Ice Cream', 'description' =>'Baklava Triangle Chocolate with Ice Cream is a delightful fusion dessert, combining traditional baklava layers filled with chocolate, paired with a scoop of creamy ice cream, offering a decadent blend of rich chocolate, crispy phyllo dough, and cool, refreshing ice cream in every triangular bite.

       ','product_id' => '34','language_id' => '1']);



       productTranslations::create(['name' =>'Baklava Triangle Chocolate', 'description' =>'Baklava Triangle Chocolate is a delightful twist on the classic Middle Eastern pastry, featuring layers of phyllo dough filled with rich chocolate, offering a decadent and indulgent treat with a perfect balance of crispy layers and chocolatey sweetness in every triangular bite.

       ','product_id' => '35','language_id' => '1']);



       productTranslations::create(['name' =>'1 Piece Baklava Pistachio', 'description' =>'1 Piece Baklava Pistachio is a single serving of the classic Middle Eastern pastry, Baklava, filled with a delicious pistachio mixture, offering a delightful combination of crispy layers, sweet syrup, and nutty pistachios in every indulgent bite.

       ','product_id' => '36','language_id' => '1']);


       
       productTranslations::create(['name' =>'1 Piece Baklava', 'description' =>'1 Piece Baklava is a single serving of the classic Middle Eastern pastry, Baklava, made with layers of phyllo dough, nuts, and sweet syrup, offering a delightful blend of crispy layers and sweet, nutty filling in every bite-sized piece.

       ','product_id' => '37','language_id' => '1']);


       productTranslations::create(['name' =>'Wild Berries Melty Cake', 'description' =>'Wild Berries Melty Cake is a delectable dessert featuring a warm, molten center of wild berry filling encased in a moist and fluffy cake exterior, offering a delightful explosion of berry flavor and velvety texture in every decadent bite.

       ','product_id' => '38','language_id' => '1']);


       productTranslations::create(['name' =>'Strawberry Melty Cake', 'description' =>'Strawberry Melty Cake is a delightful dessert featuring a warm, molten center of strawberry filling enveloped in a moist and fluffy cake exterior, offering a delightful burst of strawberry flavor and velvety texture in every indulgent bite.

       ','product_id' => '39','language_id' => '1']);


       productTranslations::create(['name' =>'Caramel Melty Cake', 'description' =>'Caramel Melty Cake is a decadent dessert featuring a warm, gooey caramel center nestled within a moist and fluffy cake exterior, offering a delightful fusion of rich caramel flavor and velvety texture in every indulgent bite.

       ','product_id' => '40','language_id' => '1']);



       productTranslations::create(['name' =>'Turkish Delights', 'description' =>'Turkish Delights are sweet, chewy confections made from starch and sugar, often flavored with rosewater, citrus, or nuts, offering a delightful burst of flavor and a soft, jelly-like texture in each bite-sized piece.

       ','product_id' => '41','language_id' => '1']);



       productTranslations::create(['name' =>'Pistachio Ice Cream', 'description' =>'Pistachio Ice Cream is a creamy frozen dessert flavored with ground pistachios, offering a delightful blend of nutty richness and smooth texture in every scoop, perfect for a refreshing and indulgent treat.

       ','product_id' => '42','language_id' => '1']);


       productTranslations::create(['name' =>'Yogurt Ice Cream', 'description' =>'Yogurt Ice Cream is a refreshing frozen dessert made from creamy yogurt, offering a tangy and creamy flavor profile with a smooth and velvety texture, perfect for a light and satisfying treat.

       ','product_id' => '43','language_id' => '1']);


       productTranslations::create(['name' =>'Chocolate MilkShake', 'description' =>'Chocolate Milkshake is a delicious beverage made by blending milk with rich chocolate syrup or cocoa powder, resulting in a creamy and indulgent treat with a decadent chocolate flavor, perfect for satisfying sweet cravings.

       ','product_id' => '44','language_id' => '1']);


       productTranslations::create(['name' =>'Strawberry Milkshake', 'description' =>'Strawberry Milkshake is a refreshing beverage crafted by blending milk with fresh strawberries or strawberry syrup, creating a creamy and fruity delight with a sweet and tangy flavor, ideal for enjoying on warm days or as a tasty dessert option.

       ','product_id' => '45','language_id' => '1']);


       productTranslations::create(['name' =>'Pistachio Milkshake', 'description' =>'Pistachio Milkshake is a creamy beverage made by blending milk with pistachio nuts or pistachio-flavored syrup, offering a nutty and indulgent flavor profile with a smooth and velvety texture, perfect for a unique and satisfying treat.

       ','product_id' => '46','language_id' => '1']);

       
       productTranslations::create(['name' =>'Mineral Water', 'description' =>'Mineral Water is a refreshing beverage sourced from natural springs or mineral-rich underground reservoirs, offering hydration with added minerals like calcium and magnesium, perfect for quenching thirst and maintaining overall health.

       ','product_id' => '47','language_id' => '1']);


       productTranslations::create(['name' =>'Barbican', 'description' =>'Barbican is a non-alcoholic malt beverage known for its fruity flavors and refreshing taste, making it a popular choice for those seeking a flavorful alternative to traditional soft drinks, perfect for enjoying on its own or as a mixer in mocktails

       ','product_id' => '48','language_id' => '1']);

       
       productTranslations::create(['name' =>'Turkish Coffee', 'description' =>'Turkish Coffee is a traditional method of brewing coffee where finely ground coffee beans are simmered with water and sugar in a special pot called a cezve, resulting in a strong, aromatic brew served unfiltered in small cups, offering a rich and intense coffee experience with a thick, foamy layer on top known as "kaimaki".

       ','product_id' => '49','language_id' => '1']);


       productTranslations::create(['name' =>'Soft Drinks', 'description' =>'Soft drinks are carbonated beverages typically flavored with sweeteners and natural or artificial flavors, offering a refreshing and fizzy option for quenching thirst and enjoying a variety of flavors, making them popular choices for casual refreshment or pairing with meals

       ','product_id' => '50','language_id' => '1']);


       productTranslations::create(['name' =>'Water', 'description' =>'Water is a clear, odorless, and tasteless liquid essential for life, hydrating the body and aiding in various bodily functions, making it the most basic and vital beverage for maintaining health and well-being.

       ','product_id' => '51','language_id' => '1']);*/


       productTranslations::create(['name' =>'كنافة الجبن الأصلية' ,'description' =>'كنافة الجبن الأصلية هي حلوى تقليدية من الشرق الأوسط تتكون من عجينة الفيلو المبشورة المكونة من طبقات مملوءة بحشوة الجبن الحلوة، تُخبز حتى تصبح ذهبية اللون، وتنقع في شراب، مما يوفر علاجًا غنيًا وفاخرًا بتوازن مثالي بين القوام المقرمش والكريمي

 ','product_id' => '1','language_id' => '2']);
   
    productTranslations::create(['name' =>'شريحة جبن مقرمشة','description' =>'كنافة شريحة الجبن المقرمشة، التي تجمع بين النكهات التقليدية للكنافة مع لمسة فريدة من القوام المقرمش وحشوة الجبن الغنية.

       ','product_id' => '2','language_id' => '2']);


       productTranslations::create(['name' =>'خليط الكنافة','description' =>'خليط الكنافة هو حلوى تتكون من طبقات من عجينة الفيلو المبشورة المملوءة بمزيج من الفستق الحلو، تُخبز حتى تصبح ذهبية اللون، وتنقع في شراب، مما يقدم مزيجًا رائعًا من القوام المقرمش والنكهات الغنية
       ','product_id' => '3','language_id' => '2']);
   


       productTranslations::create(['name' =>'كنافة نوتيلا','description' =>'كنافة نوتيلا هي نسخة حلوى من الكنافة التقليدية، تتميز بطبقات من عجينة الفيلو المبشورة المملوءة بشوكولاتة نوتيلا، تُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من النكهات الشرق أوسطية والشوكولاتة

       ','product_id' => '4','language_id' => '2']);
   

       productTranslations::create(['name' =>'شريحة كنافة بالكريمة','description' =>'شريحة كنافة بالكريمة هي حلوى تتكون من طبقات من عجينة الفيلو المبشورة المملوءة بحشوة الكاسترد الكريمية أو الكريمة المخفوقة، مما يوفر علاجًا شهيًا وفاخرًا مع تباين بين القوام المقرمش والناعم.

       ','product_id' => '5','language_id' => '2']);
   


       productTranslations::create(['name' =>'إصبع كنافة الفستق','description' =>'إصبع كنافة الفستق هو حلوى يتم فيها لف حشوة الفستق بعجينة الفيلو المبشورة وتُخبز حتى تُصبح مقرمشة، ثم تُقدم في أحجام تشبه الأصابع، مما يوفر مزيجًا رائعًا من القوام المقرمش ونكهة الفستق اللذيذة في كل لقمة.

       ','product_id' => '6','language_id' => '2']);
   
 

       productTranslations::create(['name' =>'كنافة جبنة أصلية','description' =>'كنافة الجبن الأصلية هي حلوى تقليدية شرق أوسطية تتكون من طبقات من عجينة الفيلو المبشورة مملوءة بحشوة جبن حلوة، وتُخبز حتى تصبح ذهبية اللون، ثم تُنقع في الشراب، مما يوفر علاجًا غنيًا وفاخرًا مع توازن مثالي بين القوام المقرمش والكريمي

       ','product_id' => '7','language_id' => '2']);
   


       productTranslations::create(['name' =>'كنافة الشوكولاتة','description' =>'خليط كنافة الشوكولاتة هو نسخة حلوى من الكنافة التقليدية، تتميز بطبقات من عجينة الفيلو المبشورة المملوءة بمزيج الشوكولاتة، تُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من النكهات الشرق أوسطية والشوكولاتة في كل لقمة

       ','product_id' => '8','language_id' => '2']);
   

       productTranslations::create(['name' =>'كنافة نوتيلا','description' =>'كنافة نوتيلا هي تطوير حديث على حلوى الكنافة التقليدية الشرق أوسطية، حيث تتكون من طبقات من عجينة الفيلو المبشورة مملوءة بمزيج نوتيلا، تُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من النكهات الشرق أوسطية والشوكولاتة. '
       ,'product_id' => '9','language_id' => '2']);
   

       productTranslations::create(['name' =>'كنافة بسكوف','description' =>'كنافة بسكوف هي تفسير شهي لحلوى الكنافة التقليدية الشرق أوسطية، حيث تتكون من طبقات من عجينة الفيلو المبشورة مملوءة بمزيج بسكوف، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من القوام المقرمش ونكهة البسكويت المكرملة ','product_id' => '10','language_id' => '1']);

       productTranslations::create(['name' =>'خليط كنافة','description' =>'خليط كنافة هو حلوى متعددة الاستخدامات تتميز بطبقات من عجينة الفيلو المبشورة مملوءة بحشوات متنوعة مثل الشوكولاتة، نوتيلا، أو الفستق، تُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من النكهات الشرق أوسطية والقوام المقرمش في كل لقمة
       ','product_id' => '11','language_id' => '2']);
   

          
       productTranslations::create(['name' =>'آيس كريم كنافة بالجبنة','description' =>'آيس كريم كنافة بالجبنة هو حلوى فريدة تجمع بين غنى جبنة الكنافة التقليدية الكريمية وحلاوة الآيس كريم الباردة، مما يقدم مزيجًا رائعًا من القوام والنكهات في كل ملعقة

       ','product_id' => '12','language_id' => '2']);
   


       
       productTranslations::create(['name' =>'كنافة بالفستق','description' =>'كنافة بالفستق هي حلوى لذيذة تتكون من طبقات من عجينة الفيلو المبشورة مملوءة بخليط من الفستق الحلو، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا مثاليًا من نكهة الفستق والقوام المقرمش في كل لقمة

       ','product_id' => '13','language_id' => '2']);


       productTranslations::create(['name' =>'شريحة كنافة بالكريمة','description' =>'شريحة كنافة بالكريمة هي حلوى لذيذة مكونة من طبقات من عجينة الفيلو المبشورة مع حشوة من الكريمة الكستردية أو الكريمة المخفوقة، تقدم معاملة غنية ولذيذة بتباين مثالي بين القوام المقرمش والناعم.

       ','product_id' => '14','language_id' => '2']);
   

   
       productTranslations::create(['name' =>'شريحة جبنة مقرمشة','description' =>'شريحة جبنة مقرمشة هي وجبة حلوة مالحة تتكون من طبقات من عجينة الفيلو المبشورة مع حشوة جبنية غنية، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من القوام المقرمش والقشدة الجبنية الكريمية في كل لقمة

       ','product_id' => '15','language_id' => '2']);
   

       productTranslations::create(['name' =>'تاج كنافة الفستق','description' =>'تاج كنافة الفستق هو حلوى فاخرة حيث تُلف طبقات من عجينة الفيلو المبشورة حول حشوة من الفستق، وتُخبز حتى تصبح مقرمشة وذهبية، مما يقدم معاملة فاخرة ومكسراتية بمزيج مثالي من القوام المقرمش ونكهة الفستق اللذيذة

       ','product_id' => '16','language_id' => '2']);


       productTranslations::create(['name' =>'تاج كنافة النوتيلا','description' =>'تاج كنافة النوتيلا هو حلوى فاخرة تتميز بطبقات من عجينة الفيلو المبشورة تحتوي على حشوة غنية بالنوتيلا، تُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من النكهات الشرق أوسطية والشوكولاتة اللذيذة تليق بالملوك

       ','product_id' => '17','language_id' => '2']);
   
    
     
       productTranslations::create(['name' =>'تاج كنافة التمر','description' =>'تاج كنافة التمر هو حلوى فاخرة حيث تُلف طبقات من عجينة الفيلو المبشورة حول حشوة من التمر الحلو، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من النكهات الشرق أوسطية والحلاوة الطبيعية في كل لقمة

       ','product_id' => '18','language_id' => '2']);
   

       productTranslations::create(['name' =>'تاج كنافة الزعفران','description' =>'تاج كنافة الزعفران هو حلوى فاخرة حيث تُحشى طبقات من عجينة الفيلو المبشورة بخليط مشبع بالزعفران، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من النكهات الشرقية الغريبة والقوام الغني تليق بالترف والاستمتاع الملكي. ','product_id' => '19','language_id' => '1']);
   
    
      
       productTranslations::create(['name' =>'تاج كنافة الشوكولاتة بالحليب', 'description' =>'تاج كنافة الشوكولاتة بالحليب هو حلوى فاخرة تتميز بطبقات من عجينة الفيلو المبشورة محشوة بخليط كريمي من الشوكولاتة بالحليب، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من النكهات الشرق أوسطية والشوكولاتة في كل لقمة ملكية.

      ','product_id' => '20','language_id' => '2']);
   

      
      productTranslations::create(['name' =>'تاج كنافة الشوكولاتة البيضاء','description' =>'تاج كنافة الشوكولاتة البيضاء هو حلوى فاخرة حيث تُلف طبقات من عجينة الفيلو المبشورة حول حشوة غنية بالشوكولاتة البيضاء، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من النكهات الشرق أوسطية والحلاوة الكريمية في كل شريحة ملكية.

      ','product_id' => '21','language_id' => '2']);

      productTranslations::create(['name' =>'تاج كنافة البسكوف','description' =>'تاج كنافة البسكوف هو حلوى لذيذة حيث تُغلف طبقات من عجينة الفيلو المبشورة بحشوة سخية من البسكوف، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا متناغمًا من التقاليد الشرق أوسطية ونكهة البسكوف اللذيذة في كل لقمة ملكية.

      ','product_id' => '22','language_id' => '2']);


      productTranslations::create(['name' =>'إصبع كنافة الجبن','description' =>'إصبع كنافة الجبن هو حلوى لذيذة تتميز بطبقات من عجينة الفيلو المبشورة محشوة بخليط كريمي من الجبن، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من النكهة اللذيذة للجبن والقوام المقرمش في كل قطعة بحجم إصبع.

      ','product_id' => '23','language_id' => '2']);


      
      productTranslations::create(['name' =>'إصبع كنافة الجبن بالشوكولاتة بالحليب','description' =>'إصبع كنافة الجبن بالشوكولاتة بالحليب هو حلوى فاخرة تجمع بين طبقات من عجينة الفيلو المبشورة محشوة بخليط كريمي من الجبن والشوكولاتة بالحليب، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من نكهة الجبن اللذيذة والشوكولاتة الغنية في كل لقمة شهية.

      ','product_id' => '24','language_id' => '2']);
    


      productTranslations::create(['name' =>'إصبع كنافة الفستق','description' =>'إصبع كنافة الفستق هو حلوى لذيذة حيث تُلف طبقات من عجينة الفيلو المبشورة حول حشوة حلوة من الفستق، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا مثاليًا من نكهة الفستق اللذيذة والقوام المقرمش في كل قطعة بحجم إصبع.

      ','product_id' => '25','language_id' => '2']);


      
      productTranslations::create(['name' =>'إصبع كنافة الفستق مع الشوكولاتة الحليبية','description' =>'إصبع كنافة الفستق مع الشوكولاتة الحليبية هو حلوى لذيذة تجمع بين طبقات من عجينة الفيلو المبشورة مع حشوة حلوة من الفستق، مكملة بالشوكولاتة الحليبية الكريمية، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا رائعًا من نكهة الفستق اللذيذة والشوكولاتة الغنية في كل قطعة بحجم اللقمة.

      ','product_id' => '26','language_id' => '2']);



      productTranslations::create(['name' =>'إصبع كنافة الكريمة', 'description' =>'إصبع كنافة الكريمة هو حلوى لذيذة تتميز بطبقات من عجينة الفيلو المبشورة محشوة بحشوة كريمية وكريمية فاخرة من الكاسترد أو الكريمة المخفوقة، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم توازنًا مثاليًا بين القوام المقرمش والنعومة الكريمية في كل قطعة بحجم إصبع.

      ','product_id' => '27','language_id' => '2']);



      productTranslations::create(['name' =>'إصبع كنافة بالنوتيلا', 'description' =>'إصبع كنافة بالنوتيلا هو حلوى شهية حيث تُلف طبقات من عجينة الفيلو المبشورة حول حشوة غنية بالنوتيلا، وتُخبز حتى تصبح ذهبية ومقرمشة، مما يقدم مزيجًا لذيذًا من التقاليد الشرقية الوسطى واللذة الشوكولاتية في كل قطعة بحجم إصبع.

      ','product_id' => '28','language_id' => '2']);


      productTranslations::create(['name' =>'بقلاوة مشكلة', 'description' =>'البقلاوة المشكلة هي مجموعة لذيذة من المعجنات التقليدية الشرقية مصنوعة من طبقات من عجينة الفيلو والمكسرات والشراب الحلو، تقدم تشكيلة غنية ولذيذة من النكهات والملمس في كل قطعة بحجم اللقمة.

      ','product_id' => '29','language_id' => '2']);


      productTranslations::create(['name' =>'بقلاوة الفستق', 'description' =>'بقلاوة الفستق هي حلوى تقليدية شرقية مكونة من طبقات من عجينة الفيلو المقرمشة محشوة بخليط حلو من الفستق، وتُخبز حتى تحصل على اللون الذهبي المثالي، مما يقدم مزيجًا لذيذًا من نكهة الفستق اللذيذة والقوام المقرمش في كل قطعة بحجم اللقمة.

      ','product_id' => '30','language_id' => '2']);



      productTranslations::create(['name' =>'تاج البقلاوة', 'description' =>'تاج البقلاوة هو تحول أنيق لحلوى البقلاوة التقليدية الشرقية، يتميز بطبقات من عجينة الفيلو الزبدية المحشوة بخليط غني من المكسرات، تُخبز حتى تصبح ذهبية ومقرمشة، وتُشكل على شكل تاج ملكي، مما يقدم مزيجًا لذيذًا من القوام المقرمش والنكهة الحلوة للمكسرات في كل شريحة ملكية.

      ','product_id' => '31','language_id' => '2']);


      productTranslations::create(['name' =>'بقلاوة ثلاثية بالآيس كريم', 'description' =>'البقلاوة ثلاثية الآيس كريم هي حلوى مزيج لذيذة، تجمع بين طبقات البقلاوة التقليدية مع حشوة آيس كريم كريمية، تقدم مزيجًا متناغمًا من عجينة الفيلو المقرمشة، والشراب الحلو، والآيس كريم البارد والمنعش في كل لقمة ثلاثية.

      ','product_id' => '32','language_id' => '2']);



      productTranslations::create(['name' =>'ثلاثيات البقلاوة', 'description' =>'ثلاثيات البقلاوة هي حلوى تقليدية شرقية مصنوعة من طبقات من عجينة الفيلو، المكسرات، والشراب الحلو، يتم طيها في شكل مثلث، مما يقدم مزيجًا لذيذًا من الطبقات المقرمشة والحشوة الحلوة والمكسرات في كل قطعة بحجم اللقمة.

      ','product_id' => '33','language_id' => '2']);



      productTranslations::create(['name' =>' ثلاثيات البقلاوة بالشوكولاتة مع الآيس كريم', 'description' =>'ثلاثيات البقلاوة بالشوكولاتة مع الآيس كريم هي حلوى مزيج لذيذة، تجمع بين طبقات البقلاوة التقليدية المحشوة بالشوكولاتة، مقرونة بكرة من الآيس كريم الكريمي، تقدم مزيجًا رائعًا من الشوكولاتة الغنية، وعجينة الفيلو المقرمشة، والآيس كريم البارد والمنعش في كل لقمة ثلاثية.

      ','product_id' => '34','language_id' => '2']);



      productTranslations::create(['name' =>'ثلاثيات البقلاوة بالشوكولاتة', 'description' =>'ثلاثيات البقلاوة بالشوكولاتة هي لفتة لذيذة على الحلوى التقليدية الشرقية، تتكون من طبقات من عجينة الفيلو المملوءة بالشوكولاتة الغنية، تقدم حلاً فاخرًا ولذيذًا مع توازن مثالي بين الطبقات المقرمشة وحلاوة الشوكولاتة في كل لقمة ثلاثية.

      ','product_id' => '35','language_id' => '2']);



      productTranslations::create(['name' =>'قطعة بقلاوة بالفستق', 'description' =>'قطعة واحدة من بقلاوة الفستق هي حصة فردية من الحلوى الكلاسيكية الشرق أوسطية، البقلاوة، المحشوة بمزيج لذيذ من الفستق، مما يقدم مزيجاً رائعاً من الطبقات المقرمشة، والشراب الحلو، والفستق الغني في كل لقمة شهية.

      ','product_id' => '36','language_id' => '2']);


      
      productTranslations::create(['name' =>'قطعة واحدة من البقلاوة', 'description' =>'قطعة واحدة من البقلاوة هي حصة فردية من الحلوى الكلاسيكية الشرق أوسطية، البقلاوة، المصنوعة من طبقات من عجينة الفيلو والمكسرات والشراب الحلو، مما يقدم مزيجاً رائعاً من الطبقات المقرمشة والحشوة الحلوة والجوزية في كل قطعة صغيرة.'
      ,'product_id' => '37','language_id' => '2']);


      productTranslations::create(['name' =>'كعكة تذوب بالتوت البري', 'description' =>'كعكة التوت البري المذابة هي حلوى شهية تتميز بمركز دافئ وسائل محشو بتوت بري بري، محاط بطبقة خارجية من الكعكة الرطبة والهشة، مما يقدم انفجارًا رائعًا من نكهة التوت وقوامًا ناعمًا في كل قضمة فاخرة',
      'product_id' => '38','language_id' => '2']);


      productTranslations::create(['name' =>'كعكة الفراولة المذابة', 'description' =>'كعكة الفراولة المذابة هي حلوى لذيذة تتميز بمركز دافئ وسائل محشو بحشوة الفراولة، محاطة بطبقة خارجية من الكعكة الرطبة والهشة، مما يقدم انفجارًا رائعًا من نكهة الفراولة وقوامًا ناعمًا في كل قضمة فاخرة.',
      'product_id' => '39','language_id' => '2']);


      productTranslations::create(['name' =>'كيك الكراميل المذاب', 'description' =>'كعكة الكراميل المذابة هي حلوى فاخرة تتميز بمركز دافئ ولزج من الكراميل المتدفق داخل طبقة خارجية من الكعكة الرطبة والهشة، مما يقدم توافقًا رائعًا من نكهة الكراميل الغنية والقوام الناعم في كل قضمة فاخرة

      ','product_id' => '40','language_id' => '2']);



      productTranslations::create(['name' =>'الحلويات التركية', 'description' =>'الحلويات التركية هي حلوى لذيذة ومرنة مصنوعة من نشاء وسكر، غالباً ما تُنكّه بماء الورد أو الحمضيات أو المكسرات، مما يقدم انفجاراً رائعاً من النكهة وقواماً مثل الهلام في كل قطعة صغيرة
      ','product_id' => '41','language_id' => '2']);



      productTranslations::create(['name' =>'آيس كريم الفستق', 'description' =>'آيس كريم الفستق هو حلوى مثلجة كريمية مُنكهة بالفستق المطحون، تقدم مزيجاً رائعاً من الغنى النوعي والقوام الناعم في كل مغرفة، مثالي لتحلية منعشة وفاخرة.


      ','product_id' => '42','language_id' => '2']);


      productTranslations::create(['name' =>'آيس كريم الزبادي', 'description' =>'آيس كريم الزبادي هو حلوى مجمدة منعشة مصنوعة من زبادي كريمي، تقدم نكهة حامضة وكريمية مع قوام ناعم ومخملي، مثالي لتحلية خفيفة ومرضية.
      ','product_id' => '43','language_id' => '2']);


      productTranslations::create(['name' =>'شيك الشوكولاتة', 'description' =>'الميلك شيك بالشوكولاتة هو مشروب لذيذ يتكون من خلط الحليب مع شراب الشوكولاتة الغني أو مسحوق الكاكاو، مما ينتج عنه حلوى كريمية ولذيذة بنكهة شوكولاتة غنية، مثالية لإشباع الرغبات في الحلوى.
      ','product_id' => '44','language_id' => '2']);


      productTranslations::create(['name' =>'ميلك شيك الفراولة', 'description' =>'ميلك شيك الفراولة هو مشروب منعش يتم إعداده بخلط الحليب مع الفراولة الطازجة أو شراب الفراولة، مما ينتج عنه حلاً كريميًا وفاكهيًا بنكهة حلوة وحامضة، مثالي للاستمتاع به في الأيام الدافئة أو كخيار لذيذ للحلوى.

      ','product_id' => '45','language_id' => '2']);


      productTranslations::create(['name' =>'ميلك شيك الفستق', 'description' =>'ميلك شيك الفستق هو مشروب كريمي يتم إعداده بخلط الحليب مع الفستق أو شراب نكهة الفستق، مما يقدم مذاقاً غنياً بالفستق ولذيذاً مع قوام ناعم ومخملي، مثالي لتحلية فريدة ومرضية.

      ','product_id' => '46','language_id' => '2']);

      
      productTranslations::create(['name' =>'مياه معدنية', 'description' =>'المياه المعدنية هي مشروب منعش يأتي من ينابيع طبيعية أو خزانات تحتية غنية بالمعادن، توفر الترطيب بالمعادن المضافة مثل الكالسيوم والمغنيسيوم، مما يجعلها مثالية لرفع العطش وللحفاظ على الصحة العامة.

      ','product_id' => '47','language_id' => '2']);


      productTranslations::create(['name' =>'باربيكان', 'description' =>' هو مشروب شعير غير كحولي معروف بنكهاته الفاكهية وطعمه المنعش، مما يجعله خياراً شائعاً بين الباحثين عن بديل غني بالنكهات عن المشروبات الغازية التقليدية، مثالي للاستمتاع به بمفرده أو كمكون في المشروبات اللاكحولية.
     ' ,'product_id' => '48','language_id' => '2']);

      
      productTranslations::create(['name' =>'قهوة تركية', 'description' =>'قهوة تركية هي طريقة تقليدية لتحضير القهوة حيث يُطهى البن المطحون بدقة مع الماء والسكر في وعاء خاص يُسمى "الجذوع"، مما ينتج عنه مشروب قهوة قوي وعطري يُقدم غير مُصفى في أكواب صغيرة، مما يوفر تجربة قهوة غنية ومكثفة مع طبقة كثيفة ورغوية على السطح تُعرف باسم القيماقي. '
      ,'product_id' => '49','language_id' => '2']);

      productTranslations::create(['name' =>'المشروبات الغازية', 'description' =>'لمشروبات الغازية هي المشروبات المعبأة بالغازات والتي غالباً ما تحتوي على مواد حلاوة ونكهات طبيعية أو اصطناعية، تقدم خيارًا منعشًا وفوارًا لرفع العطش والاستمتاع بمجموعة من النكهات، مما يجعلها خيارات شهيرة للاسترخاء أو لتناول الطعام.
      ','product_id' => '50','language_id' => '2']);


      productTranslations::create(['name' =>'ماء', 'description' =>'الماء هو سائل واضح ولا رائحة له ولا طعم له أساسي للحياة، يرطب الجسم ويساعد في عدة وظائف جسدية مختلفة، مما يجعله أساسيًا وحيويًا للحفاظ على الصحة والرفاهية.

      ','product_id' => '51','language_id' => '2']);

    }


}
