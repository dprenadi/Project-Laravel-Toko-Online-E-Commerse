<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $title = '';
        // if(request('product')) {
        //     $product = Product::firstWhere('name', request('product'));
        //     $title = 'by' . $product->name;
        // }
        // $products = Product::with('galleries')->latest()->paginate(8);
        // $products = Product::with('galleries')->latest()->filter(request(['search', 'product']))->paginate(8);
        $products = Product::with('galleries')->latest()->filter(request(['search']))->paginate(8);
        $categories = Category::take(6)->get();
        return view('pages.home', [
            // 'title' => "Yang Dicari: " . $title,
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
