<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Flight;
use App\Models\FlightLine;
use App\Models\FlightPhoto;
use App\Models\Hotel;
use App\Models\RoomType;
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
        FlightLine::factory(2)->create();
        Flight::factory(16)->create();
        FlightPhoto::factory(32)->create();
        RoomType::create([ "name" => "غرفة خماسية", "per_number" => 5]);
        RoomType::create([ "name" => "غرفة رباعية", "per_number" => 4]);
        RoomType::create([ "name" => "غرفة ثلاثية", "per_number" => 3]);
        RoomType::create([ "name" => "غرفة ثنائية", "per_number" => 2]);
        Hotel::factory(6)->create();
        Booking::factory(16)->create();
    }
}
