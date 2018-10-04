<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Auth;
use App\SubSubCategory;

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
        $product->subsubcategory_id = $request->subsubcategory_id;
        $product->brand_id = $request->brand_id;

        if($request->hasFile('photo')){
            $product->photo = $request->file('photo')->store('uploads');
        }

        $product->unit = $request->unit;
        $product->tags = json_encode($request->tags);
        $product->description = $request->description;
        $product->unit_price = $request->unit_price;
        $product->purchase_price = $request->purchase_price;
        $product->shipping_cost = $request->shipping_cost;
        $product->tax = $request->tax;
        $product->tax_type = $request->tax_type;
        $product->discount = $request->discount;
        $product->discount_type = $request->discount_type;
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
            return view('products.index');
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
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
