<?php

use App\Currency;
use App\BusinessSetting;
use App\Product;
use App\SubSubCategory;

//highlights the selected navigation on admin panel
if (! function_exists('areActiveRoutes')) {
    function areActiveRoutes(Array $routes, $output = "active-link")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) return $output;
        }

    }
}

//highlights the selected navigation on frontend
if (! function_exists('areActiveRoutesHome')) {
    function areActiveRoutesHome(Array $routes, $output = "active")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) return $output;
        }

    }
}

//returns combinations of customer choice options array
if (! function_exists('combinations')) {
    function combinations($arrays) {
        $result = array(array());
    	foreach ($arrays as $property => $property_values) {
    		$tmp = array();
    		foreach ($result as $result_item) {
    			foreach ($property_values as $property_value) {
    				$tmp[] = array_merge($result_item, array($property => $property_value));
    			}
    		}
    		$result = $tmp;
    	}
    	return $result;
    }
}

//converts price to home default price
if (! function_exists('single_price')) {
    function single_price($price)
    {
        $price = convert_price($price);

        if(BusinessSetting::where('type', 'symbol_format')->first()->value == 1){
            return currency_symbol().$price;
        }
        else{
            return $price.currency_symbol();
        }
    }
}

//converts currency
if (! function_exists('convert_price')) {
    function convert_price($price)
    {
        $business_settings = BusinessSetting::where('type', 'system_default_currency')->first();
        if($business_settings!=null){
            $currency = Currency::find($business_settings->value);
            $price = floatval($price) / floatval($currency->exchange_rate);
        }
        $business_settings = BusinessSetting::where('type', 'home_default_currency')->first();
        if($business_settings!=null){
            $currency = Currency::find($business_settings->value);
            $price = floatval($price) * floatval($currency->exchange_rate);
        }

        return $price;
    }
}

//Shows Price on page based on low to high
if (! function_exists('home_price')) {
    function home_price($id)
    {
        $product = Product::findOrFail($id);
        $lowest_price = $product->unit_price;
        $highest_price = $product->unit_price;

        foreach (json_decode($product->variations) as $key => $variation) {
            if($lowest_price > $variation->price){
                $lowest_price = $variation->price;
            }
            if($highest_price < $variation->price){
                $highest_price = $variation->price;
            }
        }

        $lowest_price = convert_price($lowest_price);
        $highest_price = convert_price($highest_price);

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

        foreach (json_decode($product->variations) as $key => $variation) {
            if($lowest_price > $variation->price){
                $lowest_price = $variation->price;
            }
            if($highest_price < $variation->price){
                $highest_price = $variation->price;
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

        $lowest_price = convert_price($lowest_price);
        $highest_price = convert_price($highest_price);

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

//Shows Base Price
if (! function_exists('home_base_price')) {
    function home_base_price($id)
    {
        $product = Product::findOrFail($id);
        $price = $product->unit_price;

        $price = convert_price($price);

        if(BusinessSetting::where('type', 'symbol_format')->first()->value == 1){
            return currency_symbol().$price;
        }
        else{
            return $price.currency_symbol();
        }
    }
}

//Shows Base Price with discount
if (! function_exists('home_discounted_base_price')) {
    function home_discounted_base_price($id)
    {
        $product = Product::findOrFail($id);
        $price = $product->unit_price;

        if($product->discount_type == 'percent'){
            $price -= ($price*$product->discount)/100;
        }
        elseif($product->discount_type == 'amount'){
            $price -= $product->discount;
        }

        $price = convert_price($price);

        if(BusinessSetting::where('type', 'symbol_format')->first()->value == 1){
            return currency_symbol().$price;
        }
        else{
            return $price.currency_symbol();
        }
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
