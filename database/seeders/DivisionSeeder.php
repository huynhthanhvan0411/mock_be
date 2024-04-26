<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('divisions')->insert([
            ['name' => 'Hades', 'status' => 1],
            ['name' => 'Faderless', 'status' => 1],
            ['name' => 'Phoenix', 'status' => 1],
            ['name' => 'Warrior', 'status' => 1],
            ['name' =>  'ALC', 'status'=> 1],
            ['name' => 'Valkyrie', 'status' => 0],
        ]);
    }
}
