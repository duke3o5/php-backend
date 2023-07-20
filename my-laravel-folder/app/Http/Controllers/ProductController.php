<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
   function addData(Request $req){
    $product= new Product;
    $product->title=$req->title;
    $product->category=$req->category;
    $product->color=$req->color;
    $product->size=$req->size;
    $product->price=$req->price;
    $product->save();
    return redirect('product');
   }
}
