<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('certifications')->insert([
            ['certification_type_id' => 1, 'name' => '450', 'created_at' => now()],
            ['certification_type_id' => 1, 'name' => '750', 'created_at' => now()],
            ['certification_type_id' => 2, 'name' => '100', 'created_at' => now()],
            ['certification_type_id' => 2, 'name' => '80', 'created_at' => now()],
            ['certification_type_id' => 3, 'name' => '6.0', 'created_at' => now()],
            ['certification_type_id' => 3, 'name' => '5.0', 'created_at' => now()],
            ['certification_type_id' => 3, 'name' => '4.0', 'created_at' => now()],
            ['certification_type_id' => 3, 'name' => '8.5', 'created_at' => now()],
            ['certification_type_id' => 4, 'name' => 'N1', 'created_at' => now()],
            ['certification_type_id' => 4, 'name' => 'N2', 'created_at' => now()],
            ['certification_type_id' => 4, 'name' => 'N3', 'created_at' => now()],
            ['certification_type_id' => 4, 'name' => 'N4', 'created_at' => now()],
            ['certification_type_id' => 4, 'name' => 'N5', 'created_at' => now()],
            ['certification_type_id' => 5, 'name' => 'Excelent', 'created_at' => now()],
        ]);
    }
}
