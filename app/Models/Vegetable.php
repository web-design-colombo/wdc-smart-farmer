<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    use HasFactory;
    protected $table = 'vegetables';
    protected $fillable = [
        'name',
        'imagehome',
        'imageback',
        'botanicalname',
        'home_description',
        'looks_description',
        'likes_description',
        'dislike_description',
        'didyouknow_description',
        'howtogrow_description',
    ];
}
