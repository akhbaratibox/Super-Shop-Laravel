<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Auth;
use App\SubSubCategory;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $product = new Product;
        $product->name = $request->name;
        $product->added_by = $request->added_by;
        $product->user_id = Auth::user()->id;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->subsubcategory_id = $request->subsubcategory_id;
        $product->brand_id = $request->brand_id;

        $photos = array();

        if($request->hasFile('photos')){
            foreach ($request->photos as $key => $photo) {
                array_push($photos, $photo->store('uploads'));
            }
        }

        $product->photos = json_encode($photos);

        if($request->hasFile('thumbnail_img')){
            $product->thumbnail_img = $request->thumbnail_img->store('uploads');
        }

        if($request->hasFile('featured_img')){
            $product->featured_img = $request->featured_img->store('uploads');
        }

        if($request->hasFile('flash_deal_img')){
            $product->flash_deal_img = $request->flash_deal_img->store('uploads');
        }

        $product->unit = $request->unit;
        $product->tags = json_encode($request->tags);
        $product->description = $request->description;
        $product->video_provider = $request->video_provider;
        $product->video_link = $request->video_link;
        $product->unit_price = $request->unit_price;
        $product->purchase_price = $request->purchase_price;
        $product->tax = $request->tax;
        $product->tax_type = $request->tax_type;
        $product->discount = $request->discount;
        $product->discount_type = $request->discount_type;

        $product->slug = preg_replace('/\s+/', '-', $request->name).'-'.str_random(5);

        $product->colors = json_encode($request->colors);

        $price_variations = array();

        foreach (json_decode(SubSubCategory::find($request->subsubcategory_id)->options) as $key => $option) {
            foreach($option->options as $options){
                $str_price = $option->name.'_'.$options.'_price';
                $str_variation = $option->name.'_'.$options.'_variation';
                $price_variations[$str_variation] = $request[$str_variation];
                $price_variations[$str_price] = $request[$str_price];
            }
        }

        $product->price_variations = json_encode($price_variations);

        if($product->save()){
            flash('Product has been inserted successfully')->success();
            return view('products.index');
        }
        else{
            flash('Something went wrong')->danger();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        //dd(json_decode($product->price_variations)->choices_0_S_price);
        $tags = json_decode($product->tags);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->added_by = $request->added_by;
        $product->user_id = Auth::user()->id;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->subsubcategory_id = $request->subsubcategory_id;
        $product->brand_id = $request->brand_id;

        if($request->hasFile('photos')){
            $photos = array();
            foreach ($request->photos as $key => $photo) {
                array_push($photos, $photo->store('uploads'));
            }
            $product->photos = json_encode($photos);
        }

        if($request->hasFile('thumbnail_img')){
            $product->thumbnail_img = $request->thumbnail_img->store('uploads');
        }

        if($request->hasFile('featured_img')){
            $product->featured_img = $request->featured_img->store('uploads');
        }

        if($request->hasFile('flash_deal_img')){
            $product->flash_deal_img = $request->flash_deal_img->store('uploads');
        }

        $product->unit = $request->unit;
        $product->tags = json_encode($request->tags);
        $product->description = $request->description;
        $product->video_provider = $request->video_provider;
        $product->video_link = $request->video_link;
        $product->unit_price = $request->unit_price;
        $product->purchase_price = $request->purchase_price;
        $product->tax = $request->tax;
        $product->tax_type = $request->tax_type;
        $product->discount = $request->discount;
        $product->discount_type = $request->discount_type;

        $product->slug = preg_replace('/\s+/', '-', $request->name).'-'.str_random(5);

        $product->colors = json_encode($request->colors);

        $price_variations = array();

        foreach (json_decode(SubSubCategory::find($request->subsubcategory_id)->options) as $key => $option) {
            foreach($option->options as $options){
                $str_price = $option->name.'_'.$options.'_price';
                $str_variation = $option->name.'_'.$options.'_variation';
                $price_variations[$str_variation] = $request[$str_variation];
                $price_variations[$str_price] = $request[$str_price];
            }
        }
        $product->price_variations = json_encode($price_variations);

        if($product->save()){
            flash('Product has been updated successfully')->success();
            return view('products.index');
        }
        else{
            flash('Something went wrong')->danger();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Product::destroy($id)){
            flash('Product has been deleted successfully')->success();
            return redirect()->route('products.index');
        }
        else{
            flash('Something went wrong')->danger();
            return back();
        }
    }

    public function get_products_by_subsubcategory(Request $request)
    {
        $products = Product::where('subsubcategory_id', $request->subsubcategory_id)->get();
        return $products;
    }

    public function updateTodaysDeal(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->todays_deal = $request->status;
        if($product->save()){
            return 1;
        }
        return 0;
    }

    public function updatePublished(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->published = $request->status;
        if($product->save()){
            return 1;
        }
        return 0;
    }

    public function updateFeatured(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->featured = $request->status;
        if($product->save()){
            return 1;
        }
        return 0;
    }

    public function addToCompare(Request $request)
    {
        if($request->session()->has('compare')){
            $cart = $request->session()->get('compare', collect([]));
            if(!$cart->contains($request->id)){
                $cart->push($request->id);
            }
        }
        else{
            $cart = collect([$request->id]);
            $request->session()->put('compare', $cart);
        }

        return view('frontend.partials.compare');
    }
}
