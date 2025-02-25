<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    // Menampilkan daftar layanan
    public function index()
    {
        $services = Service::with('category')->get();
        $categories = ServiceCategory::all();
        return view('services.index', compact('services', 'categories'));
    }

    // Menyimpan layanan baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:service_categories,id',
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);

        $slug = Str::slug($request->title, '-');

        // Handle image upload jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('ImageService', 'public');
        }

        Service::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()->route('services.index')->with('success', 'Service added successfully.');
    }

    // Mengupdate layanan
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:service_categories,id',
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);

        $service = Service::findOrFail($id);
        $slug = Str::slug($request->title, '-');

        // Handle image update jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('ImageService', 'public');
            $service->image = $imagePath;
        }

        $service->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'price' => $request->price,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }


    // Menghapus layanan
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }

    // Menampilkan detail layanan berdasarkan slug
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail(); // Mencari layanan berdasarkan slug

        // Jika belum login, arahkan ke halaman login
        if (!Auth::check()) {
            return redirect()->route('login')->with('message', 'You must be logged in to purchase a service.');
        }

        return view('services.show', compact('service'));
    }
}
