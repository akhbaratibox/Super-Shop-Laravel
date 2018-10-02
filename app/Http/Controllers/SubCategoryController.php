<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use App\Category;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        return view('subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('subcategories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategory = new SubCategory;
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->banner = $request->file('banner')->store('uploads');

        if($subcategory->save()){
            //flash('subcategory inserted successfully')->success();
            return redirect()->route('subcategories.index');
        }
        else{
            //flash('Something went wrong')->danger();
            return redirect()->route('subcategories.index');   
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
        $subcategory = SubCategory::findOrFail($id);
        $categories = Category::all();
        return view('subcategories.edit', compact('categories', 'subcategory'));
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
        $subcategory = SubCategory::findOrFail($id);
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        
        if($request->hasFile('banner')){
            $subcategory->banner = $request->file('banner')->store('uploads');
        }

        if($subcategory->save()){
            //flash('subcategory inserted successfully')->success();
            return redirect()->route('subcategories.index');
        }
        else{
            //flash('Something went wrong')->danger();
            return redirect()->route('subcategories.index');   
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
        if(SubCategory::destroy($id)){
            //flash('Category inserted successfully')->success();
            return redirect()->route('subcategories.index');
        }
        else{
            //flash('Something went wrong')->danger();
            return redirect()->route('subcategories.index');   
        }
    }


    public function get_subcategories_by_category(Request $request)
    {
        $subcategories = SubCategory::where('category_id', $request->category_id)->get();
        return $subcategories;
    }
}
