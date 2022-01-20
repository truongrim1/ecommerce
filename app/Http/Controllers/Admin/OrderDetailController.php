<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Orderdetail;
use Illuminate\Support\Facades\Validator;


class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderdetails = Orderdetail::all();
        return view('admin.orderdetails.index', array('orderdetails' => $orderdetails));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.orderdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OrderDetail::create([
            'quantity' => $request['txtsoluong'],
            'product_id' => $request['txtidpd'],
            'order_id' => $request['txtodid']
        ]);
        return redirect()->route('orderdetails.index')->with('message', 'Thên hóa thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response    
     */ 
    public function show($id)
    {
        $orderdetails = OrderDetail::all()->where('order_id', $id);
        return view('admin.orderdetails.index', array('orderdetails' => $orderdetails) );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orderdetail = Order::findOrFail($id);
        return view('admin.orderdetails.edit', compact('orderdetail'));
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
        OrderDetail::create([
            'quantity' => $request['txtsoluong'],
            'product_id' => $request['txtidpd'],
            'order_id' => $request['txtodid']
        ]);
        return redirect()->route('orderdetails.index')->with('message', 'Thên hóa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrderDetail::destroy($id);
        return redirect()->route('orderdetails.index')->with('message', 'Xóa hóa đơn hành công');
    }
}
