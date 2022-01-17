<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;


Route::get('admin', function () {
    return view('admin.master');
});

Route::prefix('admin')->group(function(){
    Route::resource('products', ProductController::class);

    Route::resource('customers', CustomerController::class);
    
    Route::resource('orders', OrderController::class);

    Route::resource('orderdetails', OrderDetailController::class);
});
//
Route::get('language', function(Request $request){

   session( ['locale' => $request->input('locale') ]);
   return redirect()->route('customers.index');
});

Route::get('vi', function(){
    App::setLocale('vi');
});
Route::get('alo', function () {
    return "alo";
});