<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Order;
use App\Seller;
use App\Http\Controllers\Controller;
use Unicodeveloper\Paystack\Paystack;
use Auth;
use Session;
use Redirect;

class PaystackController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        if(Session::get('payment_type') == 'cart_payment'){
            $order = Order::findOrFail(Session::get('order_id'));
            $paystack = new Paystack();
            $user = Auth::user();
            $request->email = $user->email;
            if (Session::get('payment_type') == 'cart_payment') {
                $request->amount = round(convert_to_usd($order->grand_total) * 100);
            }
            $request->key = env('PAYSTACK_SECRET_KEY');
            $request->reference = $paystack->genTranxRef();
            return $paystack->getAuthorizationUrl()->redirectNow();
        }
        elseif(Session::get('payment_type') == 'seller_payment'){
            $seller = Seller::findOrFail(Session::get('payment_data')['seller_id']);
            $paystack = new Paystack();
            $user = Auth::user();
            $request->email = $user->email;
            $request->amount = round(convert_to_usd($request->session()->get('payment_data')['amount']) * 100);
            $request->key = $seller->paystack_secret_key;
            $request->reference = $paystack->genTranxRef();
            return $paystack->getAuthorizationUrl()->redirectNow();
        }
    }


    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paystack = new Paystack();

        $payment = $paystack->getPaymentData();

        $payment_detalis = json_encode($payment);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want

        if(Session::has('payment_type')){
            if(Session::get('payment_type') == 'cart_payment'){
                $checkoutController = new CheckoutController;
                return $checkoutController->checkout_done(Session::get('order_id'), $payment_detalis);
            }
            elseif (Session::get('payment_type') == 'seller_payment') {
                $commissionController = new CommissionController;
                return $commissionController->seller_payment_done(Session::get('payment_data'), $payment_detalis);
            }
            elseif (Session::get('payment_type') == 'wallet_payment') {
                $walletController = new WalletController;
                return $walletController->wallet_payment_done(Session::get('payment_data'), $payment_detalis);
            }
        }
    }
}
