<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use Auth;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = Auth::user()->shop;
        return view('frontend.seller.shop', compact('shop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $shop = Shop::find($id);
        $shop->name = $request->name;

        $sliders = array();
        if($request->hasFile('sliders')){
            foreach ($request->sliders as $key => $slider) {
                array_push($sliders, $slider->store('shop/sliders'));
            }
            $shop->sliders = json_encode($sliders);
        }

        if($request->hasFile('logo')){
            $shop->logo = $request->logo->store('shop/logo');
        }

        $shop->address = $request->address;
        $shop->facebook = $request->facebook;
        $shop->google = $request->google;
        $shop->twitter = $request->twitter;
        $shop->youtube = $request->youtube;
        $shop->slug = preg_replace('/\s+/', '-', $request->name).'-'.$shop->id;

        if($shop->save()){
            flash('Your Shop has been updated successfully!')->success();
            return back();
        }

        flash('Sorry! Something went wrong.')->danger();
        return back();
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
