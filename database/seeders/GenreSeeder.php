<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['nom' => 'homme', "created_at" => now()],
            ['nom' => 'femme', "created_at" => now()],
            ['nom' => 'autre', "created_at" => now()],
        ]);
    }
}
