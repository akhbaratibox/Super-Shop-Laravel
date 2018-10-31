<?php

use App\Currency;
use App\BusinessSetting;
use App\Product;
use App\SubSubCategory;

if (! function_exists('areActiveRoutes')) {
    function areActiveRoutes(Array $routes, $output = "active-link")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) return $output;
        }

    }
}

if (! function_exists('single_price')) {
    function single_price($price)
    {
        $business_settings = BusinessSetting::where('type', 'home_default_currency')->first();
        if($business_settings!=null){
            $currency = Currency::find($business_settings->value);
            $price = floatval($price) * floatval($currency->exchange_rate);
        }
        if(BusinessSetting::where('type', 'symbol_format')->first()->value == 1){
            return currency_symbol().$price;
        }
        else{
            return $price.currency_symbol();
        }
    }
}

//Shows Price on page based on low to high
if (! function_exists('home_price')) {
    function home_price($id)
    {
        $product = Product::findOrFail($id);
        $lowest_price = $product->unit_price;
        $highest_price = $product->unit_price;
        foreach (json_decode($product->subsubcategory->options) as $key => $choice) {
            if($choice->type != 'text'){
                foreach ($choice->options as $key => $option) {
                    $str_price = $choice->name.'_'.$option.'_price';
                    $str_variation = $choice->name.'_'.$option.'_variation';
                    if(json_decode($product->price_variations)->$str_variation == 'decrease'){
                        if(($temp = floatval($product->unit_price) - floatval(json_decode($product->price_variations)->$str_price)) < $lowest_price){
                            $lowest_price = $temp;
                        }
                    }
                    else{
                        if(($temp = floatval($product->unit_price) + floatval(json_decode($product->price_variations)->$str_price)) > $highest_price){
                            $highest_price = $temp;
                        }
                    }
                }
            }
        }
        $business_settings = BusinessSetting::where('type', 'home_default_currency')->first();
        if($business_settings!=null){
            $currency = Currency::find($business_settings->value);
            $lowest_price = floatval($lowest_price) * floatval($currency->exchange_rate);
            $highest_price = floatval($highest_price) * floatval($currency->exchange_rate);
        }
        if($lowest_price == $highest_price){
            if(BusinessSetting::where('type', 'symbol_format')->first()->value == 1){
                return currency_symbol().$lowest_price;
            }
            else{
                return $lowest_price.currency_symbol();
            }
        }
        else{
            if(BusinessSetting::where('type', 'symbol_format')->first()->value == 1){
                return currency_symbol().$lowest_price.' - '.currency_symbol().$highest_price;
            }
            else{
                return $lowest_price.currency_symbol().' - '.$highest_price.currency_symbol();
            }
        }
    }
}

//Shows Price on page based on low to high with discount
if (! function_exists('home_discounted_price')) {
    function home_discounted_price($id)
    {
        $product = Product::findOrFail($id);
        $lowest_price = $product->unit_price;
        $highest_price = $product->unit_price;
        foreach (json_decode($product->subsubcategory->options) as $key => $choice) {
            if($choice->type != 'text'){
                foreach ($choice->options as $key => $option) {
                    $str_price = $choice->name.'_'.$option.'_price';
                    $str_variation = $choice->name.'_'.$option.'_variation';
                    if(json_decode($product->price_variations)->$str_variation == 'decrease'){
                        if(($temp = floatval($product->unit_price) - floatval(json_decode($product->price_variations)->$str_price)) < $lowest_price){
                            $lowest_price = $temp;
                        }
                    }
                    else{
                        if(($temp = floatval($product->unit_price) + floatval(json_decode($product->price_variations)->$str_price)) > $highest_price){
                            $highest_price = $temp;
                        }
                    }
                }
            }
        }

        if($product->discount_type == 'percent'){
            $lowest_price -= ($lowest_price*$product->discount)/100;
            $highest_price -= ($highest_price*$product->discount)/100;
        }
        elseif($product->discount_type == 'amount'){
            $lowest_price -= $product->discount;
            $highest_price -= $product->discount;
        }

        $business_settings = BusinessSetting::where('type', 'home_default_currency')->first();
        if($business_settings!=null){
            $currency = Currency::find($business_settings->value);
            $lowest_price = floatval($lowest_price) * floatval($currency->exchange_rate);
            $highest_price = floatval($highest_price) * floatval($currency->exchange_rate);
        }
        if($lowest_price == $highest_price){
            if(BusinessSetting::where('type', 'symbol_format')->first()->value == 1){
                return currency_symbol().$lowest_price;
            }
            else{
                return $lowest_price.currency_symbol();
            }
        }
        else{
            if(BusinessSetting::where('type', 'symbol_format')->first()->value == 1){
                return currency_symbol().$lowest_price.' - '.currency_symbol().$highest_price;
            }
            else{
                return $lowest_price.currency_symbol().' - '.$highest_price.currency_symbol();
            }
        }
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
