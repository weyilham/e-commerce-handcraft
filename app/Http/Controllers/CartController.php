<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use Flasher\Laravel\Facade\Flasher;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index', [
            'title' => 'Cart',
            'carts' => Cart::content(),
            'company'=> Company::latest()->first()
        ]);
    }
    //
    public function store(Request $request){
        $product = Product::where('id', $request->id)->first();
        // @dd($product);

        // Cart::add('293ad', 'Product 1', 1, 9.99);
        Cart::add($product->id, $product->name, 1, $product->price);
        return response()->json([
            'message' => 'Product added to cart successfully',
            'statusCode' => 200,
            'data' => Cart::count()
        ]);
        
    }
}
