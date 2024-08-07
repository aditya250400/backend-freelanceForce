<?php

namespace Database\Factories;

use App\Models\DetailUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExperienceUser>
 */
class ExperienceUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $experiences = [
            "Mengembangkan aplikasi web menggunakan PHP dan MySQL.",
            "Menerapkan prinsip-prinsip keamanan siber untuk melindungi data pengguna.",
            "Mengelola server Linux dan Windows untuk memastikan ketersediaan dan keandalan.",
            "Mengimplementasikan sistem manajemen database (DBMS) seperti Oracle dan SQL Server.",
            "Mengembangkan dan memelihara aplikasi berbasis cloud menggunakan AWS atau Azure.",
            "Menggunakan alat pemantauan dan pengelolaan sistem seperti Nagios atau Zabbix.",
            "Mengimplementasikan dan mengelola infrastruktur jaringan, termasuk VPN dan firewall.",
            "Membuat dan memelihara dokumentasi teknis untuk sistem perangkat lunak dan hardware.",
            "Menggunakan bahasa pemrograman seperti Python, Java, dan C++ untuk pengembangan perangkat lunak.",
            "Melakukan uji coba dan debugging perangkat lunak untuk memastikan kualitas dan kinerja.",
            "Mendesain antarmuka pengguna (UI) yang intuitif dan pengalaman pengguna (UX) yang baik.",
            "Mengelola proyek pengembangan perangkat lunak menggunakan metodologi Agile atau Scrum.",
            "Menangani dan memecahkan masalah terkait perangkat keras dan perangkat lunak.",
            "Mengimplementasikan dan mengelola solusi penyimpanan data, termasuk NAS dan SAN.",
            "Mengembangkan aplikasi mobile untuk platform iOS dan Android.",
            "Berpartisipasi dalam analisis dan perancangan arsitektur perangkat lunak.",
            "Mengelola dan mengoptimalkan basis data untuk performa dan skalabilitas.",
            "Menggunakan sistem kontrol versi seperti Git untuk pengembangan perangkat lunak.",
            "Melakukan migrasi data dari sistem lama ke sistem baru.",
            "Menerapkan strategi pengelolaan proyek TI dan anggaran.",
            "Mengelola dan mengkonfigurasi sistem email dan komunikasi.",
            "Mengimplementasikan dan mengelola solusi backup dan pemulihan bencana.",
            "Mengembangkan dan mengelola API untuk integrasi antar sistem.",
            "Membantu dalam pengembangan dan penerapan kebijakan TI dan prosedur.",
            "Menggunakan alat otomasi untuk meningkatkan efisiensi dan mengurangi tugas manual.",
            "Mengelola proyek TI dari konsep hingga penyelesaian, termasuk perencanaan dan eksekusi.",
            "Menyediakan dukungan teknis untuk pengguna akhir dan staf TI.",
            "Menilai dan menerapkan teknologi baru untuk meningkatkan kinerja sistem.",
            "Mendesain dan mengimplementasikan solusi keamanan informasi.",
            "Mengelola dan memperbarui perangkat lunak dan sistem operasi.",
            "Berpartisipasi dalam pemecahan masalah dan penyelesaian masalah sistem yang kompleks.",
            "Menggunakan alat pengembangan perangkat lunak seperti IDE dan alat analisis kode.",
            "Menerapkan solusi DevOps untuk mengintegrasikan pengembangan dan operasi TI.",
            "Melakukan analisis kebutuhan pengguna untuk pengembangan sistem yang lebih baik.",
            "Mendesain dan menerapkan sistem manajemen konten (CMS) untuk situs web.",
            "Menerapkan strategi SEO untuk meningkatkan visibilitas situs web.",
            "Mengembangkan solusi perangkat lunak khusus berdasarkan kebutuhan klien.",
            "Mengelola integrasi sistem antara berbagai platform dan aplikasi.",
            "Membangun dan memelihara sistem sistematis untuk pelaporan dan analitik.",
            "Melakukan audit keamanan dan kepatuhan untuk memastikan standar industri dipatuhi.",
            "Mengelola tim pengembangan perangkat lunak dan memberikan bimbingan teknis.",
            "Menerapkan dan mengelola alat kolaborasi dan komunikasi tim.",
            "Mengembangkan dan mengelola program pelatihan untuk pengguna akhir.",
            "Mengelola akses dan hak istimewa pengguna dalam sistem TI.",
            "Mengidentifikasi dan menerapkan peluang untuk otomatisasi proses bisnis.",
            "Mengelola proyek migrasi sistem dan pembaruan perangkat keras.",
            "Mengelola lingkungan pengembangan dan produksi untuk aplikasi perangkat lunak.",
            "Berpartisipasi dalam perencanaan kapasitas dan perencanaan masa depan sistem TI.",
            "Mengelola integrasi dan sinkronisasi data antar sistem yang berbeda.",
            "Menerapkan solusi pemantauan dan pelaporan untuk mendeteksi dan menangani masalah.",
            "Berpartisipasi dalam kegiatan penelitian dan pengembangan untuk teknologi baru.",
        ];

        return [
            'experience' => $this->faker->randomElement($experiences),
            'detail_user_id' => $this->faker->numberBetween(1, DetailUser::count()),
            'updated_at' => null,

        ];
    }
}
