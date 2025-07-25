<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_colors')->insert([
            ['name' => 'Red', 'description' => 'Red', 'hex_code' => '#FF0000'],
            ['name' => 'Green', 'description' => 'Green', 'hex_code' => '#00FF00'],
            ['name' => 'Blue', 'description' => 'Blue', 'hex_code' => '#0000FF'],
        ]);
    }
}
