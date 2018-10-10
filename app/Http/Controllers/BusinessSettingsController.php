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
    	return view('business_settings.currency', compact('currencies'));
    }

    public function seller_verification_form(Request $request)
    {
    	return view('business_settings.seller_verification_form');
    }
}
