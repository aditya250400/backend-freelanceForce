<?php

namespace Database\Seeders;

use App\Models\AdvantageUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvantageUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdvantageUser::factory()->count(50)->create();
    }
}
