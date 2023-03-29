<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\FishFamily;

class FishAlkalineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fish')->insert([
            [
                "name" => "Kinguio",
                "family_id" => DB::table('fish_families')->where("name", "Cyprinidae")->first()->id,
                "scientific_name" => "Carassius auratus",
                "size_avg" => 12,
                "ph_min" => 7.0,
                "ph_max" => 7.4,
                "temperature_min" => 10,
                "temperature_max" => 28,
                "aggressive" => false,
                "shoal_min" => 3,
            ]
        ]);
    }
}
