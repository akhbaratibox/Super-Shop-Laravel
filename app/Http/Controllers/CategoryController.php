<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->banner = $request->file('banner')->store('uploads');
        $category->icon = $request->file('icon')->store('uploads');
        
        if($category->save()){
            //flash('Category inserted successfully')->success();
            return redirect()->route('categories.index');
        }
        else{
            //flash('Something went wrong')->danger();
            return redirect()->route('categories.index');   
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
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
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
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        if($request->hasFile('banner')){
            $category->banner = $request->file('banner')->store('uploads');
        }
        if($request->hasFile('icon')){
            $category->icon = $request->file('icon')->store('uploads');
        }

        if($category->save()){
            //flash('Category inserted successfully')->success();
            return redirect()->route('categories.index');
        }
        else{
            //flash('Something went wrong')->danger();
            return redirect()->route('categories.index');   
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
        if(Category::destroy($id)){
            //flash('Category inserted successfully')->success();
            return redirect()->route('categories.index');
        }
        else{
            //flash('Something went wrong')->danger();
            return redirect()->route('categories.index');   
        }
    }
}
