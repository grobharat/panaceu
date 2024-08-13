<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UttarPradeshDistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uttar_pradesh_state_id = DB::table('states')->where('name', 'Uttar Pradesh')->value('id');

        $districts = [
            ['id' => 1, 'name' => 'Unknown', 'state_id' => 1],
            ['id' => 2, 'name' => 'Aligarh', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 3, 'name' => 'Prayagraj', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 4, 'name' => 'Ambedkar Nagar', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 5, 'name' => 'Amethi', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 6, 'name' => 'Amroha', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 7, 'name' => 'Auraiya', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 8, 'name' => 'Azamgarh', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 9, 'name' => 'Baghpat', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 10, 'name' => 'Bahraich', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 11, 'name' => 'Ballia', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 12, 'name' => 'Balrampur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 13, 'name' => 'Banda', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 14, 'name' => 'Barabanki', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 15, 'name' => 'Bareilly', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 16, 'name' => 'Basti', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 17, 'name' => 'Bhadohi', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 18, 'name' => 'Bijnor', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 19, 'name' => 'Budaun', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 20, 'name' => 'Bulandshahr', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 21, 'name' => 'Chandauli', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 22, 'name' => 'Chitrakoot', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 23, 'name' => 'Deoria', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 24, 'name' => 'Etah', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 25, 'name' => 'Etawah', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 26, 'name' => 'Faizabad', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 27, 'name' => 'Farrukhabad', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 28, 'name' => 'Fatehpur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 29, 'name' => 'Firozabad', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 30, 'name' => 'Gautam Buddha Nagar', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 31, 'name' => 'Ghaziabad', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 32, 'name' => 'Ghazipur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 33, 'name' => 'Gonda', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 34, 'name' => 'Gorakhpur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 35, 'name' => 'Hamirpur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 36, 'name' => 'Hapur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 37, 'name' => 'Hardoi', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 38, 'name' => 'Hathras', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 39, 'name' => 'Jalaun', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 40, 'name' => 'Jaunpur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 41, 'name' => 'Jhansi', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 42, 'name' => 'Kannauj', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 43, 'name' => 'Kanpur Dehat', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 44, 'name' => 'Kanpur Nagar', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 45, 'name' => 'Kasganj', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 46, 'name' => 'Kaushambi', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 47, 'name' => 'Kheri', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 48, 'name' => 'Kushinagar', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 49, 'name' => 'Lalitpur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 50, 'name' => 'Lucknow', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 51, 'name' => 'Maharajganj', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 52, 'name' => 'Mahoba', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 53, 'name' => 'Mainpuri', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 54, 'name' => 'Mathura', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 55, 'name' => 'Mau', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 56, 'name' => 'Meerut', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 57, 'name' => 'Mirzapur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 58, 'name' => 'Moradabad', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 59, 'name' => 'Muzaffarnagar', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 60, 'name' => 'Pilibhit', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 61, 'name' => 'Pratapgarh', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 62, 'name' => 'Raebareli', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 63, 'name' => 'Rampur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 64, 'name' => 'Saharanpur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 65, 'name' => 'Sambhal', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 66, 'name' => 'Sant Kabir Nagar', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 67, 'name' => 'Shahjahanpur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 68, 'name' => 'Shamli', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 69, 'name' => 'Shravasti', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 70, 'name' => 'Siddharthnagar', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 71, 'name' => 'Sitapur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 72, 'name' => 'Sonbhadra', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 73, 'name' => 'Sultanpur', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 74, 'name' => 'Unnao', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 75, 'name' => 'Varanasi', 'state_id' => $uttar_pradesh_state_id],
            ['id' => 76, 'name' => 'Agra', 'state_id' => $uttar_pradesh_state_id],
        ];

        DB::table('districts')->insert($districts);
    }
}

