@extends('web.master')
@section('title', 'Home Amado')
@section('content')
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
        @foreach($products as $product)
            <div class="single-products-catagory clearfix">
                <a href="">
                    <img src="./assets/img/bg-img/1.jpg" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From {{ number_format($product->price,2) }}</p>
                        <h4>{{ $product->name}}</h4>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@stop()
