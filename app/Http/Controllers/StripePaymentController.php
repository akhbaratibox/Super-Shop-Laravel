<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use App\Order;

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

        $order = Order::findOrFail($request->session()->get('order_id'));
        $order->payment_status = 'paid';
        $order->payment_details = $payment;
        $order->save();

        $request->session()->put('cart', collect([]));
        $request->session()->forget('order_id');

        flash(__('Payment completed'))->success();
    	return redirect()->route('home');
    }
}
