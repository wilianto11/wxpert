<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data layanan dengan kategori terkait
        $services = Service::with('category')->latest()->take(6)->get(); // Ambil 6 layanan terbaru
        $portfolios = Portfolio::latest()->take(6)->get();  // Ambil 6 portfolio terbaru
        $categories = ServiceCategory::all(); // Ambil semua kategori layanan
        $blogs = Blog::latest()->take(3)->get();  // Ambil 3 blog terbaru
        // Ambil semua testimonial dengan user terkait
        // Ambil semua testimonial dengan user terkait
        $testimonials = Testimonial::with('user')->latest()->get();
        // Mengirimkan data ke view
        return view('welcome', compact('services', 'portfolios', 'blogs', 'categories', 'testimonials'));
    }
}
