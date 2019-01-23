<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paypal;
use Redirect;
use App\Order;
use App\BusinessSetting;

class PaypalController extends Controller
{
    private $_apiContext;

    public function __construct()
    {
        $this->_apiContext = PayPal::ApiContext(
            env('PAYPAL_CLIENT_ID'),
            env('PAYPAL_CLIENT_SECRET'));

        if(BusinessSetting::where('type', 'paypal_sandbox')->first()->value == 1){
            $mode = 'sandbox';
        }
        else{
            $mode = 'live';
        }

		$this->_apiContext->setConfig(array(
			'mode' => $mode,
			'service.EndPoint' => 'https://api.sandbox.paypal.com',
			'http.ConnectionTimeOut' => 30,
			'log.LogEnabled' => true,
			'log.FileName' => public_path('logs/paypal.log'),
			'log.LogLevel' => 'FINE'
		));
    }

    public function getCheckout()
    {
    	$payer = PayPal::Payer();
    	$payer->setPaymentMethod('paypal');
    	$amount = PayPal::Amount();
    	$amount->setCurrency('USD');
    	$amount->setTotal(.05); // This is the simple way,
    	// you can alternatively describe everything in the order separately;
    	// Reference the PayPal PHP REST SDK for details.
    	$transaction = PayPal::Transaction();
    	$transaction->setAmount($amount);
    	$transaction->setDescription('Payment for verification');
    	$redirectUrls = PayPal:: RedirectUrls();
    	$redirectUrls->setReturnUrl(url('paypal/payment/done'));
    	$redirectUrls->setCancelUrl(url('paypal/payment/cancel'));
    	$payment = PayPal::Payment();
    	$payment->setIntent('sale');
    	$payment->setPayer($payer);
    	$payment->setRedirectUrls($redirectUrls);
    	$payment->setTransactions(array($transaction));
    	$response = $payment->create($this->_apiContext);
    	$redirectUrl = $response->links[1]->href;

    	return Redirect::to( $redirectUrl );
    }


    public function getCancel()
    {
        // Curse and humiliate the user for cancelling this most sacred payment (yours)
        $request->session()->forget('order_id');
        flash(__('Payment cancelled'))->success();
    	return redirect()->url()->previous();
    }

    public function getDone(Request $request)
    {
    	$payment_id = $request->get('paymentId');
    	$token = $request->get('token');
    	$payer_id = $request->get('PayerID');

    	$payment = PayPal::getById($payment_id, $this->_apiContext);
    	$paymentExecution = PayPal::PaymentExecution();
    	$paymentExecution->setPayerId($payer_id);
    	$executePayment = $payment->execute($paymentExecution, $this->_apiContext);

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
