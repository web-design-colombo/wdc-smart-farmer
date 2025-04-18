<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'cate_id',
        'name',
        'slug',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'tax',
        'qty',
        'status',
        'trending',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'image',
        'sale',
    ];
}
