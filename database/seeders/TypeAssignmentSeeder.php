<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_assignments')->insert([
            ['type_assignment_type' => 'App\\Models\\Product', 'type_assignment_id' => 1, 'type_id' => 1, 'my_bonus_field' => 'bonus1'],
            ['type_assignment_type' => 'App\\Models\\ProductCategory', 'type_assignment_id' => 1, 'type_id' => 1, 'my_bonus_field' => 'bonus2'],
            ['type_assignment_type' => 'App\\Models\\ProductCategory', 'type_assignment_id' => 2, 'type_id' => 2, 'my_bonus_field' => 'bonus3'],
        ]);
    }
}
