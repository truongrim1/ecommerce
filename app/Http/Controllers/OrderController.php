<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('web.order');
    }

    public function order(Request $request)
    {
        $orderDetail = array(
            'id' => $request->id,
            'quantity' => $request->quantity
        );

        $cart = session()->get('cart');
        if(!isset($cart)) $cart = array();
        $cart[$request->id] = $orderDetail;
        session()->put('cart', $cart);
        return redirect->route('checkout')->with('message', 'Đã thêm giỏ hàng thành công');
    }
}
