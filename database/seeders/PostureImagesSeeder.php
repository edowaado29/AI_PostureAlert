<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostureImagesSeeder extends Seeder
{
    public function run()
    {
        DB::table('posture_images')->insert([
            [
                'image' => 'https://example.com/images/posture1.jpg',
                'timestamp' => now(),
            ],
            [
                'image' => 'https://example.com/images/posture2.jpg',
                'timestamp' => now(),
            ],
            [
                'image' => 'https://example.com/images/posture3.jpg',
                'timestamp' => now(),
            ],
        ]);
    }
}
