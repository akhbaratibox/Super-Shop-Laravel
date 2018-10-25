<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Category;
use App\Product;
use App\User;
use Auth;
use Hash;

class HomeController extends Controller
{

    public function user_login(Request $request)
    {
        $user = User::whereIn('user_type', ['customer', 'seller'])->where('email', $request->email)->first();
        if($user != null){
            if(Hash::check($request->password, $user->password)){
                auth()->login($user, true);
                return redirect()->route('home');
            }
        }
        return back();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * Show the application frontend home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('frontend.index', compact('categories'));
    }

    public function product($slug)
    {
        $product  = Product::where('slug', $slug)->first();
        if($product!=null){
            $categories = Category::all();
            return view('frontend.product_details', compact('categories', 'product'));
        }
        abort(404);
    }

    public function login()
    {
        $categories = Category::all();
        return view('frontend.user_login', compact('categories'));
    }

    public function wishlist()
    {
        $categories = Category::all();
        return view('frontend.wishlist', compact('categories'));
    }
}
