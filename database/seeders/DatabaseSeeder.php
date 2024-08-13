<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            CountriesTableSeeder::class,
            IndiaStatesTableSeeder::class,
            UttarPradeshDistrictsTableSeeder::class,
            TehsilsUpTableSeeder::class,
            ParametersTableSeeder::class,
            CustomersTableSeeder::class,
            CustomerDetailsTableSeeder::class,
            ProjectsTableSeeder::class,
            ProjectDetailsTableSeeder::class,
        ]);


        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@panaceu.com',
            'email_verified_at' => now(),
            'password' => Hash::make('panaceu'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        
    }
}
