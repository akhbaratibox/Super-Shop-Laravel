<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Role;
use App\User;
use Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('staffs.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('staffs.create', compact('roles'));
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
        $user->user_type = "staff";
        $user->password = Hash::make($request->password);
        if($user->save()){
            $staff = new Staff;
            $staff->user_id = $user->id;
            $staff->role_id = $request->role_id;
            if($staff->save()){
                flash('Staff has been inserted successfully')->success();
                return redirect()->route('staffs.index');
            }
        }

        flash('Something went wrong')->danger();
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
        $staff = Staff::findOrFail($id);
        $roles = Role::all();
        return view('staffs.edit', compact('staff', 'roles'));
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
        $staff = Staff::findOrFail($id);
        $user = $staff->user;
        $user->name = $request->name;
        $user->email = $request->email;
        if(strlen($request->password) > 0){
            $user->password = Hash::make($request->password);
        }
        if($user->save()){
            if($staff->save()){
                flash('Staff has been updated successfully')->success();
                return redirect()->route('staffs.index');
            }
        }

        flash('Something went wrong')->danger();
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
        User::destroy(Staff::findOrFail($id)->user->id);
        if(Staff::destroy($id)){
            flash('Staff has been deleted successfully')->success();
            return redirect()->route('staffs.index');
        }

        flash('Something went wrong')->danger();
        return back();
    }
}