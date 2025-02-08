<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Discount::factory()->count(10)->create();
        \App\Models\Discount::create(
            [
                "name" => "شخصين - 3 أشخاص",
                "code" => "3P",
                "type" => "percentage",
                "value" => 5,
                "program_id" => 1
            ]);
        \App\Models\Discount::create(
            [
                "name" => "3 أشخاص - 5 أشخاص",
                "code" => "3T5P",
                "type" => "percentage",
                "value" => 10,
                "program_id" => 1
            ]);
        \App\Models\Discount::create(
            [
                "name" => "5 أشخاص - 8 أشخاص",
                "code" => "5TP",
                "type" => "percentage",
                "value" => 15,
                "program_id" => 1
            ],
        );

    }
}
