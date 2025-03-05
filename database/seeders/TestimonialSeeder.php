<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::pluck('id')->toArray(); // Mengambil semua user_id yang ada

        if (empty($users)) {
            $this->command->info('Tidak ada user yang ditemukan. Jalankan UserSeeder terlebih dahulu.');
            return;
        }

        $testimonials = [
            ['message' => 'Layanan sangat memuaskan!', 'rating' => 5],
            ['message' => 'Pelayanan cepat dan responsif.', 'rating' => 4],
            ['message' => 'Saya sangat merekomendasikan jasa ini.', 'rating' => 5],
            ['message' => 'Harga terjangkau dengan kualitas terbaik.', 'rating' => 4],
            ['message' => 'Sangat puas dengan hasilnya!', 'rating' => 5],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create([
                'user_id' => $users[array_rand($users)], // Pilih user_id secara acak
                'message' => $testimonial['message'],
                'rating' => $testimonial['rating'],
            ]);
        }
    }
}
