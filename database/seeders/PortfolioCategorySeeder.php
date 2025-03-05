<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PortfolioCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portfolio_categories')->insert([
            [
                'name' => 'Web Development',
                'slug' => Str::slug('Web Development'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'App Development',
                'slug' => Str::slug('App Development'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'UI/UX',
                'slug' => Str::slug('UI/UX'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
