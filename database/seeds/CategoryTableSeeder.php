<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->generateCategories();
    }


    /**
     * Generate Categories
     */
    public function generateCategories()
    {

        $categories=[

            'bags'=> 'Stylish leather handbags',
            'footwear' => 'quality branded shoes',
            'accessories' => 'take a brand new things',
            'kids' =>'The best for our kids with love',
            'sweater' => 'nice and warm sweaters',
            't-shirt' => 'brand new T-shirts',
            'glasses' => 'elegant brand new glasses',
            'tuxedo' => 'Lorem Ipsum Dollar Sit Amet',
            'pants' =>'Lorem Ipsum Dollar Sit Amet',
            'jeans' =>'Lorem Ipsum Dollar Sit Amet',
            'mystery box' => 'Lorem Ipsum Dollar Sit Amet',

        ];

        foreach ($categories as $category => $description){
            Category::create([
                'title' => $category,
                'description' => $description
            ]);
        }
    }

}
