@extends('web.master')
@section('title', 'Home Amado')
@section('content')
<style>
    .navigation-page{
        width: 600px;
        margin: 0 0 0 500px;
    }
</style>
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
        @foreach($products as $product)
            <div class="single-products-catagory clearfix">
                <a href="{{ route('product.detail', $product->slug) }}">
                    <img src="./assets/img/bg-img/1.jpg" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From {{ number_format($product->price,2) }}Đ</p>
                        <h4>{{ $product->name}}</h4>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="navigation-page">
        {{ $products->links() }}
    </div>
</div>

@stop()
