<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use Paypal;
use Redirect;

class CheckoutController extends Controller
{

    private $_apiContext;
    public function __construct()
    {
        $this->_apiContext = PayPal::ApiContext(
            env('PAYPAL_CLIENT_ID'),
            env('PAYPAL_CLIENT_SECRET'));

		$this->_apiContext->setConfig(array(
			'mode' => 'sandbox',
			'service.EndPoint' => 'https://api.sandbox.paypal.com',
			'http.ConnectionTimeOut' => 30,
			'log.LogEnabled' => true,
			'log.FileName' => storage_path('logs/paypal.log'),
			'log.LogLevel' => 'FINE'
		));
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

        flash("Payment completed")->success();
    	return redirect()->route('home');
    }

    public function getCancel()
    {
        // Curse and humiliate the user for cancelling this most sacred payment (yours)
        flash("Payment cancelled")->success();
    	return redirect()->url()->previous();
    }

    public function getCheckout(Request $request)
    {
    	$payer = PayPal::Payer();
    	$payer->setPaymentMethod('paypal');
    	$amount = PayPal:: Amount();
    	$amount->setCurrency('USD');
    	$amount->setTotal(.05); // This is the simple way,
    	// you can alternatively describe everything in the order separately;
    	// Reference the PayPal PHP REST SDK for details.
    	$transaction = PayPal::Transaction();
    	$transaction->setAmount($amount);
    	$transaction->setDescription('Payment for verification');
    	$redirectUrls = PayPal:: RedirectUrls();
    	$redirectUrls->setReturnUrl(url('payment/done/'));
    	$redirectUrls->setCancelUrl(url('payment/cancel'));
    	$payment = PayPal::Payment();
    	$payment->setIntent('sale');
    	$payment->setPayer($payer);
    	$payment->setRedirectUrls($redirectUrls);
    	$payment->setTransactions(array($transaction));
    	$response = $payment->create($this->_apiContext);
    	$redirectUrl = $response->links[1]->href;

    	return Redirect::to( $redirectUrl );
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
