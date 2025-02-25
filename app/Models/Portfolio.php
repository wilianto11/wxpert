<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'image',
        'link',
        'meta_title',
        'meta_description',
    ];

    // Relasi dengan PortfolioCategory
    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class)->withDefault();
    }
}
