@extends('admin.master')
@section('title', 'Show Categories')
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
    .category-info{
        font-size: 26px;
        font-weight: bold;
    }
</style>
<div class="col-lg-6 form-create-app">
    <p>Tên sản phẩm: <span class="category-info">{{ $categories->name }}</span></p>
    <p>Ngày tạo: <span class="category-info">{{$categories->created_at}}</span></p>
    <a class="btn btn-primary" style="width:100px; margin-bottom:10px" href="{{ route('admin.categories.edit', $categories->id) }}">Edit</a>
    <a class="btn btn-primary" style="width:100px; margin-bottom:10px" href="{{ route('admin.categories.index') }}">Quay lại</a>
</div>
@stop()
