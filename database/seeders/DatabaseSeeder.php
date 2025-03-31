<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // super admin user
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('password')
        ]);
        // $this->call([
        //     CategorySeeder::class,
        //     AirlineSeeder::class,
        //     FlightSeeder::class,
        //     HotelSeeder::class,
        //     ProgramSeeder::class,
        //     DiscountSeeder::class,
        //     RoomSeeder::class,
        //     ProgramPriceSeeder::class,
        //     PhotoSeeder::class
        // ]);
    }
}
