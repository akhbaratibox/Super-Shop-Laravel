<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubSubCategory;
use App\Brand;

class SubSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsubcategories = SubSubCategory::all();
        return view('subsubcategories.index', compact('subsubcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('subsubcategories.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subsubcategory = new SubSubCategory;
        $subsubcategory->name = $request->name;
        $subsubcategory->sub_category_id = $request->sub_category_id;

        if($request->hasFile('banner')){
            $subsubcategory->banner = $request->file('banner')->store('uploads/subsubcategories/banner');
        }

        $subsubcategory->brands = json_encode($request->brands);

        if($subsubcategory->save()){
            flash('SubSubCategory has been inserted successfully')->success();
            return redirect()->route('subsubcategories.index');
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
        $subsubcategory = SubSubCategory::findOrFail($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view('subsubcategories.edit', compact('subsubcategory', 'categories', 'brands'));
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
        $subsubcategory = SubSubCategory::findOrFail($id);
        $subsubcategory->name = $request->name;
        $subsubcategory->sub_category_id = $request->sub_category_id;

        if($request->hasFile('banner')){
            $subsubcategory->banner = $request->file('banner')->store('uploads/subsubcategories/banner');
        }

        $subsubcategory->brands = json_encode($request->brands);

        if($subsubcategory->save()){
            flash('SubSubCategory has been updated successfully')->success();
            return redirect()->route('subsubcategories.index');
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
        $subsubcategory = SubSubCategory::findOrFail($id);
        if(SubSubCategory::destroy($id)){
            unlink($subsubcategory->banner);
            flash('SubSubCategory has been deleted successfully')->success();
            return redirect()->route('subsubcategories.index');
        }
        else{
            flash('Something went wrong')->danger();
            return back();
        }
    }

    public function get_subsubcategories_by_subcategory(Request $request)
    {
        $subsubcategories = SubSubCategory::where('sub_category_id', $request->subcategory_id)->get();
        return $subsubcategories;
    }

    public function get_brands_by_subsubcategory(Request $request)
    {
        $brand_ids = json_decode(SubSubCategory::findOrFail($request->subsubcategory_id)->brands);
        $brands = array();
        foreach ($brand_ids as $key => $brand_id) {
            array_push($brands, Brand::findOrFail($brand_id));
        }
        return $brands;
    }
}
