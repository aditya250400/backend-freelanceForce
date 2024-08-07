<?php

namespace Database\Seeders;

use App\Models\Tagline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaglineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tagline::factory()->count(50)->create();
    }
}
