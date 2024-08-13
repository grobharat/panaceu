<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParametersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('parameters')->insert([
            [
                'name' => 'Customer Name',
                'description' => 'Name of the customer',
                'type' => 'customer',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Email',
                'description' => 'Email of the customer',
                'type' => 'customer',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Primary Phone',
                'description' => 'Phone No. of the customer',
                'type' => 'customer',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'WhatsApp',
                'description' => 'WhatsApp No. of the customer',
                'type' => 'customer',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alternate Phone',
                'description' => 'Phone No. of the customer',
                'type' => 'customer',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Contact Person',
                'description' => 'Other contact person',
                'type' => 'customer',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Contact Person Phone',
                'description' => 'Other contact person Phone',
                'type' => 'customer',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Address',
                'description' => 'Address',
                'type' => 'customer',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project Name',
                'description' => 'Name of the project',
                'type' => 'project',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Customer Satisfaction',
                'description' => 'The level of satisfaction from the customer.',
                'type' => 'customer',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project Type',
                'description' => 'Project type CBG, Hydro power, Solar, Hydrogen',
                'type' => 'project',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Customer Feedback',
                'description' => 'Feedback received from the customer.',
                'type' => 'customer',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Resource Allocation',
                'description' => 'Allocation of resources for the project.',
                'type' => 'project',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Customer Requirements',
                'description' => 'Specific requirements provided by the customer.',
                'type' => 'customer',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project Timeline',
                'description' => 'The timeline for the project phases.',
                'type' => 'project',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Customer Demographics',
                'description' => 'Demographic information of the customer.',
                'type' => 'customer',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project Scope',
                'description' => 'The scope and boundaries of the project.',
                'type' => 'project',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Customer Preferences',
                'description' => 'Preferences and expectations of the customer.',
                'type' => 'customer',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Name of business',
                'description' => 'Name of business',
                'type' => 'business',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Type of Business Entity',
                'description' => 'Type of business Entity Proprietorship, LLP, Private limited',
                'type' => 'business',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'GST Number',
                'description' => 'Type of business Entity Proprietorship, LLP, Private limited',
                'type' => 'business',
                'status'=>1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

