@extends('admin.master')
@section('title', 'Show Products')
@section('content')
<style>
    p{
        font-size: 20px;
    }
    .form-create-app{
        margin: auto;
        padding-top: 20px;
        box-shadow: 0 0 20px rgba(0,0,0,0.6);
        border-radius: 4px;
    }
    .product-info{
        font-size: 26px;
        font-weight: bold;
    }
</style>
<div class="col-lg-6 form-create-app">
    <p>Tên sản phẩm: <span class="product-info">{{ $product->name }}</span></p>
    <p>Giá sản phẩm: <span class="product-info">{{ number_format($product->price, 2) }}Đ</span></p>
    <p>Số lượt xem: <span class="product-info">{{ $product->view }}</span></p>
    <p>Mã giảm giá: <span class="product-info">{{ $product->discount }}%</span></p>
    <p>Loại sản phẩm: <span class="product-info">{{ $product->category->name }}</span></p>
    <p>Nhãn hiệu: <span class="product-info">{{ $product->brand->name }}</span></p>
    <p>Ngày tạo: <span class="product-info">{{$product->created_at}}</span></p>
    <a class="btn btn-primary" style="width:100px; margin-bottom:10px" href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
    <a class="btn btn-primary" style="width:100px; margin-bottom:10px" href="{{ route('admin.products.index') }}">Quay lại</a>
</div>
@endsection
