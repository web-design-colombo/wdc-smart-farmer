<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{

    protected $table = 'farmer';
    protected $primarykey = 'id';
    protected $fillable = ['name','address','mobile'];

    use HasFactory;
}
