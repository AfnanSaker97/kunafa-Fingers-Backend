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
    /*    Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '1']);
        Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '1']);
        Calorie::create(['key'=>'Cheese','value' => '75', 'language_id' => '1','product_id' => '1']);
        Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '1']);
        Calorie::create(['key'=>'Total Calories in 100 grams','value' => '389', 'language_id' => '1','product_id' => '1']);
   
   

   Calorie::create(['key'=>'Phyllo Dough','value' => '200', 'language_id' => '1','product_id' => '2']);
   Calorie::create(['key'=>'Butter','value' => '120', 'language_id' => '1','product_id' => '2']);
   Calorie::create(['key'=>'Cheese','value' => '80', 'language_id' => '1','product_id' => '2']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '30', 'language_id' => '1','product_id' => '2']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '430', 'language_id' => '1','product_id' => '2']);

   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '3']);
   Calorie::create(['key'=>'Butter','value' => '108 ', 'language_id' => '1','product_id' => '3']);
   Calorie::create(['key'=>'Cheese','value' => '75', 'language_id' => '1','product_id' => '3']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '3']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '389', 'language_id' => '1','product_id' => '3']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '4']);
   Calorie::create(['key'=>'Butter','value' => '108 ', 'language_id' => '1','product_id' => '4']);
   Calorie::create(['key'=>'Nutella','value' => '530', 'language_id' => '1','product_id' => '4']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '4']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '844', 'language_id' => '1','product_id' => '4']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '5']);
   Calorie::create(['key'=>'Butter','value' => '108 ', 'language_id' => '1','product_id' => '5']);
   Calorie::create(['key'=>'Cream','value' => '340 ', 'language_id' => '1','product_id' => '5']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '5']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '654', 'language_id' => '1','product_id' => '5']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '6']);
   Calorie::create(['key'=>'Butter','value' => '108 ', 'language_id' => '1','product_id' => '6']);
   Calorie::create(['key'=>'Pistachios','value' => '562 ', 'language_id' => '1','product_id' => '6']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '6']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '876', 'language_id' => '1','product_id' => '6']);



   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '7']);
   Calorie::create(['key'=>'Butter','value' => '108 ', 'language_id' => '1','product_id' => '7']);
   Calorie::create(['key'=>'Cheese','value' => '75 ', 'language_id' => '1','product_id' => '7']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '7']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '389', 'language_id' => '1','product_id' => '7']);



   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '8']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '8']);
   Calorie::create(['key'=>'Chocolate','value' => '535', 'language_id' => '1','product_id' => '8']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '8']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '849', 'language_id' => '1','product_id' => '8']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '9']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '9']);
   Calorie::create(['key'=>'Nutella','value' => '546', 'language_id' => '1','product_id' => '9']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '9']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '860', 'language_id' => '1','product_id' => '9']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '10']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '10']);
   Calorie::create(['key'=>'Biscoff Spread','value' => '522', 'language_id' => '1','product_id' => '10']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '10']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '836', 'language_id' => '1','product_id' => '10']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '11']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '11']);
   Calorie::create(['key'=>'Chocolate','value' => '535', 'language_id' => '1','product_id' => '11']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '11']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '849', 'language_id' => '1','product_id' => '11']);

   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '12']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '12']);
   Calorie::create(['key'=>'Cheese','value' => '300', 'language_id' => '1','product_id' => '12']);
   Calorie::create(['key'=>'Ice Cream','value' => '207', 'language_id' => '1','product_id' => '12']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '795', 'language_id' => '1','product_id' => '12']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '13']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '13']);
   Calorie::create(['key'=>'Pistachios','value' => '562', 'language_id' => '1','product_id' => '13']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '13']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '876', 'language_id' => '1','product_id' => '13']);



   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '14']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '14']);
   Calorie::create(['key'=>'Cream','value' => '340', 'language_id' => '1','product_id' => '14']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '14']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '654', 'language_id' => '1','product_id' => '14']);



   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '15']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '15']);
   Calorie::create(['key'=>'Cheese','value' => '75', 'language_id' => '1','product_id' => '15']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '15']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '654', 'language_id' => '1','product_id' => '15']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '16']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '16']);
   Calorie::create(['key'=>'Pistachios','value' => '562', 'language_id' => '1','product_id' => '16']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '16']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '876', 'language_id' => '1','product_id' => '16']);

   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '17']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '17']);
   Calorie::create(['key'=>'Nutella','value' => '546', 'language_id' => '1','product_id' => '17']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '17']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '860', 'language_id' => '1','product_id' => '17']);



   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '18']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '18']);
   Calorie::create(['key'=>'Dates','value' => '282', 'language_id' => '1','product_id' => '18']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '18']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '596', 'language_id' => '1','product_id' => '18']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '19']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '19']);
   Calorie::create(['key'=>'Cheese','value' => '75', 'language_id' => '1','product_id' => '19']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '19']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '389', 'language_id' => '1','product_id' => '19']);

   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '20']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '20']);
   Calorie::create(['key'=>'Cheese','value' => '75', 'language_id' => '1','product_id' => '20']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '20']);
   Calorie::create(['key'=>'Milk Chocolate','value' => '535', 'language_id' => '1','product_id' => '20']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '924', 'language_id' => '1','product_id' => '20']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '21']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '21']);
   Calorie::create(['key'=>'Cheese','value' => '75', 'language_id' => '1','product_id' => '21']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '21']);
   Calorie::create(['key'=>'White Chocolate','value' => '539', 'language_id' => '1','product_id' => '21']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '928', 'language_id' => '1','product_id' => '21']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '22']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '22']);
   Calorie::create(['key'=>'Cheese','value' => '75', 'language_id' => '1','product_id' => '22']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '22']);
   Calorie::create(['key'=>'Biscoff','value' => '584', 'language_id' => '1','product_id' => '22']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '973', 'language_id' => '1','product_id' => '22']);

   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '23']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '23']);
   Calorie::create(['key'=>'Cheese','value' => '75', 'language_id' => '1','product_id' => '23']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '23']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '389', 'language_id' => '1','product_id' => '23']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '24']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '24']);
   Calorie::create(['key'=>'Cheese','value' => '75', 'language_id' => '1','product_id' => '24']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '24']);
   Calorie::create(['key'=>'Milk Chocolate','value' => '535', 'language_id' => '1','product_id' => '24']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '924', 'language_id' => '1','product_id' => '24']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '25']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '25']);
   Calorie::create(['key'=>'Cheese','value' => '75', 'language_id' => '1','product_id' => '25']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '25']);
   Calorie::create(['key'=>'Pistachios','value' => '562', 'language_id' => '1','product_id' => '25']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '562', 'language_id' => '1','product_id' => '25']);

   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '26']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '26']);
   Calorie::create(['key'=>'Cheese','value' => '75', 'language_id' => '1','product_id' => '26']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '26']);
   Calorie::create(['key'=>'Pistachios','value' => '562', 'language_id' => '1','product_id' => '26']);
   Calorie::create(['key'=>'Milk Chocolate','value' => '535', 'language_id' => '1','product_id' => '26']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '1486', 'language_id' => '1','product_id' => '26']);

   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '27']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '27']);
   Calorie::create(['key'=>'Cream','value' => '195', 'language_id' => '1','product_id' => '27']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '27']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '509', 'language_id' => '1','product_id' => '27']);

   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '28']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '28']);
   Calorie::create(['key'=>'Nutella','value' => '546', 'language_id' => '1','product_id' => '28']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '28']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '860', 'language_id' => '1','product_id' => '28']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '29']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '29']);
   Calorie::create(['key'=>'Nuts','value' => '600', 'language_id' => '1','product_id' => '29']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '29']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '914', 'language_id' => '1','product_id' => '29']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '30']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '30']);
   Calorie::create(['key'=>'Pistachios','value' => '562', 'language_id' => '1','product_id' => '30']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '30']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '876', 'language_id' => '1','product_id' => '30']);

   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '31']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '31']);
   Calorie::create(['key'=>'Nuts','value' => '600', 'language_id' => '1','product_id' => '31']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '31']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '914', 'language_id' => '1','product_id' => '31']);

   Calorie::create(['key'=>'Baklava','value' => '400', 'language_id' => '1','product_id' => '32']);
   Calorie::create(['key'=>'Ice Cream','value' => '200', 'language_id' => '1','product_id' => '32']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '600', 'language_id' => '1','product_id' => '32']);

   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '33']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '33']);
   Calorie::create(['key'=>'Nuts','value' => '600', 'language_id' => '1','product_id' => '33']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '33']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '914', 'language_id' => '1','product_id' => '33']);

   Calorie::create(['key'=>'Baklava','value' => '400', 'language_id' => '1','product_id' => '34']);
   Calorie::create(['key'=>'Chocolate','value' => '550', 'language_id' => '1','product_id' => '34']);
   Calorie::create(['key'=>'Ice Cream','value' => '200', 'language_id' => '1','product_id' => '34']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '1150', 'language_id' => '1','product_id' => '34']);

   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '35']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '35']);
   Calorie::create(['key'=>'Nuts','value' => '600', 'language_id' => '1','product_id' => '35']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '35']);
   Calorie::create(['key'=>'Chocolate','value' => '550', 'language_id' => '1','product_id' => '35']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '1464', 'language_id' => '1','product_id' => '35']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '36']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '36']);
   Calorie::create(['key'=>'Pistachios','value' => '562', 'language_id' => '1','product_id' => '36']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '36']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '876', 'language_id' => '1','product_id' => '36']);


   Calorie::create(['key'=>'Phyllo Dough','value' => '180', 'language_id' => '1','product_id' => '37']);
   Calorie::create(['key'=>'Butter','value' => '108', 'language_id' => '1','product_id' => '37']);
   Calorie::create(['key'=>'Nuts','value' => '600', 'language_id' => '1','product_id' => '37']);
   Calorie::create(['key'=>'Sugar Syrup','value' => '26', 'language_id' => '1','product_id' => '37']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '914', 'language_id' => '1','product_id' => '37']);


   Calorie::create(['key'=>'Cake batter','value' => '300', 'language_id' => '1','product_id' => '38']);
   Calorie::create(['key'=>'Wild berries','value' => '50', 'language_id' => '1','product_id' => '38']);
   Calorie::create(['key'=>'Butter','value' => '100 ', 'language_id' => '1','product_id' => '38']);
   Calorie::create(['key'=>'Cream','value' => '200 ', 'language_id' => '1','product_id' => '38']);
   Calorie::create(['key'=>'Sugar ','value' => '50', 'language_id' => '1','product_id' => '38']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '700', 'language_id' => '1','product_id' => '38']);


   Calorie::create(['key'=>'Cake batter','value' => '300', 'language_id' => '1','product_id' => '39']);
   Calorie::create(['key'=>'Strawberries','value' => '30', 'language_id' => '1','product_id' => '39']);
   Calorie::create(['key'=>'Butter','value' => '100 ', 'language_id' => '1','product_id' => '39']);
   Calorie::create(['key'=>'Cream','value' => '200 ', 'language_id' => '1','product_id' => '39']);
   Calorie::create(['key'=>'Sugar ','value' => '50', 'language_id' => '1','product_id' => '39']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '680', 'language_id' => '1','product_id' => '39']);


   Calorie::create(['key'=>'Cake batter','value' => '300', 'language_id' => '1','product_id' => '40']);
   Calorie::create(['key'=>'Caramel sauce','value' => '350', 'language_id' => '1','product_id' => '40']);
   Calorie::create(['key'=>'Butter','value' => '100 ', 'language_id' => '1','product_id' => '40']);
   Calorie::create(['key'=>'Cream','value' => '200 ', 'language_id' => '1','product_id' => '40']);
   Calorie::create(['key'=>'Sugar ','value' => '50', 'language_id' => '1','product_id' => '40']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '1000', 'language_id' => '1','product_id' => '40']);


   Calorie::create(['key'=>'Sugar','value' => '387', 'language_id' => '1','product_id' => '41']);
   Calorie::create(['key'=>'Starch','value' => '350', 'language_id' => '1','product_id' => '41']);
   Calorie::create(['key'=>'Nuts','value' => '600', 'language_id' => '1','product_id' => '41']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '1337', 'language_id' => '1','product_id' => '41']);



   Calorie::create(['key'=>'Cream','value' => '200', 'language_id' => '1','product_id' => '42']);
   Calorie::create(['key'=>'Sugar ','value' => '400', 'language_id' => '1','product_id' => '42']);
   Calorie::create(['key'=>'Pistachios','value' => '560', 'language_id' => '1','product_id' => '42']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '1160 ', 'language_id' => '1','product_id' => '42']);


   Calorie::create(['key'=>'Low-fat yogurt','value' => '60', 'language_id' => '1','product_id' => '43']);
   Calorie::create(['key'=>'Sugar ','value' => '400', 'language_id' => '1','product_id' => '43']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '460', 'language_id' => '1','product_id' => '43']);

   Calorie::create(['key'=>'Whole milk','value' => '64', 'language_id' => '1','product_id' => '44']);
   Calorie::create(['key'=>'Chocolate','value' => '280', 'language_id' => '1','product_id' => '44']);
   Calorie::create(['key'=>'Vanilla ice cream','value' => '207', 'language_id' => '1','product_id' => '44']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '551', 'language_id' => '1','product_id' => '44']);



   Calorie::create(['key'=>'Whole milk','value' => '64', 'language_id' => '1','product_id' => '45']);
   Calorie::create(['key'=>'Fresh strawberries','value' => '32', 'language_id' => '1','product_id' => '45']);
   Calorie::create(['key'=>'Sugar','value' => '387', 'language_id' => '1','product_id' => '45']);
   Calorie::create(['key'=>'Vanilla ice cream','value' => '207', 'language_id' => '1','product_id' => '45']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '690', 'language_id' => '1','product_id' => '45']);


   Calorie::create(['key'=>'Whole milk','value' => '64', 'language_id' => '1','product_id' => '46']);
   Calorie::create(['key'=>'Pistachio nuts','value' => '562', 'language_id' => '1','product_id' => '46']);
   Calorie::create(['key'=>'Sugar','value' => '387', 'language_id' => '1','product_id' => '46']);
   Calorie::create(['key'=>'Vanilla ice cream','value' => '207', 'language_id' => '1','product_id' => '46']);
   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '1220', 'language_id' => '1','product_id' => '46']);



   Calorie::create(['key'=>'Total Calories in 100 grams','value' => '40', 'language_id' => '1','product_id' => '50']);

*/


/*
Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '1']);
Calorie::create(['key'=>'.زبدة','value' => '108', 'language_id' => '2','product_id' => '1']);
Calorie::create(['key'=>'جبنة','value' => '75', 'language_id' => '2','product_id' => '1']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '1']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '389', 'language_id' => '2','product_id' => '1']);



Calorie::create(['key'=>'عجينة الفيلو','value' => '200', 'language_id' => '2','product_id' => '2']);
Calorie::create(['key'=>'زبدة','value' => '120', 'language_id' => '2','product_id' => '2']);
Calorie::create(['key'=>'جبنة','value' => '80', 'language_id' => '2','product_id' => '2']);
Calorie::create(['key'=>'شراب السكر','value' => '30', 'language_id' => '2','product_id' => '2']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '430', 'language_id' => '2','product_id' => '2']);

Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '3']);
Calorie::create(['key'=>'زبدة','value' => '108 ', 'language_id' => '2','product_id' => '3']);
Calorie::create(['key'=>'جبنة','value' => '75', 'language_id' => '2','product_id' => '3']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '3']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '389', 'language_id' => '2','product_id' => '3']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '4']);
Calorie::create(['key'=>'زبدة','value' => '108 ', 'language_id' => '2','product_id' => '4']);
Calorie::create(['key'=>'نوتيلا','value' => '530', 'language_id' => '2','product_id' => '4']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '4']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '844', 'language_id' => '2','product_id' => '4']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '5']);
Calorie::create(['key'=>'زبدة','value' => '108 ', 'language_id' => '2','product_id' => '5']);
Calorie::create(['key'=>'كريمة','value' => '340 ', 'language_id' => '2','product_id' => '5']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '5']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '654', 'language_id' => '2','product_id' => '5']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '6']);
Calorie::create(['key'=>'زبدة','value' => '108 ', 'language_id' => '2','product_id' => '6']);
Calorie::create(['key'=>'فستق','value' => '562 ', 'language_id' => '2','product_id' => '6']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '6']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '876', 'language_id' => '2','product_id' => '6']);



Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '7']);
Calorie::create(['key'=>'زبدة','value' => '108 ', 'language_id' => '2','product_id' => '7']);
Calorie::create(['key'=>'جبنة','value' => '75 ', 'language_id' => '2','product_id' => '7']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '7']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '389', 'language_id' => '2','product_id' => '7']);



Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '8']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '8']);
Calorie::create(['key'=>'شوكولا','value' => '535', 'language_id' => '2','product_id' => '8']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '8']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '849', 'language_id' => '2','product_id' => '8']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '9']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '9']);
Calorie::create(['key'=>'نوتيلا','value' => '546', 'language_id' => '2','product_id' => '9']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '9']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '860', 'language_id' => '2','product_id' => '9']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '10']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '10']);
Calorie::create(['key'=>'دهن بيسكوف','value' => '522', 'language_id' => '2','product_id' => '10']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '10']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '836', 'language_id' => '2','product_id' => '10']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '11']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '11']);
Calorie::create(['key'=>'شوكولا','value' => '535', 'language_id' => '2','product_id' => '11']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '11']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '849', 'language_id' => '2','product_id' => '11']);

Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '12']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '12']);
Calorie::create(['key'=>'جبنة','value' => '300', 'language_id' => '2','product_id' => '12']);
Calorie::create(['key'=>'بوظة','value' => '207', 'language_id' => '2','product_id' => '12']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '795', 'language_id' => '2','product_id' => '12']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '13']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '13']);
Calorie::create(['key'=>'فستق حلبي','value' => '562', 'language_id' => '2','product_id' => '13']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '13']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '876', 'language_id' => '2','product_id' => '13']);



Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '14']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '14']);
Calorie::create(['key'=>'كريمة','value' => '340', 'language_id' => '2','product_id' => '14']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '14']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '654', 'language_id' => '2','product_id' => '14']);



Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '15']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '15']);
Calorie::create(['key'=>'جبنة','value' => '75', 'language_id' => '2','product_id' => '15']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '15']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '654', 'language_id' => '2','product_id' => '15']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '16']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '16']);
Calorie::create(['key'=>'فستق','value' => '562', 'language_id' => '2','product_id' => '16']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '16']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '876', 'language_id' => '2','product_id' => '16']);

Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '17']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '17']);
Calorie::create(['key'=>'نوتيلا','value' => '546', 'language_id' => '2','product_id' => '17']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '17']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '860', 'language_id' => '2','product_id' => '17']);



Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '18']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '18']);
Calorie::create(['key'=>'تمر','value' => '282', 'language_id' => '2','product_id' => '18']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '18']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '596', 'language_id' => '2','product_id' => '18']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '19']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '19']);
Calorie::create(['key'=>'جبنة','value' => '75', 'language_id' => '2','product_id' => '19']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '19']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '389', 'language_id' => '2','product_id' => '19']);

Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '20']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '20']);
Calorie::create(['key'=>'جبنة','value' => '75', 'language_id' => '2','product_id' => '20']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '20']);
Calorie::create(['key'=>'شوكولاتة بالحليب','value' => '535', 'language_id' => '2','product_id' => '20']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '924', 'language_id' => '2','product_id' => '20']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '21']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '21']);
Calorie::create(['key'=>'جبنة','value' => '75', 'language_id' => '2','product_id' => '21']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '21']);
Calorie::create(['key'=>'شوكولاتة بيضاء','value' => '539', 'language_id' => '2','product_id' => '21']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '928', 'language_id' => '2','product_id' => '21']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '22']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '22']);
Calorie::create(['key'=>'جبنة','value' => '75', 'language_id' => '2','product_id' => '22']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '22']);
Calorie::create(['key'=>'بيسكوف','value' => '584', 'language_id' => '2','product_id' => '22']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '973', 'language_id' => '2','product_id' => '22']);

Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '23']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '23']);
Calorie::create(['key'=>'جبنة','value' => '75', 'language_id' => '2','product_id' => '23']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '23']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '389', 'language_id' => '2','product_id' => '23']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '24']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '24']);
Calorie::create(['key'=>'جبنة','value' => '75', 'language_id' => '2','product_id' => '24']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '24']);
Calorie::create(['key'=>'شوكولاتة الحليب','value' => '535', 'language_id' => '2','product_id' => '24']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '924', 'language_id' => '2','product_id' => '24']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '25']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '25']);
Calorie::create(['key'=>'جبنة','value' => '75', 'language_id' => '2','product_id' => '25']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '25']);
Calorie::create(['key'=>'فستق','value' => '562', 'language_id' => '2','product_id' => '25']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '562', 'language_id' => '2','product_id' => '25']);

Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '26']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '26']);
Calorie::create(['key'=>'جبنة','value' => '75', 'language_id' => '2','product_id' => '26']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '26']);
Calorie::create(['key'=>'فستق','value' => '562', 'language_id' => '2','product_id' => '26']);
Calorie::create(['key'=>'شوكولاتة بالحليب','value' => '535', 'language_id' => '2','product_id' => '26']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '1486', 'language_id' => '2','product_id' => '26']);

Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '27']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '27']);
Calorie::create(['key'=>'كريمة','value' => '195', 'language_id' => '2','product_id' => '27']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '27']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '509', 'language_id' => '2','product_id' => '27']);

Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '28']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '28']);
Calorie::create(['key'=>'نوتيلا','value' => '546', 'language_id' => '2','product_id' => '28']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '28']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '860', 'language_id' => '2','product_id' => '28']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '29']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '29']);
Calorie::create(['key'=>'المكسرات','value' => '600', 'language_id' => '2','product_id' => '29']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '29']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '914', 'language_id' => '2','product_id' => '29']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '30']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '30']);
Calorie::create(['key'=>'الفستق','value' => '562', 'language_id' => '2','product_id' => '30']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '30']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '876', 'language_id' => '2','product_id' => '30']);

Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '31']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '31']);
Calorie::create(['key'=>'مكسرات','value' => '600', 'language_id' => '2','product_id' => '31']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '31']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '914', 'language_id' => '2','product_id' => '31']);

Calorie::create(['key'=>'بقلاوة','value' => '400', 'language_id' => '2','product_id' => '32']);
Calorie::create(['key'=>'بوظة','value' => '200', 'language_id' => '2','product_id' => '32']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '600', 'language_id' => '2','product_id' => '32']);

Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '33']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '33']);
Calorie::create(['key'=>'المكسرات','value' => '600', 'language_id' => '2','product_id' => '33']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '33']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '914', 'language_id' => '2','product_id' => '33']);

Calorie::create(['key'=>'بقلاوة','value' => '400', 'language_id' => '2','product_id' => '34']);
Calorie::create(['key'=>'شوكولا','value' => '550', 'language_id' => '2','product_id' => '34']);
Calorie::create(['key'=>'يوظة','value' => '200', 'language_id' => '2','product_id' => '34']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '1150', 'language_id' => '2','product_id' => '34']);

Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '35']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '35']);
Calorie::create(['key'=>'مكسرات','value' => '600', 'language_id' => '2','product_id' => '35']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '35']);
Calorie::create(['key'=>'شوكولا','value' => '550', 'language_id' => '2','product_id' => '35']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '1464', 'language_id' => '2','product_id' => '35']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '36']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '36']);
Calorie::create(['key'=>'فستق','value' => '562', 'language_id' => '2','product_id' => '36']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '36']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '876', 'language_id' => '2','product_id' => '36']);


Calorie::create(['key'=>'عجينة الفيلو','value' => '180', 'language_id' => '2','product_id' => '37']);
Calorie::create(['key'=>'زبدة','value' => '108', 'language_id' => '2','product_id' => '37']);
Calorie::create(['key'=>'مكسرات','value' => '600', 'language_id' => '2','product_id' => '37']);
Calorie::create(['key'=>'شراب السكر','value' => '26', 'language_id' => '2','product_id' => '37']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '914', 'language_id' => '2','product_id' => '37']);


Calorie::create(['key'=>'خليط الكيك','value' => '300', 'language_id' => '2','product_id' => '38']);
Calorie::create(['key'=>'توت بري','value' => '50', 'language_id' => '2','product_id' => '38']);
Calorie::create(['key'=>'زبدة','value' => '100 ', 'language_id' => '2','product_id' => '38']);
Calorie::create(['key'=>'كريمة','value' => '200 ', 'language_id' => '2','product_id' => '38']);
Calorie::create(['key'=>'سكر ','value' => '50', 'language_id' => '2','product_id' => '38']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '700', 'language_id' => '2','product_id' => '38']);


Calorie::create(['key'=>'خليط الكيك','value' => '300', 'language_id' => '2','product_id' => '39']);
Calorie::create(['key'=>'فراولة','value' => '30', 'language_id' => '2','product_id' => '39']);
Calorie::create(['key'=>'زبدة','value' => '100 ', 'language_id' => '2','product_id' => '39']);
Calorie::create(['key'=>'كريمة','value' => '200 ', 'language_id' => '2','product_id' => '39']);
Calorie::create(['key'=>'سكر ','value' => '50', 'language_id' => '2','product_id' => '39']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '680', 'language_id' => '2','product_id' => '39']);


Calorie::create(['key'=>'خليط الكيك','value' => '300', 'language_id' => '2','product_id' => '40']);
Calorie::create(['key'=>'صوص الكراميل','value' => '350', 'language_id' => '2','product_id' => '40']);
Calorie::create(['key'=>'زبدة','value' => '100 ', 'language_id' => '2','product_id' => '40']);
Calorie::create(['key'=>'كريمة','value' => '200 ', 'language_id' => '2','product_id' => '40']);
Calorie::create(['key'=>'سكر ','value' => '50', 'language_id' => '2','product_id' => '40']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '1000', 'language_id' => '2','product_id' => '40']);


Calorie::create(['key'=>'سكر','value' => '387', 'language_id' => '2','product_id' => '41']);
Calorie::create(['key'=>'نشاء','value' => '350', 'language_id' => '2','product_id' => '41']);
Calorie::create(['key'=>'مكسرات','value' => '600', 'language_id' => '2','product_id' => '41']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '1337', 'language_id' => '2','product_id' => '41']);



Calorie::create(['key'=>'كريمة','value' => '200', 'language_id' => '2','product_id' => '42']);
Calorie::create(['key'=>'سكر ','value' => '400', 'language_id' => '2','product_id' => '42']);
Calorie::create(['key'=>'فستق','value' => '560', 'language_id' => '2','product_id' => '42']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '1160 ', 'language_id' => '2','product_id' => '42']);


Calorie::create(['key'=>'زبادي قليل الدسم','value' => '60', 'language_id' => '2','product_id' => '43']);
Calorie::create(['key'=>'سكر ','value' => '400', 'language_id' => '2','product_id' => '43']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '460', 'language_id' => '2','product_id' => '43']);

Calorie::create(['key'=>'حليب كامل الدسم"','value' => '64', 'language_id' => '2','product_id' => '44']);
Calorie::create(['key'=>'شوكولا','value' => '280', 'language_id' => '2','product_id' => '44']);
Calorie::create(['key'=>'آيس كريم الفانيليا','value' => '207', 'language_id' => '2','product_id' => '44']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '551', 'language_id' => '2','product_id' => '44']);



Calorie::create(['key'=>'حليب كامل الدسم','value' => '64', 'language_id' => '2','product_id' => '45']);
Calorie::create(['key'=>'فراولة طازجة','value' => '32', 'language_id' => '2','product_id' => '45']);
Calorie::create(['key'=>'سكر','value' => '387', 'language_id' => '2','product_id' => '45']);
Calorie::create(['key'=>'آيس كريم الفانيليا','value' => '207', 'language_id' => '2','product_id' => '45']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '690', 'language_id' => '2','product_id' => '45']);


Calorie::create(['key'=>'حليب كامل الدسم','value' => '64', 'language_id' => '2','product_id' => '46']);
Calorie::create(['key'=>'فستق نيء','value' => '562', 'language_id' => '2','product_id' => '46']);
Calorie::create(['key'=>'سكر','value' => '387', 'language_id' => '2','product_id' => '46']);
Calorie::create(['key'=>'بوظة بنكهة الفانيليا','value' => '207', 'language_id' => '2','product_id' => '46']);
Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '1220', 'language_id' => '2','product_id' => '46']);



Calorie::create(['key'=>'إجمالي السعرات الحرارية في 100 جرام','value' => '40', 'language_id' => '2','product_id' => '50']);
*/
    }
}
