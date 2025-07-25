<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Smartphone',
                'product_category_id' => 1,
                'product_color_id' => 1,
                'description' => 'Smartphone with great features',
            ],
            [
                'name' => 'Office Chair',
                'product_category_id' => 2,
                'product_color_id' => 2,
                'description' => 'Comfortable office chair',
            ],
        ]);

    }
}
