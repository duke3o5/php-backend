<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers'; // Replace 'products' with your actual table name

    protected $fillable = ['name', 'email','phone', 'address', 'password'];
}
