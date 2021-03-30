<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Iphone x1',
                'code' => 'code 1',
                'description' => 'description 1',
                'price' => '231212312',
                'category_id' => 1,
                'image' => 'products/iphone1.jpg',
                'count' => rand(1, 90)
            ],
            [
                'name' => 'Iphone x2',
                'code' => 'code 2',
                'description' => 'description 2',
                'price' => '232',
                'category_id' => 1,
                'image' => 'products/iphone2.jpg',
                'count' => rand(1, 90)
            ],
            [
                'name' => 'Iphone x3',
                'code' => 'code 3',
                'description' => 'description 3',
                'price' => '3333',
                'category_id' => 1,
                'image' => 'products/iphone3.jpg',
                'count' => rand(1, 90)
            ],
            [
                'name' => 'Iphone x4',
                'code' => 'code 4',
                'description' => 'description 4',
                'price' => '4444',
                'category_id' => 1,
                'image' => 'products/iphone4.jpg',
                'count' => rand(19, 90)
            ],
            [
                'name' => 'teslacall',
                'code' => 'code tesla',
                'description' => 'description teslaphone',
                'price' => '299912',
                'category_id' => 2,
                'image' => 'products/tesla_call.jpg',
                'count' => rand(1, 909)
            ],
        ]);
    }
}
