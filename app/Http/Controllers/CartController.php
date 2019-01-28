<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\SubSubCategory;
use App\Category;
use Session;
use App\Color;

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
        $str = '';
        $tax = 0;

        if($request->has('color')){
            $data['color'] = $request['color'];
            $str = Color::where('code', $request['color'])->first()->name;
        }

        foreach (json_decode(Product::find($request->id)->choice_options) as $key => $choice) {
            $data[$choice->name] = $request[$choice->name];
            $str .= '-'.str_replace(' ', '', $request[$choice->name]);
        }

        if($str != null){
            $variations = json_decode($product->variations);
            $price = $variations->$str->price;
            if($variations->$str->qty >= $request['quantity']){
                $variations->$str->qty -= $request['quantity'];
                $product->variations = json_encode($variations);
                $product->save();
            }
            else{
                return view('frontend.partials.outOfStockCart');
            }
        }
        else{
            $price = $product->unit_price;
        }

        //discount calculation
        $flash_deal = \App\FlashDeal::where('status', 1)->first();
        if ($flash_deal != null && strtotime(date('d-m-Y')) >= $flash_deal->start_date && strtotime(date('d-m-Y')) <= $flash_deal->end_date) {
            $flash_deal_product = \App\FlashDealProduct::where('flash_deal_id', $flash_deal->id)->where('product_id', $product->id)->first();
            if($flash_deal_product != null){
                if($flash_deal_product->discount_type == 'percent'){
                    $price -= ($price*$flash_deal_product->discount)/100;
                }
                elseif($flash_deal_product->discount_type == 'amount'){
                    $price -= $flash_deal_product->discount;
                }
            }
            else{
                if($product->discount_type == 'percent'){
                    $price -= ($price*$product->discount)/100;
                }
                elseif($product->discount_type == 'amount'){
                    $price -= $product->discount;
                }
            }
            if($product->tax_type == 'percent'){
                $tax = ($price*$product->tax)/100;
            }
            elseif($product->tax_type == 'amount'){
                $tax = $product->tax;
            }
        }

        $data['quantity'] = $request['quantity'];
        $data['price'] = $price;
        $data['tax'] = $tax;

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
