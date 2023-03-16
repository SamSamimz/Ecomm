<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    //__index
    public function index() {
        $product = Product::latest()->get();
        return view('home', ['products' => $product]);
    }

    //__show
    public function show($id) {
        $product = Product::find($id);
        return view('product',['product' => $product]);
    }

    //__store
    public function store(Request $request) {
        /////
    }
}
