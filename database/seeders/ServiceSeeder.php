<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'category_id' => 1, // Sesuaikan dengan kategori yang ada di database
                'title' => 'Website Company Profile',
                'slug' => Str::slug('Website Company Profile'),
                'description' => 'Layanan pembuatan website company profile profesional.',
                'price' => 2500000,
                'features' => json_encode([
                    'Desain responsif',
                    'SEO-friendly',
                    'CMS mudah digunakan',
                    'Keamanan tinggi'
                ]),
                'meta_title' => 'Jasa Pembuatan Website Company Profile',
                'meta_description' => 'Jasa pembuatan website profesional untuk perusahaan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'title' => 'Website E-Commerce',
                'slug' => Str::slug('Website E-Commerce'),
                'description' => 'Layanan pembuatan website toko online dengan fitur lengkap.',
                'price' => 5000000,
                'features' => json_encode([
                    'Sistem pembayaran online',
                    'Manajemen produk & pesanan',
                    'Integrasi kurir pengiriman',
                    'Keamanan SSL'
                ]),
                'meta_title' => 'Jasa Pembuatan Website E-Commerce',
                'meta_description' => 'Jasa pembuatan website toko online dengan fitur profesional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'title' => 'Website Portal Berita',
                'slug' => Str::slug('Website Portal Berita'),
                'description' => 'Pembuatan website portal berita dengan fitur lengkap.',
                'price' => 4000000,
                'features' => json_encode([
                    'Manajemen konten',
                    'Kategori berita',
                    'Optimasi kecepatan',
                    'Keamanan tinggi'
                ]),
                'meta_title' => 'Jasa Pembuatan Website Portal Berita',
                'meta_description' => 'Jasa pembuatan website portal berita dengan CMS terbaik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'title' => 'Website LMS (E-Learning)',
                'slug' => Str::slug('Website LMS E-Learning'),
                'description' => 'Website LMS untuk kursus online dengan fitur interaktif.',
                'price' => 6000000,
                'features' => json_encode([
                    'Manajemen kursus',
                    'Video streaming',
                    'Sertifikat otomatis',
                    'Sistem ujian online'
                ]),
                'meta_title' => 'Jasa Pembuatan Website LMS',
                'meta_description' => 'Jasa pembuatan website LMS untuk kursus online.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('services')->insert($services);
    }
}
