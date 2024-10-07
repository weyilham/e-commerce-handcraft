<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('home.index', [
            'title' => 'Home',
            'carousels' => Carousel::where('status', 1)->get(),
            'company' => Company::latest()->first(),
            'categories' => Category::limit(4)->get(),
            'products' => Product::with('category')->get()
        ]);
    }

    public function show($id){
        if($id == 'all'){
            $products = Product::all();
            return view('components.product.card-product', ['products' => $products]);

        }{
            $products = Product::where('category_id', $id)->get();
            return view('components.product.card-product', ['products' => $products]);
        }
        
    }
}
