<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_Img;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product_Img $product_Img){
        $products = Product::take(8)->get();
        return view('main.index', compact('products', 'product_Img'));
    }
}
