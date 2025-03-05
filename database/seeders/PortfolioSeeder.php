<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portfolios')->insert([
            [
                'category_id' => 1, // Sesuaikan dengan ID kategori yang ada
                'title' => 'Portfolio Website 1',
                'slug' => Str::slug('Portfolio Website 1'),
                'description' => 'Deskripsi untuk portfolio website 1.',
                'image' => 'portfolio1.jpg',
                'link' => 'https://example.com/portfolio1',
                'meta_title' => 'Portfolio Website 1 - Web Development',
                'meta_description' => 'Portfolio Website 1 adalah contoh hasil kerja di bidang Web Development.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2, // Sesuaikan dengan ID kategori yang ada
                'title' => 'Portfolio Aplikasi Mobile',
                'slug' => Str::slug('Portfolio Aplikasi Mobile'),
                'description' => 'Deskripsi untuk aplikasi mobile.',
                'image' => 'portfolio2.jpg',
                'link' => 'https://example.com/portfolio2',
                'meta_title' => 'Portfolio Aplikasi Mobile - App Development',
                'meta_description' => 'Portfolio Aplikasi Mobile adalah contoh hasil kerja di bidang App Development.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3, // Sesuaikan dengan ID kategori yang ada
                'title' => 'Portfolio UI/UX Design',
                'slug' => Str::slug('Portfolio UI/UX Design'),
                'description' => 'Deskripsi untuk desain UI/UX.',
                'image' => 'portfolio3.jpg',
                'link' => 'https://example.com/portfolio3',
                'meta_title' => 'Portfolio UI/UX Design - UI/UX',
                'meta_description' => 'Portfolio UI/UX Design adalah contoh hasil kerja di bidang UI/UX.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
