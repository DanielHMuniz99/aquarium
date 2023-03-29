<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FishTesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fish')->insert([
            [
                "name" => "Teste A",
                "family_id" => DB::table('fish_families')->where("name", "Characidae")->first()->id,
                "scientific_name" => "Paracheirodon innesi",
                "size_avg" => 27,
                "ph_min" => 4.0,
                "ph_max" => 7.0,
                "temperature_min" => 24,
                "temperature_max" => 30,
                "aggressive" => true,
                "shoal_min" => 1,
            ],
            [
                "name" => "Teste B",
                "family_id" => DB::table('fish_families')->where("name", "Cichlidae")->first()->id,
                "scientific_name" => "Pterophyllum scalare",
                "size_avg" => 26,
                "ph_min" => 5.5,
                "ph_max" => 7.4,
                "temperature_min" => 24,
                "temperature_max" => 30,
                "aggressive" => true,
                "shoal_min" => 2,
            ],
            [
                "name" => "Teste C",
                "family_id" => DB::table('fish_families')->where("name", "Characidae")->first()->id,
                "scientific_name" => "Hyphessobrycon eques",
                "size_avg" => 14,
                "ph_min" => 5.0,
                "ph_max" => 7.6,
                "temperature_min" => 20,
                "temperature_max" => 30,
                "aggressive" => false,
                "shoal_min" => 4,
            ],
            [
                "name" => "Teste D",
                "family_id" => DB::table('fish_families')->where("name", "Callichthyidae")->first()->id,
                "scientific_name" => "Corydoras adolfoi",
                "size_avg" => 10,
                "ph_min" => 5.0,
                "ph_max" => 7.4,
                "temperature_min" => 22,
                "temperature_max" => 28,
                "aggressive" => true,
                "shoal_min" => 7,
            ],
            [
                "name" => "Teste E",
                "family_id" => DB::table('fish_families')->where("name", "Cichlidae")->first()->id,
                "scientific_name" => "Symphysodon aequifasciatus",
                "size_avg" => 15,
                "ph_min" => 5.0,
                "ph_max" => 7.4,
                "temperature_min" => 26,
                "temperature_max" => 30,
                "aggressive" => false,
                "shoal_min" => 3,
            ],
            [
                "name" => "Teste F",
                "family_id" => DB::table('fish_families')->where("name", "Cichlidae")->first()->id,
                "scientific_name" => "Symphysodon aequifasciatus",
                "size_avg" => 21,
                "ph_min" => 5.0,
                "ph_max" => 7.4,
                "temperature_min" => 26,
                "temperature_max" => 30,
                "aggressive" => false,
                "shoal_min" => 5,
            ],
            [
                "name" => "Teste G",
                "family_id" => DB::table('fish_families')->where("name", "Cichlidae")->first()->id,
                "scientific_name" => "Symphysodon aequifasciatus",
                "size_avg" => 18,
                "ph_min" => 5.0,
                "ph_max" => 7.4,
                "temperature_min" => 26,
                "temperature_max" => 30,
                "aggressive" => false,
                "shoal_min" => 10,
            ]
        ]);
    }
}
