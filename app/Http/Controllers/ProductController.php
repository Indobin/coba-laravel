<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
// use App\Http\Requests\UserRequest;
class ProductController extends Controller
{
    public function index() : View {
        $products = Product::latest()->paginate(10);
        return view('Products/index', compact('products'));
    }
    public function create()
    {
        return view('Products/form',[
            'product' => new Product(),
            'page_meta' => [
                'title' => 'Create Product',
                'method' => 'post',
                'url' => route('products.store'),
                'submit_text' => 'Create',
            ]
        ]);
    }
// Suggested code may be subject to a license. Learn more: ~LicenseLog:3913015688.
    // public function store(Request $request)
    // {
    //     Product::create($request->validated());
    //     return redirect(route('products.index'));
    // }
}
