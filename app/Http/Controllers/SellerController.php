<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
use App\User;
use App\Shop;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::all();
        return view('sellers.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sellers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user_type = "seller";
        $user->password = Hash::make($request->password);
        if($user->save()){
            $seller = new Seller;
            $seller->user_id = $user->id;
            if($seller->save()){
                $shop = new Shop;
                $shop->user_id = $user->id;
                $shop->slug = 'demo-shop-'.$user->id;
                $shop->save();
                flash(__('Seller has been inserted successfully'))->success();
                return redirect()->route('sellers.index');
            }
        }

        flash(__('Something went wrong'))->error();
        return back();
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
        $seller = Seller::findOrFail($id);
        return view('sellers.edit', compact('seller'));
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
        $seller = Seller::findOrFail($id);
        $user = $seller->user;
        $user->name = $request->name;
        $user->email = $request->email;
        if(strlen($request->password) > 0){
            $user->password = Hash::make($request->password);
        }
        if($user->save()){
            if($seller->save()){
                flash(__('Seller has been updated successfully'))->success();
                return redirect()->route('sellers.index');
            }
        }

        flash(__('Something went wrong'))->error();
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
        User::destroy(Seller::findOrFail($id)->user->id);
        if(Seller::destroy($id)){
            flash(__('Seller has been deleted successfully'))->success();
            return redirect()->route('sellers.index');
        }

        flash(__('Something went wrong'))->error();
        return back();
    }
}
