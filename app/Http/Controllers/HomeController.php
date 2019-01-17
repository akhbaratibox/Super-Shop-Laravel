<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use Hash;
use App\Category;
use App\SubSubCategory;
use App\Product;
use App\User;
use App\Shop;
use App\Color;
use App\Http\Controllers\SearchController;
use ImageOptimizer;

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
        // $files = scandir(base_path('public/uploads/categories'));
        // foreach($files as $file) {
        //     ImageOptimizer::optimize(base_path('public/uploads/categories/').$file);
        // }
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
        $products = Product::orderBy('created_at', 'desc')->paginate(9);
        return view('frontend.product_listing', compact('products'));
    }

    public function all_categories(Request $request)
    {
        $categories = Category::all();
        return view('frontend.all_category', compact('categories'));
    }

    public function listing_by_category($id)
    {
        $products = Product::where('published', 1)->where('category_id', $id)->orderBy('created_at', 'desc')->paginate(9);
        $category_id = $id;
        return view('frontend.product_listing', compact('products', 'category_id'));
    }

    public function listing_by_subcategory($id)
    {
        $products = Product::where('published', 1)->where('subcategory_id', $id)->orderBy('created_at', 'desc')->paginate(9);
        $subcategory_id = $id;
        return view('frontend.product_listing', compact('products', 'subcategory_id'));
    }

    public function listing_by_subsubcategory($id)
    {
        $products = Product::where('published', 1)->where('subsubcategory_id', $id)->orderBy('created_at', 'desc')->paginate(9);
        $subsubcategory_id = $id;
        return view('frontend.product_listing', compact('products', 'subsubcategory_id'));
    }

    public function listing_by_brand($id)
    {
        $products = Product::where('published', 1)->where('brand_id', $id)->orderBy('created_at', 'desc')->paginate(9);
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

    public function ajax_search(Request $request)
    {
        $keywords = array();
        $products = Product::where('published', 1)->where('tags', 'like', '%'.$request->search.'%')->get();
        foreach ($products as $key => $product) {
            foreach (explode(',',$product->tags) as $key => $tag) {
                if(stripos($tag, $request->search) !== false){
                    if(sizeof($keywords) > 5){
                        break;
                    }
                    else{
                        if(!in_array(strtolower($tag), $keywords)){
                            array_push($keywords, strtolower($tag));
                        }
                    }
                }
            }
        }
        $products = Product::where('published', 1)->where('name', 'like', '%'.$request->search.'%')->get()->take(3);
        $subsubcategories = SubSubCategory::where('name', 'like', '%'.$request->search.'%')->get()->take(3);

        if(sizeof($keywords)>0 || sizeof($subsubcategories)>0 || sizeof($products)>0){
            return view('frontend.partials.search_content', compact('products', 'subsubcategories', 'keywords'));
        }
        return '0';
    }

    public function search(Request $request)
    {
        if($request->q != null){
            $searchController = new SearchController;
            $searchController->store($request);
        }

        if($request->category != null){
            $products = Product::where('published', 1)->where('category_id', $request->category)->where('name', 'like', '%'.$request->q.'%')->paginate(9);
        }
        else {
            $products = Product::where('published', 1)->where('name', 'like', '%'.$request->q.'%')->orWhere('tags', 'like', '%'.$request->q.'%')->paginate(9);
        }
        return view('frontend.product_listing', compact('products'));
    }

    public function home_settings(Request $request)
    {
        return view('home_settings.index');
    }

    public function variant_price(Request $request)
    {
        $product = Product::find($request->id);
        $str = '';

        if($request->has('color')){
            $data['color'] = $request['color'];
            $str = Color::where('code', $request['color'])->first()->name;
        }

        foreach (json_decode(Product::find($request->id)->choice_options) as $key => $choice) {
            $str .= '-'.str_replace(' ', '', $request[$choice->name]);
        }

        $price = json_decode($product->variations)->$str->price;

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
        }
        return single_price($price*$request->quantity);
    }
}
