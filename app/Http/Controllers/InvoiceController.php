<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use PDF;
use Auth;

class InvoiceController extends Controller
{
    public function download($id)
    {
        $order = Order::findOrFail($id);
        if (Auth::user()->user_type == 'customer') {
            $pdf = PDF::loadView('invoices.customer_invoice', compact('order'));
        }
        elseif (Auth::user()->user_type == 'seller') {
            $pdf = PDF::loadView('invoices.seller_invoice', compact('order'));
        }
        elseif (Auth::user()->user_type == 'admin') {
            $pdf = PDF::loadView('invoices.admin_invoice', compact('order'));
        }
        return $pdf->download('order-'.$order->code.'.pdf');
    }
}
