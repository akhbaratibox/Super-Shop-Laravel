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
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_dashboard()
    {
        return view('dashboard');
    }

    /**
     * Show the customer/seller dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        if(Auth::user()->user_type == 'seller'){
            return view('frontend.seller.dashboard');
        }
        elseif(Auth::user()->user_type == 'customer'){
            return view('frontend.customer.dashboard');
        }
        else {
            abort(404);
        }
    }

    /**
     * Show the application frontend home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function product($slug)
    {
        $product  = Product::where('slug', $slug)->first();
        if($product!=null){
            return view('frontend.product_details', compact('product'));
        }
        abort(404);
    }

    public function listing(Request $request)
    {
        $products = Product::paginate(9);
        return view('frontend.product_listing', compact('products'));
    }

    public function listing_by_category($id)
    {
        $products = Product::where('category_id', $id)->paginate(9);
        $category_id = $id;
        return view('frontend.product_listing', compact('products', 'category_id'));
    }

    public function listing_by_subcategory($id)
    {
        $products = Product::where('subcategory_id', $id)->paginate(9);
        $subcategory_id = $id;
        return view('frontend.product_listing', compact('products', 'subcategory_id'));
    }

    public function listing_by_subsubcategory($id)
    {
        $products = Product::where('subsubcategory_id', $id)->paginate(9);
        $subsubcategory_id = $id;
        return view('frontend.product_listing', compact('products', 'subsubcategory_id'));
    }

    public function listing_by_brand($id)
    {
        $products = Product::where('brand_id', $id)->paginate(9);
        return view('frontend.product_listing', compact('products'));
    }

    public function show_product_upload_form(Request $request)
    {
        $categories = Category::all();
        return view('frontend.seller_product_upload', compact('categories'));
    }

    public function login()
    {
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('frontend.user_login');
    }
}
