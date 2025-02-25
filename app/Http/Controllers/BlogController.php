<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // Menampilkan daftar blog dan kategori
    public function index()
    {
        $blogs = Blog::with('category', 'author')->latest()->get(); // Mengambil data blog dengan kategori dan penulis
        $categories = BlogCategory::all(); // Mengambil semua kategori

        return view('blogs.index', compact('blogs', 'categories'));
    }

    public function create()
    {
        // Mengambil data kategori untuk dropdown
        $categories = BlogCategory::all();

        return view('blogs.create', compact('categories'));
    }

    // Menyimpan blog baru
    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
            'category_id' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);

        // Menyimpan gambar dan mendapatkan path-nya
        $imagePath = $request->file('image') ? $request->file('image')->store('blog_images', 'public') : null;

        // Membuat slug yang unik
        $slug = Str::slug($request->title);
        while (Blog::where('slug', $slug)->exists()) {
            $slug = Str::slug($request->title) . '-' . Str::random(5);
        }

        // Menyimpan blog
        Blog::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $imagePath, // Simpan path gambar
            'author_id' => auth()->id(), // ID penulis
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil ditambahkan');
    }

    // Memperbarui blog
    public function update(Request $request, Blog $blog)
    {
        // Validasi inputan
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
            'category_id' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);

        // Jika ada gambar baru, simpan dan update
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($blog->image && Storage::exists('public/' . $blog->image)) {
                Storage::delete('public/' . $blog->image);
            }

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('blog_images', 'public');
            $blog->image = $imagePath;
        }

        // Membuat slug yang unik
        $slug = Str::slug($request->title);
        while (Blog::where('slug', $slug)->exists()) {
            $slug = Str::slug($request->title) . '-' . Str::random(5);
        }

        // Perbarui data blog
        $blog->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil diperbarui');
    }

    // Menghapus blog
    public function destroy(Blog $blog)
    {
        // Hapus gambar jika ada
        if ($blog->image && Storage::exists('public/' . $blog->image)) {
            Storage::delete('public/' . $blog->image);
        }

        // Hapus blog
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil dihapus');
    }


    public function show($slug)
    {
        // Ambil blog berdasarkan slug
        $blog = Blog::with('category', 'author')->where('slug', $slug)->firstOrFail();

        // Ambil semua kategori
        $categories = BlogCategory::all();

        return view('blogs.show', compact('blog', 'categories'));
    }
}
