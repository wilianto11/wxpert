<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;

class ServiceCategoryController extends Controller
{
    // Menampilkan semua kategori
    public function index()
    {
        $categories = ServiceCategory::all();
        return view('admin.service-categories.index', compact('categories'));
    }

    // Menampilkan form untuk membuat kategori baru
    public function create()
    {
        return view('admin.service-categories.create');
    }

    // Menyimpan kategori baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:service_categories,slug',
        ]);

        ServiceCategory::create($request->all());

        return redirect()->route('service-categories.index')
            ->with('success', 'Category created successfully.');
    }

    // Menampilkan detail kategori
    public function show($id)
    {
        $category = ServiceCategory::findOrFail($id);
        return view('admin.service-categories.show', compact('category'));
    }

    // Menampilkan form untuk mengedit kategori
    public function edit($id)
    {
        $category = ServiceCategory::findOrFail($id);
        return view('admin.service-categories.edit', compact('category'));
    }

    // Mengupdate kategori di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:service_categories,slug,' . $id,
        ]);

        $category = ServiceCategory::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('service-categories.index')
            ->with('success', 'Category updated successfully.');
    }

    // Menghapus kategori dari database
    public function destroy($id)
    {
        $category = ServiceCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('service-categories.index')
            ->with('success', 'Category deleted successfully.');
    }
}
