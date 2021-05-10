<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                "nom" => "Uccle Volley Club",
                "ville" => "Brussels",
                "pays" => "Belgium",
                "continent" => "Europe",
                "max" => 6,
                "created_at" => now()
            ],
            [
                "nom" => "Molenbeek Volley Club",
                "ville" => "Brussels",
                "pays" => "Belgium",
                "continent" => "Europe",
                "max" => 6,
                "created_at" => now()
            ],
        ]);
    }
}
