<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PortfolioCategory;
use App\Http\Controllers\Controller;

class PortfolioCategoryController extends Controller
{
    // Menampilkan daftar kategori
    public function index()
    {
        // Mengambil kategori dengan pagination
        $categories = PortfolioCategory::paginate(10);

        // Ambil item pertama dengan mengakses array dari items()
        $firstItem = $categories->items()[0] ?? null;  // Mengakses item pertama secara langsung

        return view('admin.portfolio_categories.index', compact('categories', 'firstItem'));
    }

    public function create()
    {
        return view('admin.portfolio_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:portfolio_categories,slug',
        ]);

        PortfolioCategory::create($request->all());
        return redirect()->route('admin.portfolio_categories.index')->with('success', 'Category created successfully.');
    }

    public function show($slug)
    {
        // Menemukan kategori berdasarkan slug
        $category = PortfolioCategory::where('slug', $slug)->firstOrFail();

        // Mengembalikan view dengan data kategori
        return view('admin.portfolio_categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = PortfolioCategory::findOrFail($id);
        return view('admin.portfolio_categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:portfolio_categories,slug,' . $id,
        ]);

        $category = PortfolioCategory::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('admin.portfolio_categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = PortfolioCategory::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.portfolio_categories.index')->with('success', 'Category deleted successfully.');
    }
}
