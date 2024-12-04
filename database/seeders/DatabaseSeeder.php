<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'), // Gunakan hashing untuk password
        ]);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'admin',
        //     'password' => 'admin123',
        // ]);
        $this->call([
            PostureImagesSeeder::class,
            PostureStatusSeeder::class,
            DistanceStatusSeeder::class,
        ]);
    }
}
