@extends('admin.master');
@section('title', "List Order");
@section('content')

<style>
    .help-block{
        color: red;
    }
    .has-errors input{
        border-color: red;
    }
</style>

<div class="card-body">
    @if(!isset($error))
        <span> {{ $errors }} </span>
    @endif
    <h1>Add Product</h1> <br>
    <form class="forms-sample" action="{{ route('admin.orders.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('txtname') ? 'has-errors': '' }}">
            <label for="namebrand">Tên người nhận </label>
            <input type="text" class="form-control" id="namebrand" placeholder="Enter name" name="txtname"
                value="{{ old('txtname') }}">
            @if($errors->has('txtname'))
                <span class="help-block">
                    <strong>{{ $errors->first('txtname') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('txtnote') ? 'has-errors': '' }}">
            <label for="email"> Ghi chú</label>
            <input type="text" class="form-control" id="email" placeholder="Enter notes" name="txtnote"
                value="{{ old('txtnote') }}">
        </div>
        @if($errors->has('txtnote'))
            <span class="help-block">
                <strong>{{ $errors->first('txtnote') }}</strong>
            </span>
        @endif

        <div class="form-group">
        <label for="status"> Trạng thái </label> <br>
            <input type="radio" value="0" name="txtstatus" checked="checked"> Hoạt động
            <input type="radio" value="1" name="txtstatus"> Khóa
        </div>
        <div class="form-group">
        <label for="exampleFormControlSelect2">Khách hàng</label>
        <select class="form-control" id="exampleFormControlSelect2" name="txtcustomer">
            @foreach($customers as $customer)
            <option value="{{ $customer->id }}"> {{ $customer->fullName }} </option>
            @endforeach
        </select>
        </div>
        <button type="submit" class="btn btn-success mr-2" name="btnadd">Add</button>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-light" >Cancel</a>
    </form>
</div>

@endSection
