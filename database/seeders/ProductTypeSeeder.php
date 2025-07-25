<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_types')->insert([
            ['name' => 'Premium', 'api_unique_number' => 'API123'],
            ['name' => 'Standard', 'api_unique_number' => 'API456'],
        ]);
    }
}
