<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use PDF;

class InvoiceController extends Controller
{
    public function download($id)
    {
        $order = Order::findOrFail($id);
        $pdf = PDF::loadView('invoices.invoice', compact('order'));
        return $pdf->download('order-'.$order->code.'.pdf');
    }
}
