<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\FishFamily;

class FishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fish')->insert([
            [
                "name" => "Tetra Neon",
                "family_id" => DB::table('fish_families')->where("name", "Characidae")->first()->id,
                "scientific_name" => "Paracheirodon innesi",
                "size_avg" => 12,
                "ph_min" => 4.0,
                "ph_max" => 7.0,
                "temperature_min" => 24,
                "temperature_max" => 30,
                "aggressive" => false,
                "shoal_min" => 8,
            ],
            [
                "name" => "Acará Bandeira",
                "family_id" => DB::table('fish_families')->where("name", "Cichlidae")->first()->id,
                "scientific_name" => "Pterophyllum scalare",
                "size_avg" => 3,
                "ph_min" => 5.5,
                "ph_max" => 7.4,
                "temperature_min" => 24,
                "temperature_max" => 30,
                "aggressive" => true,
                "shoal_min" => 4,
            ],
            [
                "name" => "Mato Grosso",
                "family_id" => DB::table('fish_families')->where("name", "Characidae")->first()->id,
                "scientific_name" => "Hyphessobrycon eques",
                "size_avg" => 4,
                "ph_min" => 5.0,
                "ph_max" => 7.6,
                "temperature_min" => 20,
                "temperature_max" => 30,
                "aggressive" => false,
                "shoal_min" => 8,
            ],
            [
                "name" => "Coridoras Adolfoi",
                "family_id" => DB::table('fish_families')->where("name", "Callichthyidae")->first()->id,
                "scientific_name" => "Corydoras adolfoi",
                "size_avg" => 4,
                "ph_min" => 5.0,
                "ph_max" => 7.4,
                "temperature_min" => 22,
                "temperature_max" => 28,
                "aggressive" => false,
                "shoal_min" => 5,
            ],
            [
                "name" => "Acará Disco",
                "family_id" => DB::table('fish_families')->where("name", "Cichlidae")->first()->id,
                "scientific_name" => "Symphysodon aequifasciatus",
                "size_avg" => 15,
                "ph_min" => 5.0,
                "ph_max" => 7.4,
                "temperature_min" => 26,
                "temperature_max" => 30,
                "aggressive" => true,
                "shoal_min" => 5,
            ],
        ]);
    }
}
