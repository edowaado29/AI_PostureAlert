<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostureStatusSeeder extends Seeder
{
    public function run()
    {
        DB::table('posture_status')->insert([
            ['status' => 'Good Posture', 'timestamp' => now()],
            ['status' => 'Poor Posture', 'timestamp' => now()],
            ['status' => 'Slouching', 'timestamp' => now()],
        ]);
    }
}
