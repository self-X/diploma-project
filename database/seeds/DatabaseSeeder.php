<?php

use Illuminate\Database\Seeder;
use App\Sizeofproduct;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
        Sizeofproduct::create([
            'title' => '',
            'alias' => 'XL',
        ]);

        Sizeofproduct::create([
            'title' => '',
            'alias' => 'L',
        ]);
        Sizeofproduct::create([
            'title' => '',
            'alias' => 'M',
        ]);
        Sizeofproduct::create([
            'title' => '',
            'alias' => 'S',
        ]);

    }

}
