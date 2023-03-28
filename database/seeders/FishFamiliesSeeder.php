<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FishFamiliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fish_families')->insert([
            [
                "name" => "Characidae"
            ],
            [
                "name" => "Cichlidae"
            ],
            [
                "name" => "Callichthyidae"
            ],
        ]);
    }
}
