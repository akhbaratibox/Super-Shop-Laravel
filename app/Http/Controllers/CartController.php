<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\SubSubCategory;
use App\Category;
use Session;

class CartController extends Controller
{
    public function index(Request $request)
    {
        //dd($cart->all());
        $categories = Category::all();
        return view('frontend.view_cart', compact('categories'));
    }

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
            $str_price = $option->name.'_'.$request[$option->name].'_price'; // price key, example choice_0_S_price
            $str_variation = $option->name.'_'.$request[$option->name].'_variation'; // variation key, example choice_0_S_variation
            if($price_variations->$str_variation == 'decrease'){
                $price = $product->unit_price - $price_variations->$str_price;
            }
            else {
                $price = $product->unit_price + $price_variations->$str_price;
            }
        }

        //discount calculation
        if($product->discount_type == 'percent'){
            $price -= ($price*$product->discount)/100;
        }
        elseif($product->discount_type == 'amount'){
            $price -= $product->discount;
        }

        $data['color'] = $request['color'];
        $data['quantity'] = $request['quantity'];
        $data['price'] = $price;

        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart', collect([]));
            $cart->push($data);
        }
        else{
            $cart = collect([$data]);
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

        return view('frontend.partials.cart_summary');;
    }

    public function updateQuantity(Request $request)
    {
        $cart = $request->session()->get('cart', collect([]));
        $cart = $cart->map(function ($object, $key) use ($request) {
            if($key == $request->key){
                $object['quantity'] = $request->quantity;
            }
            return $object;
        });
        $request->session()->put('cart', $cart);

        return view('frontend.partials.cart_summary');
    }
}
