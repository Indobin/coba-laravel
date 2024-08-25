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
    public function store(Request $request)
    {
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10',
            'price'         => 'required|numeric',
            'stock'         => 'required|numeric'
        ]);
// Suggested code may be subject to a license. Learn more: ~LicenseLog:1022902440.
        $image = $request->file('image');
        $image_extention = $image->extension();
        $image_name = date('YmdHis') . "." . $image_extention;
        $image->move(public_path('ImageProduct'), $image_name);
        // $image->storeAs('public/products',$image->hashName());
        Product::create([
            'image'         => $image_name,
            'title'         => $request->title,
            'description'   => $request->description,
            'price'         => $request->price,
            'stock'         => $request->stock
        ]);
        return redirect(route('products.index'));
    }
}
