<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\PublicSslCommerzPaymentController;
use App\Http\Controllers\OrderController;

class CheckoutController extends Controller
{

    public function __construct()
    {
        //
    }

    public function checkout(Request $request)
    {
        if($request->payment_option == 'paypal'){
            $orderController = new OrderController;
            $orderController->store($request);

            $paypal = new PaypalController;
            return $paypal->getCheckout();
        }
        elseif ($request->payment_option == 'sslcommerz') {
            $orderController = new OrderController;
            $orderController->store($request);

            $sslcommerz = new PublicSslCommerzPaymentController;
            return $sslcommerz->index($request);
        }
    }

    public function get_shipping_info(Request $request)
    {
        $categories = Category::all();
        return view('frontend.partials.shipping_info', compact('categories'));
    }

    public function get_payment_info(Request $request)
    {
        $data['name'] = $request->name;
        $data['address'] = $request->address;
        $data['country'] = $request->country;
        $data['city'] = $request->city;
        $data['postal_code'] = $request->postal_code;
        $data['phone'] = $request->phone;
        $data['checkout_type'] = $request->checkout_type;

        $shipping_info = $data;
        $request->session()->put('shipping_info', $shipping_info);
        return view('frontend.partials.payment_select');
    }
}
