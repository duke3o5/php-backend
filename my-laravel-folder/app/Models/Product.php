<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; // Replace 'products' with your actual table name

    protected $fillable = ['title', 'category', 'color', 'size', 'price'];
}
