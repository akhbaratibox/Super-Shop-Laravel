<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Category;
use App\Product;
use App\User;
use Auth;
use Hash;
use App\Shop;

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
                return redirect()->route('dashboard');
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

    public function profile(Request $request)
    {
        return view('frontend.profile');
    }

    public function update_profile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->postal_code = $request->postal_code;
        $user->phone = $request->phone;

        if($request->new_password != null && ($request->new_password == $request->confirm_password)){
            $user->password = Hash::make($request->new_password);
        }

        if($request->hasFile('photo')){
            $user->avatar_original = $request->photo->store('uploads');
        }

        if($user->save()){
            flash('Your Profile has been updated successfully!')->success();
            return back();
        }

        flash('Sorry! Something went wrong.')->danger();
        return back();
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

    public function shop($slug)
    {
        $shop  = Shop::where('slug', $slug)->first();
        if($shop!=null){
            return view('frontend.seller_shop', compact('shop'));
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
        return view('frontend.seller.product_upload', compact('categories'));
    }

    public function show_product_edit_form(Request $request, $id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('frontend.seller.product_edit', compact('categories', 'product'));
    }

    public function seller_product_list(Request $request)
    {
        $products = Product::where('user_id', Auth::user()->id)->paginate(10);
        return view('frontend.seller.products', compact('products'));
    }

    public function login()
    {
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('frontend.user_login');
    }
}
