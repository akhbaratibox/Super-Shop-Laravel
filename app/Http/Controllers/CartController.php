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
            $price_variations = json_decode($product->price_variations);
            $str_price = $option->name.'_'.$request[$option->name].'_price';
            $str_variation = $option->name.'_'.$request[$option->name].'_variation';
            if($price_variations->$str_variation == 'decrease'){
                $price = $product->unit_price - $price_variations->$str_price;
            }
            else {
                $price = $product->unit_price + $price_variations->$str_price;
            }
        }

        if($product->discount_type == 'percent'){
            $price -= ($price*$product->discount)/100;
        }
        elseif($product->discount_type == 'amount'){
            $price -= $product->discount;
        }

        $data['color'] = $request['color'];
        $data['quantity'] = $request['quantity'];
        $data['price'] = $price * $request['quantity'];

        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart', collect([]));
            $cart->push(json_encode($data));
        }
        else{
            $cart = collect([json_encode($data)]);
            $request->session()->put('cart', $cart);
        }

        return view('frontend.partials.addedToCart', compact('product', 'data'));
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
