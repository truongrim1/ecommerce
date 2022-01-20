@extends('admin.master')
@section('title', 'Add Product')
@section('content')
<style>
    .help-block{
        color:red;
        font-size: 14px;
    }
    .has-error input{
        border-color: red !important;
    }
    .form-create-app{
        margin: auto;
        padding-top: 20px;
        box-shadow: 0 0 20px rgba(0,0,0,0.6);
        border-radius: 4px;
    }
</style>
<div class="col-lg-4 form-create-app">
    <form action="{{ route('admin.products.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('name') ? 'has-error': ''}}">
            <label for="email">Tên sản phẩm:</label>
<<<<<<< HEAD
            <input type="text" name="name" class="form-control"  id="email" value="{{ old('name')}}">
=======
            <input type="text" name="name" class="form-control"  id="email" value="{{ old('name') }}">
>>>>>>> c8ecdd7 (web_product)
            @if($errors->has('name'))
            <span class="help-block">
                <strong> {{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('price') ? 'has-error': ''}}">
            <label for="pwd">Giá sản phẩm:</label>
<<<<<<< HEAD
            <input type="text" name="price" class="form-control" id="pwd" value="{{ old('price')}}">
=======
            <input type="text" name="price" class="form-control" id="pwd" value="{{ old('price') }}">
>>>>>>> c8ecdd7 (web_product)
            @if($errors->has('price'))
            <span class="help-block">
                <strong> {{ $errors->first('price') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('discount') ? 'has-error': ''}}">
            <label for="pwd">Mã giảm giá:</label>
<<<<<<< HEAD
            <input type="text" name="discount" class="form-control"  id="pwd" value="{{ old('discount')}}">
=======
            <input type="text" name="discount" class="form-control"  id="pwd" value="{{ old('discount') }}">
>>>>>>> c8ecdd7 (web_product)
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
        <button type="submit" class="btn btn-primary">Thêm mới</button>
        <a class="btn btn-primary" href="{{ route('products.index') }}">Quay lại</a>
    </form>
</div>
@endsection
