<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CheckoutController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\PortfolioCategoryController;



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
Route::middleware('auth')->prefix('admin')->group(function () {
    // Rute untuk blog (Blog) dengan autentikasi
    Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::post('/blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('admin.blogs.create');
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');

    // Rute untuk kategori layanan (Service Category)
    Route::get('/service-categories', [ServiceCategoryController::class, 'index'])->name('admin.service-categories.index');
    Route::post('/service-categories', [ServiceCategoryController::class, 'store'])->name('admin.service-categories.store');
    Route::put('/service-categories/{id}', [ServiceCategoryController::class, 'update'])->name('admin.service-categories.update');
    Route::delete('/service-categories/{id}', [ServiceCategoryController::class, 'destroy'])->name('admin.service-categories.destroy');

    // Rute untuk layanan (Services)
    Route::get('/services', [ServiceController::class, 'index'])->name('admin.services.index');
    Route::post('/services', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

    // Rute untuk kategori portfolio (Portfolio Category)
    Route::get('/portfolio_categories', [PortfolioCategoryController::class, 'index'])->name('admin.portfolio_categories.index');
    Route::get('/portfolio_categories/create', [PortfolioCategoryController::class, 'create'])->name('admin.portfolio_categories.create');
    Route::post('/portfolio_categories', [PortfolioCategoryController::class, 'store'])->name('admin.portfolio_categories.store');
    Route::get('/portfolio_categories/{id}/edit', [PortfolioCategoryController::class, 'edit'])->name('admin.portfolio_categories.edit');
    Route::put('/portfolio_categories/{id}', [PortfolioCategoryController::class, 'update'])->name('admin.portfolio_categories.update');
    Route::delete('/portfolio_categories/{id}', [PortfolioCategoryController::class, 'destroy'])->name('admin.portfolio_categories.destroy');

    // Rute untuk portfolio (Portfolios)
    Route::get('/portfolios', [PortfolioController::class, 'index'])->name('admin.portfolios.index');
    Route::get('/portfolios/create', [PortfolioController::class, 'create'])->name('admin.portfolios.create');
    Route::post('/portfolios', [PortfolioController::class, 'store'])->name('admin.portfolios.store');
    Route::get('/portfolios/{portfolio}/edit', [PortfolioController::class, 'edit'])->name('admin.portfolios.edit');
    Route::put('/portfolios/{portfolio}', [PortfolioController::class, 'update'])->name('admin.portfolios.update');
    Route::delete('/portfolios/{portfolio}', [PortfolioController::class, 'destroy'])->name('admin.portfolios.destroy');

    // Rute untuk kategori blog (Blog Category)
    Route::get('/categories', [BlogCategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/categories/create', [BlogCategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories', [BlogCategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('/categories/{category}/edit', [BlogCategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/categories/{category}', [BlogCategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/categories/{category}', [BlogCategoryController::class, 'destroy'])->name('admin.categories.destroy');
});
