<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Website Company Profile', 'slug' => Str::slug('Website Company Profile')],
            ['name' => 'Website E-Commerce', 'slug' => Str::slug('Website E-Commerce')],
            ['name' => 'Website Portofolio', 'slug' => Str::slug('Website Portofolio')],
            ['name' => 'Website Berita', 'slug' => Str::slug('Website Berita')],
            ['name' => 'Website Custom', 'slug' => Str::slug('Website Custom')],
        ];

        foreach ($categories as &$category) {
            $category['created_at'] = now();
            $category['updated_at'] = now();
        }

        DB::table('service_categories')->insert($categories);
    }
}
