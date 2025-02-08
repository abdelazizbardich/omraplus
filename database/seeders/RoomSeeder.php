<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Room::factory()->count(10)->create();
        \App\Models\Room::create(["name" => "غرفة ثنائية"]);
        \App\Models\Room::create(["name" => "غرفة ثلاثية"]);
        \App\Models\Room::create(["name" => "غرفة رباعية"]);
        \App\Models\Room::create(["name" => "غرفة خماسية"]);
        \App\Models\Room::create(["name" => "غرفة سداسية"]);
    }
}
