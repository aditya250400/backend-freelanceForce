<?php

namespace Database\Seeders;

use App\Models\AdvantageService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvantageServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdvantageService::factory()->count(50)->create();
    }
}
