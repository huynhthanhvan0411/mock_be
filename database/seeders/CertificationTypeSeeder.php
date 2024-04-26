<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('certification_types')->insert([
            ['name' => 'TOEIC', 'status' => 1, 'created_at' => now()],
            ['name' => 'TOEFL', 'status' => 1,'created_at' => now()],
            ['name' => 'IELTS', 'status' => 1,'created_at' => now()],
            ['name' => 'JLPT', 'status' => 1,'created_at' => now()],
            ['name' => 'GOOGLE UI', 'status' => 0, 'created_at' => now()]
        ]);
    }
}
