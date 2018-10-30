<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\SubSubCategory;
use Session;

class CartController extends Controller
{
    public function showCartModal(Request $request)
    {
        $product = Product::find($request->id);
        return view('frontend.partials.addToCart', compact('product'));
    }

    public function updateNavCart(Request $request)
    {
        return view('frontend.partials.cart');
    }

    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);

        $data = array();
        $data['id'] = $product->id;
        foreach (json_decode(Product::find($request->id)->subsubcategory->options) as $key => $option) {
            $data[$option->name] = $request[$option->name];
        }

        $data['color'] = $request['color'];
        $data['quantity'] = $request['quantity'];

        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart', collect([]));
            $cart->push(json_encode($data));
        }
        else{
            $cart = collect([json_encode($data)]);
            $request->session()->put('cart', $cart);
        }

        return view('frontend.partials.addedToCart', compact('product'));
    }

    public function removeFromCart(Request $request)
    {
        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart', collect([]));
            $cart->forget($request->key);
            $request->session()->put('cart', $cart);
        }

        return 'removed';
    }
}
