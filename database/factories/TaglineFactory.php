<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tagline>
 */
class TaglineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $taglines = [
            "Pemrograman",
            "Desain Grafis",
            "Pengembangan Web",
            "Aplikasi Mobile",
            "Keamanan Cyber",
            "Analisis Data",
            "Desain UI/UX",
            "Cloud Computing",
            "Pengembangan API",
            "Virtualisasi",
            "Scripting",
            "Big Data",
            "Konsultasi IT",
            "Pengelolaan Jaringan",
            "SEO",
            "Penerjemahan",
            "Desain Kemasan",
            "Pengelolaan Proyek",
            "Infografis"
        ];

        return [
            'tagline' => $this->faker->randomElement($taglines),
            'service_id' => $this->faker->numberBetween(1, Service::count()),
            'updated_at' => null,


        ];
    }
}
