<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $services = [
            "Desain Grafis",
            "Pengembangan Website",
            "Penulisan Konten",
            "Manajemen Media Sosial",
            "SEO dan Pemasaran Digital",
            "Pengembangan Aplikasi Mobile",
            "Desain UI/UX",
            "Penerjemahan Bahasa",
            "Pengeditan Video",
            "Fotografi dan Videografi",
            "Konsultasi IT",
            "Pembuatan Logo",
            "Pengembangan E-Commerce",
            "Penulisan Teknis",
            "Audit SEO",
            "Desain Presentasi",
            "Manajemen Proyek",
            "Pembuatan Konten Blog",
            "Pengembangan Sistem CRM",
            "Pengembangan WordPress",
            "Desain Web Responsif",
            "Pengembangan API",
            "Penulisan Kreatif",
            "Optimasi Kecepatan Website",
            "Desain Kemasan",
            "Konsultasi Strategi Pemasaran",
            "Pembuatan Infografis",
            "Pengembangan Software Kustom",
            "Pengelolaan Iklan Berbayar",
            "Desain Banner Iklan",
            "Konsultasi Branding",
            "Pembuatan E-Book",
            "Pengembangan Game",
            "Penulisan Copywriting",
            "Pengembangan Backend",
            "Desain Karakter",
            "Penulisan Proposal",
            "Pembuatan Modul Pelatihan",
            "Pengembangan Plugin WordPress",
            "Konsultasi SEO Lokal",
            "Pembuatan Website Toko Online",
            "Desain Website E-Commerce",
            "Konsultasi Pengembangan Produk",
            "Pengelolaan Konten Website",
            "Pembuatan Aplikasi Desktop",
            "Penulisan Konten SEO",
            "Desain User Interface"
        ];

        return [
            'title' => $this->faker->randomElement($services),
            'description' => $this->faker->paragraph(2),
            'delivery_time' => $this->faker->numberBetween(1, 30),
            'revision_limit' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(100000, 1500000),
            'note' => $this->faker->paragraph(3),
            'user_id' => $this->faker->numberBetween(1, User::count()),
            'updated_at' => null,

        ];
    }
}
