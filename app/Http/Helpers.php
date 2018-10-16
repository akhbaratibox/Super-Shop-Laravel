<?php

use App\Currency;
use App\BusinessSetting;

if (! function_exists('areActiveRoutes')) {
    function areActiveRoutes(Array $routes, $output = "active-link")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) return $output;
        }

    }
}

if (! function_exists('home_price')) {
    function home_price($price)
    {
        $business_settings = BusinessSetting::where('type', 'home_default_currency')->first();
        if($business_settings!=null){
            $currency = Currency::find($business_settings->value);
            $price = floatval($price) * floatval($currency->exchange_rate);
        }
        return $price;
    }
}

if (! function_exists('home_discounted_price')) {
    function home_discounted_price($price, $discount, $type)
    {
        if($type = 'percent'){
            $price -= ($price*$discount)/100;
        }
        elseif($type = 'amount'){
            $price -= $discount;
        }

        $business_settings = BusinessSetting::where('type', 'home_default_currency')->first();
        if($business_settings!=null){
            $currency = Currency::find($business_settings->value);
            $price = floatval($price) * floatval($currency->exchange_rate);
        }
        return $price;
    }
}

if (! function_exists('system_price')) {
    function system_price(String $price)
    {
        $business_settings = BusinessSetting::where('type', 'system_default_currency')->first();
        if($business_settings!=null){
            $currency = Currency::find($business_settings->value);
            $price = floatval($price) * floatval($currency->exchange_rate);
        }
        return $price;
    }
}

if (! function_exists('currency_symbol')) {
    function currency_symbol()
    {
        $business_settings = BusinessSetting::where('type', 'home_default_currency')->first();
        $symbol = '$';
        if($business_settings!=null){
            $currency = Currency::find($business_settings->value);
            $symbol = $currency->symbol;
        }
        return $symbol;
    }
}

?>
