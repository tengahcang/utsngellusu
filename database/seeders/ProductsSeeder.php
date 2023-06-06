<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Monkey #1',
                'price' => 0.60,
                'image'=> 'NFT1.jpg',
                'type_id'=> 1
            ],
            [
                'name' => 'Monkey #2',
                'price' => 0.70,
                'image'=> 'NFT2.jpg',
                'type_id'=> 1
            ],
            [
                'name' => 'Monkey #3',
                'price' => 0.90,
                'image'=> 'NFT3.jpg',
                'type_id'=> 1
            ],
            [
                'name' => 'Monkey #4',
                'price' => 0.30,
                'image'=> 'NFT4.jpg',
                'type_id'=> 1
            ],
            [
                'name' => 'Monkey #5',
                'price' => 0.80,
                'image'=> 'NFT5.jpg',
                'type_id'=> 1
            ],
            [
                'name' => 'Monkey #6',
                'price' => 0.60,
                'image'=> 'NFT6.jpg',
                'type_id'=> 1
            ],
            [
                'name' => 'Monkey #7',
                'price' => 0.90,
                'image'=> 'NFT7.jpg',
                'type_id'=> 1

            ],
            [
                'name' => 'Monkey #8',
                'price' => 0.80,
                'image'=> 'NFT8.jpg',
                'type_id'=> 1

            ]
        ]);
    }
}
