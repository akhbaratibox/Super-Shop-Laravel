<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use App\BusinessSetting;

class BusinessSettingsController extends Controller
{
    public function activation(Request $request)
    {
    	return view('business_settings.activation');
    }

    public function social_login(Request $request)
    {
        return view('business_settings.social_login');
    }

    public function env_key_update(Request $request)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            foreach ($request->types as $key => $type) {
                file_put_contents($path, str_replace(
                    $type.'='.env($type), $type.'='.$request[$type], file_get_contents($path)
                ));
            }
        }
        flash("Settings updated successfully")->success();
        return back();
    }

    public function currency(Request $request)
    {
    	$currencies = Currency::all();
        $active_currencies = Currency::where('status', 1)->get();
    	return view('business_settings.currency', compact('currencies', 'active_currencies'));
    }

    public function updateCurrency(Request $request)
    {
    	$currency = Currency::findOrFail($request->id);
    	$currency->exchange_rate = $request->exchange_rate;
        $currency->status = $request->status;
        if($currency->save()){
            flash('Currency updated successfully')->success();
            return '1';
        }
        flash('Something went wrong')->error();
        return '0';
    }

    public function updateYourCurrency(Request $request)
    {
    	$currency = Currency::findOrFail($request->id);
        $currency->name = $request->name;
        $currency->symbol = $request->symbol;
        $currency->code = $request->code;
    	$currency->exchange_rate = $request->exchange_rate;
        $currency->status = $request->status;
        if($currency->save()){
            flash('Currency updated successfully')->success();
            return '1';
        }
        flash('Something went wrong')->error();
        return '0';
    }

    public function seller_verification_form(Request $request)
    {
    	return view('business_settings.seller_verification_form');
    }

    public function update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $business_settings = BusinessSetting::where('type', $type)->first();
            if($business_settings!=null){
                $business_settings->value = $request[$type];
                $business_settings->save();
            }
            else{
                $business_settings = new BusinessSetting;
                $business_settings->type = $type;
                $business_settings->value = $request[$type];
                $business_settings->save();
            }
        }
        flash("Settings updated successfully")->success();
        return back();
    }

    public function updateActivationSettings(Request $request)
    {
        $business_settings = BusinessSetting::where('type', $request->type)->first();
        if($business_settings!=null){
            $business_settings->value = $request->value;
            $business_settings->save();
        }
        else{
            $business_settings = new BusinessSetting;
            $business_settings->type = $request->type;
            $business_settings->value = $request->value;
            $business_settings->save();
        }
        flash("Settings updated successfully")->success();
        return '1';
    }
}
