<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['orders'] = Order::with('customer')->Searchdate()->paginate(3);
        return view('admin.orders.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customer::with('customer')->get();
        return view('admin.orders.create', array('customers' => $customer));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make( $request->all(),[
            'txtname' => 'required|min: 5|max: 25',
            'txtnote' => 'required|max: 255'
        ]);

        if($validate->fails()){
            return redirect()->route('orders.create')->withErrors($validate)->withInput($request->input());
        }

        Order::create([
            'name' => $request['txtname'],
            'desc' => $request['txtnote'],
            'status' => $request['txtstatus'],
            'customer_id' => $request['txtcustomer']
        ]);
        return redirect()->route('orders.index')->with('message', 'Thên hóa thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $orders = Order::find($id)->with('customer')->get();
        return redirect()->route('orderdetails.show', $id );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $customer = Customer::all();
        return view('admin.orders.edit', array('customers' => $customer ), compact('order'));
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
        $order = Order::findOrFail($id);
        $order->update([
            'status' => $request['txtstatus']
        ]);
        return redirect()->route('orders.index')->with('message', 'Cập nhật hóa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);
        return redirect()->route('orders.index')->with('message', 'Xóa hóa đơn hành công');
    }
}
