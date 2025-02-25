<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\PortfolioCategory;

class PortfolioController extends Controller
{
    // Menampilkan daftar portfolio
    public function index()
    {
        $portfolios = Portfolio::all();  // Fetch all portfolios
        $categories = PortfolioCategory::all();   // Fetch all categories
        return view('portfolios.index', compact('portfolios', 'categories'));
    }

    // Menampilkan form tambah portfolio
    public function create()
    {
        $categories = PortfolioCategory::all();
        return view('portfolios.create', compact('categories'));
    }

    // Menyimpan portfolio baru
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:portfolio_categories,id',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:portfolios',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'link' => 'required|url',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Portfolio::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
            'image' => $imagePath,
            'link' => $request->link,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully.');
    }

    // Menampilkan form edit portfolio
    public function edit(Portfolio $portfolio)
    {
        $categories = PortfolioCategory::all();
        return view('portfolios.edit', compact('portfolio', 'categories'));
    }

    // Mengupdate portfolio
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'category_id' => 'required|exists:portfolio_categories,id',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:portfolios,slug,' . $portfolio->id,
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'link' => 'required|url',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $portfolio->image = $imagePath;
        }

        $portfolio->update($request->all());

        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated successfully.');
    }

    // Menghapus portfolio
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted successfully.');
    }

    // Menampilkan detail portfolio
    public function show($slug)
    {
        // Ambil portfolio berdasarkan slug, dengan eager load kategori
        $portfolio = Portfolio::with('category')->where('slug', $slug)->firstOrFail();

        // Pass the single portfolio to the view
        return view('portfolios.show', compact('portfolio'));
    }
}
