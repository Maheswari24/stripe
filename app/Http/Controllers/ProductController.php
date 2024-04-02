<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        return view('productdetails', compact('product'));
    }
}
