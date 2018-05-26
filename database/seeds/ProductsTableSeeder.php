<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 100; $i++){
            Product::create([
                    'title' => 'product title'.$i,
                    'description' => 'product detail description with all option and bla-bla description word description 
                                      met in thant text more the three times . Lorem ipsum dollar sit amet',
                    'img_name' => rand(1, 11).'.jpg',
                    'price' => rand(25, 247).'$',
                    'category_id' => rand(1, 11),
                    'isAvailable' =>rand(0, 1),
                ]);
        }
    }




}
