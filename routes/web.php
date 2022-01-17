<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\BrandController;
use App\Http\Requests\BrandRequest;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('admin', function () {
    return view('admin.master');
});

Route::prefix('admin')->group(function(){
    Route::resource('products', ProductController::class);
    Route::resource('customers', CustomerController::class); 
    Route::resource('orders', OrderController::class);
    Route::resource('orderdetails', OrderDetailController::class);
});

Route::get('language', function(Request $request){
   session( ['locale' => $request->input('locale') ]);
   return redirect()->route('customers.index');
    Route::resource('brands', BrandController::class);
});

Route::get('language', function(Request $request){
    session(['locale' => $request->input('locale')]);
    return redirect()->route('brands.index');
});

Route::get('vi', function(){
    App::setLocale('vi');
});

Route::get('alo', function () {
    return "alo";
});

