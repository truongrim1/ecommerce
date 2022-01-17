<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

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
});
//
Route::get('language', function(Request $request){

   session( ['locale' => $request->input('locale') ]);
   return redirect()->route('customers.index');
});

Route::get('vi', function(){
    App::setLocale('vi');
});

