<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            [
                "nom" => "Dupont",
                "prenom" => "Alix",
                "age" => 25,
                "phone" => 476536499,
                "email" => "alixdupont@gmail.com",
                "country" => "Belgium",
                "photo" => "photo",
                // "genre_id" => 2,
                // "role_id" => 1,
                // "team_id" => 1,
                "created_at" => now()
            ],
        ]);
    }
}
