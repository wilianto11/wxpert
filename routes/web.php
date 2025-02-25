<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\PortfolioCategoryController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';




// Rute yang tidak memerlukan autentikasi
Route::get('/', [HomeController::class, 'index']);
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/checkout/{service_id}', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('portfolios/{slug}', [PortfolioController::class, 'show'])->name('portfolios.show');
Route::get('portfolio_categories/{slug}', [PortfolioCategoryController::class, 'show'])->name('portfolio_categories.show');

// Rute yang membutuhkan autentikasi (Auth Middleware)
Route::middleware('auth')->group(function () {
    // Rute untuk blog (Blog) dengan autentikasi
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');

    // Rute untuk kategori layanan (Service Category) tanpa autentikasi
    Route::get('/service-categories', [ServiceCategoryController::class, 'index'])->name('service-categories.index');
    Route::post('/service-categories', [ServiceCategoryController::class, 'store'])->name('service-categories.store');
    Route::put('/service-categories/{id}', [ServiceCategoryController::class, 'update'])->name('service-categories.update');
    Route::delete('/service-categories/{id}', [ServiceCategoryController::class, 'destroy'])->name('service-categories.destroy');

    // Rute untuk layanan (Services) tanpa autentikasi
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    // Rute untuk kategori portfolio (Portfolio Category) tanpa autentikasi
    Route::get('portfolio_categories', [PortfolioCategoryController::class, 'index'])->name('portfolio_categories.index');
    Route::get('portfolio_categories/create', [PortfolioCategoryController::class, 'create'])->name('portfolio_categories.create');
    Route::post('portfolio_categories', [PortfolioCategoryController::class, 'store'])->name('portfolio_categories.store');

    Route::get('portfolio_categories/{id}/edit', [PortfolioCategoryController::class, 'edit'])->name('portfolio_categories.edit');
    Route::put('portfolio_categories/{id}', [PortfolioCategoryController::class, 'update'])->name('portfolio_categories.update');
    Route::delete('portfolio_categories/{id}', [PortfolioCategoryController::class, 'destroy'])->name('portfolio_categories.destroy');

    // Rute untuk portfolio (Portfolios) tanpa autentikasi
    Route::get('portfolios', [PortfolioController::class, 'index'])->name('portfolios.index');
    Route::get('portfolios/create', [PortfolioController::class, 'create'])->name('portfolios.create');
    Route::post('portfolios', [PortfolioController::class, 'store'])->name('portfolios.store');
    Route::get('portfolios/{portfolio}/edit', [PortfolioController::class, 'edit'])->name('portfolios.edit');
    Route::put('portfolios/{portfolio}', [PortfolioController::class, 'update'])->name('portfolios.update');
    Route::delete('portfolios/{portfolio}', [PortfolioController::class, 'destroy'])->name('portfolios.destroy');

    // Rute untuk kategori blog (Blog Category) tanpa autentikasi
    Route::get('/categories', [BlogCategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [BlogCategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [BlogCategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{category}/edit', [BlogCategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{category}', [BlogCategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [BlogCategoryController::class, 'destroy'])->name('categories.destroy');
});
