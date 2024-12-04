<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistanceStatusSeeder extends Seeder
{
    public function run()
    {
        DB::table('distance_status')->insert([
            ['distance' => 0.5, 'status' => 'Very Close', 'timestamp' => now()],
            ['distance' => 1.0, 'status' => 'Optimal', 'timestamp' => now()],
            ['distance' => 2.0, 'status' => 'Too Far', 'timestamp' => now()],
        ]);
    }
}
