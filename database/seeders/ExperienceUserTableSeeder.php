<?php

namespace Database\Seeders;

use App\Models\ExperienceUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExperienceUser::factory()->count(40)->create();
    }
}
