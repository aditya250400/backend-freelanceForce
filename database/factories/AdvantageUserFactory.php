<?php

namespace Database\Factories;

use App\Models\Service;
use Hamcrest\Core\Set;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdvantageUser>
 */
class AdvantageUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {

        $skills = [
            "Pemrograman",
            "Pengembangan Web",
            "Keamanan Siber",
            "Manajemen Basis Data",
            "Cloud Computing",
            "DevOps",
            "Virtualisasi",
            "UI/UX Design",
            "Analisis Data",
            "Pengelolaan Jaringan",
            "Scripting",
            "Administrasi Sistem",
            "Big Data",
            "API Development",
            "Metodologi Agile",
            "Pengembangan Aplikasi",
            "Konsultasi IT",
            "Penerapan IoT",
            "Pengolahan Log",
            "Manajemen Proyek",
            "Pengelolaan Infrastruktur",
            "Server Management",
            "Teknologi Web",
            "Data Analytics"
        ];

        return [
            'advantage' => $this->faker->randomElement($skills),
            'service_id' => $this->faker->numberBetween(1, Service::count()),
            'updated_at' => null,

        ];
    }
}
