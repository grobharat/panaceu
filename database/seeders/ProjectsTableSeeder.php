<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->insert([
            [
                'tehsil_id' => 1,
                'customer_id' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tehsil_id' => 2,
                'customer_id' => 2,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tehsil_id' => 3,
                'customer_id' => 3,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tehsil_id' => 4,
                'customer_id' => 4,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tehsil_id' => 5,
                'customer_id' => 5,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tehsil_id' => 6,
                'customer_id' => 6,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tehsil_id' => 7,
                'customer_id' => 7,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tehsil_id' => 8,
                'customer_id' => 8,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tehsil_id' => 9,
                'customer_id' => 9,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tehsil_id' => 10,
                'customer_id' => 10,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
