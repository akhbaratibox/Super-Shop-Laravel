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
                if($request->has('remember')){
                    auth()->login($user, true);
                }
                else{
                    auth()->login($user, false);
                }
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
        //Session::flush();
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

    public function listing(Request $request)
    {
        $categories = Category::all();
        $products = Product::paginate(9);
        return view('frontend.product_listing', compact('categories', 'products'));
    }

    public function listing_by_category($id)
    {
        $categories = Category::all();
        $products = Product::where('category_id', $id)->paginate(9);
        $category_id = $id;
        return view('frontend.product_listing', compact('categories', 'products', 'category_id'));
    }

    public function listing_by_subcategory($id)
    {
        $categories = Category::all();
        $products = Product::where('subcategory_id', $id)->paginate(9);
        $subcategory_id = $id;
        return view('frontend.product_listing', compact('categories', 'products', 'subcategory_id'));
    }

    public function listing_by_subsubcategory($id)
    {
        $categories = Category::all();
        $products = Product::where('subsubcategory_id', $id)->paginate(9);
        $subsubcategory_id = $id;
        return view('frontend.product_listing', compact('categories', 'products', 'subsubcategory_id'));
    }

    public function listing_by_brand($id)
    {
        $categories = Category::all();
        $products = Product::where('brand_id', $id)->paginate(9);
        return view('frontend.product_listing', compact('categories', 'products'));
    }

    public function login()
    {
        if(Auth::check()){
            return redirect()->route('home');
        }
        $categories = Category::all();
        return view('frontend.user_login', compact('categories'));
    }

    public function wishlist()
    {
        $categories = Category::all();
        return view('frontend.wishlist', compact('categories'));
    }
}
