<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdvantageService>
 */
class AdvantageServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $serviceBenefits = [
            "Kreativitas Tinggi",
            "Hasil Berkualitas Tinggi",
            "Fleksibilitas Waktu",
            "Biaya Efisien",
            "Pengalaman Mendalam",
            "Pendekatan Personal",
            "Kepuasan Pelanggan",
            "Kemampuan Beradaptasi",
            "Solusi Kustom",
            "Pengalaman Industri",
            "Efisiensi Proyek",
            "Penyelesaian Tepat Waktu",
            "Inovasi",
            "Teknologi Terbaru",
            "Pekerjaan Berkualitas",
            "Dukungan Penuh",
            "Kemampuan Multidisiplin",
            "Akses ke Keahlian Spesifik",
            "Skalabilitas Proyek",
            "Layanan Terpercaya",
            "Kepatuhan pada Standar",
            "Pengalaman Praktis",
            "Pemecahan Masalah Cepat",
            "Peningkatan Produktivitas"
        ];

        return [
            'advantage' => $this->faker->randomElement($serviceBenefits),
            'service_id' => $this->faker->numberBetween(1, Service::count()),
            'updated_at' => null,
        ];
    }
}
