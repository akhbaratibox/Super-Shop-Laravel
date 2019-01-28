<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeneralSetting;
use ImageOptimizer;
use App\Http\Controllers\BusinessSettingsController;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generalsetting = GeneralSetting::first();
        return view("general_settings.index", compact("generalsetting"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $generalsetting = GeneralSetting::first();
        $generalsetting->site_name = $request->name;
        $generalsetting->address = $request->address;
        $generalsetting->phone = $request->phone;
        $generalsetting->email = $request->email;
        $generalsetting->description = $request->description;

        if($request->hasFile('logo')){
            $generalsetting->logo = $request->file('logo')->store('uploads/logo');
            ImageOptimizer::optimize(base_path('public/').$generalsetting->logo);
        }

        if($generalsetting->save()){
            $businessSettingsController = new BusinessSettingsController;
            $businessSettingsController->overWriteEnvFile('APP_NAME',$request->name);

            flash('GeneralSetting has been inserted successfully')->success();
            return redirect()->route('generalsettings.index');
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
        //
    }
}