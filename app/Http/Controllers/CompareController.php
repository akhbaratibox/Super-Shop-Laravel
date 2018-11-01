<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CompareController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->session()->get('compare'));
        $categories = Category::all();
        return view('frontend.view_compare', compact('categories'));
    }

    public function reset(Request $request)
    {
        $request->session()->forget('compare');
        return back();
    }

    public function addToCompare(Request $request)
    {
        if($request->session()->has('compare')){
            $cart = $request->session()->get('compare', collect([]));
            if(!$cart->contains($request->id)){
                if(count($cart) == 3){
                    $cart->forget(0);
                    $cart->push($request->id);
                }
                else{
                    $cart->push($request->id);
                }
            }
        }
        else{
            $cart = collect([$request->id]);
            $request->session()->put('compare', $cart);
        }

        return view('frontend.partials.compare');
    }
}
