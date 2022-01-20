@extends('admin.master')
@section('title', 'Edit Product')
@section('content')
<style>
    .help-block{
        color:red;
        font-size: 14px;
    }
    .has-error{
        border-color: red;
    }
    .form-create-app{
        margin: auto;
        padding-top: 20px;
        box-shadow: 0 0 20px rgba(0,0,0,0.6);
        border-radius: 4px;
    }
</style>
<div class="col-lg-4 form-create-app">
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <div class="form-group {{ $errors->has('name') ? 'has-error': ''}}">
        <label for="email">Tên sản phẩm:</label>
        <input type="text" name="name" class="form-control"  id="email" value="{{ $product->name }}">
        @if($errors->has('name'))
        <span class="help-block">
            <strong> {{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('price') ? 'has-error': ''}}">
        <label for="pwd">Giá sản phẩm:</label>
        <input type="text" name="price" class="form-control" id="pwd" value="{{ $product->price }}">
        @if($errors->has('price'))
        <span class="help-block">
            <strong> {{ $errors->first('price') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
        <label for="pwd">Mã giảm giá:</label>
        <input type="text" name="discount" class="form-control"  id="pwd" value="{{ $product->discount }}">
        @if($errors->has('discount'))
        <span class="help-block">
            <strong> {{ $errors->first('discount') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
        <label>Nhãn hiệu sản phẩm:</label>
        <select name="brand_id" class="form-control">
            @foreach($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Loại sản phẩm:</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    <a class="btn btn-primary" href="{{ route('products.index') }}">Quay lại</a>
    </form>
</div>
@endsection
