<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Requests\CustomerRequest;



class CustomerController extends Controller
{ 
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $customers = Customer::all();

        return view('admin.customers.index', array('customers'=>$customers));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {

      Customer::create($request->all());
      session()->flash('succeskh', 'Thêm khách hàng thành công');
      return redirect()->route('customers.index');
      

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return customer::find($id);
        return view('admin.customers.show', array('customer'=>$customer));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customers.edit', array('customer'=>$customer));
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
        // $input =  $request->all();

        // $customer = Customer::find($id);

        $customer = Customer::find($id);
        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success', 'Sửa khách hàng thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::destroy($id);
        
        return redirect()->route('customers.index')->with('success', 'Xoá khách hàng thành công');
    }
}
