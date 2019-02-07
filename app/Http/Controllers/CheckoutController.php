<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PublicSslCommerzPaymentController;
use App\Http\Controllers\OrderController;
use App\Order;

class CheckoutController extends Controller
{

    public function __construct()
    {
        //
    }

    public function checkout(Request $request)
    {
        $orderController = new OrderController;
        $orderController->store($request);

        if($request->session()->get('order_id') != null){
            if($request->payment_option == 'paypal'){
                $paypal = new PaypalController;
                return $paypal->getCheckout();
            }
            elseif ($request->payment_option == 'stripe') {
                $stripe = new StripePaymentController;
                return $stripe->stripe();
            }
            elseif ($request->payment_option == 'sslcommerz') {
                $sslcommerz = new PublicSslCommerzPaymentController;
                return $sslcommerz->index($request);
            }
            elseif ($request->payment_option == 'cash_on_delivery') {
                $order = Order::findOrFail($request->session()->get('order_id'));
                $commission_percentage = BusinessSetting::where('type', 'vendor_commission')->first()->value;
                foreach ($order->orderDetails as $key => $orderDetail) {
                    if($orderDetail->product->user->user_type == 'seller'){
                        $seller = $orderDetail->product->user->seller;
                        $seller->pay_to_admin = $seller->pay_to_admin + ($orderDetail->price*$commission_percentage)/100;
                        $seller->save();
                    }
                }

                $request->session()->put('cart', collect([]));
                $request->session()->forget('order_id');

                flash("Your order has been placed successfully")->success();
            	return redirect()->route('home');
            }
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
        $data['email'] = $request->email;
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
