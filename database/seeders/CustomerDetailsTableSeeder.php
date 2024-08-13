<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerDetailsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('customer_details')->insert([
            [
                'parameter_id' => 1,
                'parameter_value' => 'Value 1',
                'customer_id' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_id' => 2,
                'parameter_value' => 'Value 2',
                'customer_id' => 2,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_id' => 3,
                'parameter_value' => 'Value 3',
                'customer_id' => 3,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_id' => 4,
                'parameter_value' => 'Value 4',
                'customer_id' => 4,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_id' => 5,
                'parameter_value' => 'Value 5',
                'customer_id' => 5,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_id' => 6,
                'parameter_value' => 'Value 6',
                'customer_id' => 6,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_id' => 7,
                'parameter_value' => 'Value 7',
                'customer_id' => 7,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_id' => 8,
                'parameter_value' => 'Value 8',
                'customer_id' => 8,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_id' => 9,
                'parameter_value' => 'Value 9',
                'customer_id' => 9,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parameter_id' => 10,
                'parameter_value' => 'Value 10',
                'customer_id' => 10,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
