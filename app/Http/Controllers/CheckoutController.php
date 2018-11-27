<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Http\Controllers\PaypalController;

class CheckoutController extends Controller
{

    public function __construct()
    {
        //
    }

    public function checkout(Request $request)
    {
        if($request->payment_option == 'paypal'){
            $paypal = new PaypalController;
            return $paypal->getCheckout();
        }
    }

    public function get_shipping_info(Request $request)
    {
        $categories = Category::all();
        return view('frontend.partials.shipping_info', compact('categories'));
    }

    public function get_payment_info(Request $request)
    {
        return view('frontend.partials.payment_select');
    }
}
