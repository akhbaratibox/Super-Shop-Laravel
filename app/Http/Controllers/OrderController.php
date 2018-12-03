<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Productr;
use App\Color;
use App\OrderDetail;
use Auth;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->user_type == 'admin'){

        }
        elseif(Auth::user()->user_type == 'seller'){
            $orderDetails = OrderDetail::where('seller_id', Auth::user()->id)->paginate(9);
            return view('frontend.seller.orders', compact('orderDetails'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        if(Auth::check()){
            $order->user_id = Auth::user()->id;
        }
        else{
            $order->guest_id = str_random(11);
        }

        $order->shipping_address = json_encode($request->session()->get('shipping_info'));
        $order->payment_type = $request->payment_option;
        if($order->save()){
            $total = 0;
            foreach (Session::get('cart') as $key => $cartItem){
                $product = Product::find($cartItem['id']);
                $total = $total + $cartItem['price']*$cartItem['quantity'];
                $product_variation = null;
                if(isset($cartItem['color'])){
                    $product_variation .= Color::where('code', $cartItem['color'])->first()->name;
                }
                foreach (json_decode($product->choice_options) as $choice){
                    $str = $choice->name; // example $str =  choice_0
                    $product_variation .= '-'.str_replace(' ', '', $cartItem[$str]);
                }

                $order_detail = new OrderDetail;
                $order_detail->order_id  =$order->id;
                $order_detail->seller_id = $product->user_id;
                $order_detail->product_id = $product->id;
                $order_detail->variation = $product_variation;
                $order_detail->price = $cartItem['price'];
                $order_detail->quantity = $cartItem['quantity'];
                $order_detail->save();
            }

            $order->grand_total = $total;
            $order->code = mt_rand(1000000, 9999999);
            $order->save();

            $request->session()->put('order_id', $order->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
