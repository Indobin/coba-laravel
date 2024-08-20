<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index() : View {
        $products = Product::latest()->paginate(10);
        return view('Products/index', compact('products'));
    }
}
