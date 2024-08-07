<?php

namespace Database\Seeders;

use Database\Factories\AdvantageServiceFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        $faker->seed(123);

        $this->call(UserTableSeeder::class);
        $this->call(DetailUserTableSeeder::class);
        $this->call(ExperienceUserTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(AdvantageUserTableSeeder::class);
        $this->call(AdvantageServiceTableSeeder::class);
        $this->call(TaglineTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
    }
}
