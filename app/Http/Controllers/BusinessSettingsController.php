<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;

class BusinessSettingsController extends Controller
{
    public function activation(Request $request)
    {
    	return view('business_settings.activation');
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
            return '1';
        }
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
            return '1';
        }
        return '0';
    }

    public function seller_verification_form(Request $request)
    {
    	return view('business_settings.seller_verification_form');
    }
}
