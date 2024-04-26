<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('positions')->insert([
            ['name' => 'Develop BE', 'status' => 1, 'created_at' => now()],
            ['name' => 'Develop FE', 'status' => 1,'created_at' => now()],
            ['name' => 'Tech Lead', 'status' => 1,'created_at' => now()],
            ['name' => 'Scrum Master', 'status' => 0,'created_at' => now()],
            ['name' =>  'Product Manager', 'status'=> 1,'created_at' => now()],
            ['name' => 'BA', 'status' => 1,'created_at' => now()],
            ['name' => 'Comtor', 'status' => 1,'created_at' => now()],
            ['name' => 'Intern', 'status' => 1,'created_at' => now()],
        ]);
    }
}
