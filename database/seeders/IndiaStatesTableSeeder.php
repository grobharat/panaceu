<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndiaStatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $india_country_id = DB::table('countries')->where('name', 'India')->value('id');

        $states = [
            ['id' => 1, 'name' => 'Unknown', 'iso_code' => 'UN', 'country_id' => 1],
            ['id' => 2, 'name' => 'Arunachal Pradesh', 'iso_code' => 'AR', 'country_id' => $india_country_id],
            ['id' => 3, 'name' => 'Assam', 'iso_code' => 'AS', 'country_id' => $india_country_id],
            ['id' => 4, 'name' => 'Bihar', 'iso_code' => 'BR', 'country_id' => $india_country_id],
            ['id' => 5, 'name' => 'Chhattisgarh', 'iso_code' => 'CT', 'country_id' => $india_country_id],
            ['id' => 6, 'name' => 'Goa', 'iso_code' => 'GA', 'country_id' => $india_country_id],
            ['id' => 7, 'name' => 'Gujarat', 'iso_code' => 'GJ', 'country_id' => $india_country_id],
            ['id' => 8, 'name' => 'Haryana', 'iso_code' => 'HR', 'country_id' => $india_country_id],
            ['id' => 9, 'name' => 'Himachal Pradesh', 'iso_code' => 'HP', 'country_id' => $india_country_id],
            ['id' => 10, 'name' => 'Jharkhand', 'iso_code' => 'JH', 'country_id' => $india_country_id],
            ['id' => 11, 'name' => 'Karnataka', 'iso_code' => 'KA', 'country_id' => $india_country_id],
            ['id' => 12, 'name' => 'Kerala', 'iso_code' => 'KL', 'country_id' => $india_country_id],
            ['id' => 13, 'name' => 'Madhya Pradesh', 'iso_code' => 'MP', 'country_id' => $india_country_id],
            ['id' => 14, 'name' => 'Maharashtra', 'iso_code' => 'MH', 'country_id' => $india_country_id],
            ['id' => 15, 'name' => 'Manipur', 'iso_code' => 'MN', 'country_id' => $india_country_id],
            ['id' => 16, 'name' => 'Meghalaya', 'iso_code' => 'ML', 'country_id' => $india_country_id],
            ['id' => 17, 'name' => 'Mizoram', 'iso_code' => 'MZ', 'country_id' => $india_country_id],
            ['id' => 18, 'name' => 'Nagaland', 'iso_code' => 'NL', 'country_id' => $india_country_id],
            ['id' => 19, 'name' => 'Odisha', 'iso_code' => 'OR', 'country_id' => $india_country_id],
            ['id' => 20, 'name' => 'Punjab', 'iso_code' => 'PB', 'country_id' => $india_country_id],
            ['id' => 21, 'name' => 'Rajasthan', 'iso_code' => 'RJ', 'country_id' => $india_country_id],
            ['id' => 22, 'name' => 'Sikkim', 'iso_code' => 'SK', 'country_id' => $india_country_id],
            ['id' => 23, 'name' => 'Tamil Nadu', 'iso_code' => 'TN', 'country_id' => $india_country_id],
            ['id' => 24, 'name' => 'Telangana', 'iso_code' => 'TG', 'country_id' => $india_country_id],
            ['id' => 25, 'name' => 'Tripura', 'iso_code' => 'TR', 'country_id' => $india_country_id],
            ['id' => 26, 'name' => 'Uttar Pradesh', 'iso_code' => 'UP', 'country_id' => $india_country_id],
            ['id' => 27, 'name' => 'Uttarakhand', 'iso_code' => 'UT', 'country_id' => $india_country_id],
            ['id' => 28, 'name' => 'West Bengal', 'iso_code' => 'WB', 'country_id' => $india_country_id],
            ['id' => 29, 'name' => 'Andaman and Nicobar Islands', 'iso_code' => 'AN', 'country_id' => $india_country_id],
            ['id' => 30, 'name' => 'Chandigarh', 'iso_code' => 'CH', 'country_id' => $india_country_id],
            ['id' => 31, 'name' => 'Dadra and Nagar Haveli and Daman and Diu', 'iso_code' => 'DN', 'country_id' => $india_country_id],
            ['id' => 32, 'name' => 'Delhi', 'iso_code' => 'DL', 'country_id' => $india_country_id],
            ['id' => 33, 'name' => 'Jammu and Kashmir', 'iso_code' => 'JK', 'country_id' => $india_country_id],
            ['id' => 34, 'name' => 'Ladakh', 'iso_code' => 'LA', 'country_id' => $india_country_id],
            ['id' => 35, 'name' => 'Lakshadweep', 'iso_code' => 'LD', 'country_id' => $india_country_id],
            ['id' => 36, 'name' => 'Puducherry', 'iso_code' => 'PY', 'country_id' => $india_country_id],
            ['id' => 37, 'name' => 'Andhra Pradesh', 'iso_code' => 'AP', 'country_id' => $india_country_id],

        ];

        DB::table('states')->insert($states);
    }
}
