<?php
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CustomerController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrderDetailController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Requests\BrandRequest;
use App\Http\Controllers\Admin\CategoryController;

Route::get('admin', function () {
    return view('admin.master');
});

Route::prefix('admin')->group(function(){
    Route::resource('products', ProductController::class);
    Route::resource('customers', CustomerController::class); 
    Route::resource('orders', OrderController::class);
    Route::resource('orderdetails', OrderDetailController::class);
    Route::resource('categories', CategoryController::class); 
    Route::resource('brands', BrandController::class);
});

Route::get('language', function(Request $request){
   session( ['locale' => $request->input('locale') ]);
   return redirect()->route('customers.index');
    
});

Route::get('language', function(Request $request){
    session(['locale' => $request->input('locale')]);
    return redirect()->route('brands.index');
});

Route::get('vi', function(){
    App::setLocale('vi');
});
  
Route::get('language', function(Request $request){

    session( ['locale' => $request->input('locale') ]);
    return redirect()->route('categories.index');
});





Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
