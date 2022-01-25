<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use function PHPUnit\Framework\isEmpty;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function productDetail($slug)
    {
        $arr = explode( '-', $slug);
        $id = isEmpty($arr) ? intval($arr[count($arr) - 1]) : 0;
        $product = Product::findOrFail($id);
        return view('web.product', array('product' => $product));
    }
}
