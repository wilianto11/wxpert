<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortfolioCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    // Jika Anda ingin membuat slug secara otomatis
    public static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }

    // Relasi dengan Portfolio
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}
