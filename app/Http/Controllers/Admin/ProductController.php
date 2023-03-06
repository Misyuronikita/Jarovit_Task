<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create(){
        return view('admin.product.create');
    }

    public function store(ProductRequest $request){
        $data = $request->validated();
        dump($data);
dd($request);
        $products = Product::create($data);
        return redirect()->route('admin.product.index');
    }
}
