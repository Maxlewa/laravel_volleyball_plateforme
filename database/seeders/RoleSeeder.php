<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['nom' => 'AT', "created_at" => now()],
            ['nom' => 'DF', "created_at" => now()],
            ['nom' => 'ML', "created_at" => now()],
            ['nom' => 'GD', "created_at" => now()],
        ]);
    }
}
