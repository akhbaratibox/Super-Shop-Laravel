<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use App\Order;
use App\BusinessSetting;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CommissionController;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('frontend.payment.stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $payment = json_encode(Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken
        ]));

        if($request->session()->has('payment_type')){
            if($request->session()->get('payment_type') == 'cart_payment'){
                $checkoutController = new CheckoutController;
                return $checkoutController->checkout_done($request->session()->get('order_id'), $payment);
            }
            elseif ($request->session()->get('payment_type') == 'seller_payment') {
                $commissionController = new CommissionController;
                return $commissionController->seller_payment_done($request->session()->get('payment_data'), $payment);
            }
        }
    }
}
