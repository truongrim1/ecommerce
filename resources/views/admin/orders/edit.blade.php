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

    <h1>update Product</h1> <br>
    <form class="forms-sample" action="{{ route('admin.orders.update', $order->id) }}" method="post">
    @method('PATCH')
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('txtname') ? 'has-errors': '' }}">
            <label for="namebrand">Tên người nhận </label>
            <input type="text" class="form-control" id="namebrand" placeholder="Enter name" name="txtname"
            @if(isset($errors))
                value="{{ $order->name }}"
            @endif
            @if(!isset($errors))
                value="{{ old('txtname') }}"
            @endif
            >
            @if($errors->has('txtname'))
                <span class="help-block">
                    <strong>{{ $errors->first('txtname') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('txtnote') ? 'has-errors': '' }}">
            <label for="email"> Ghi chú</label>
            <input type="text" class="form-control" id="email" placeholder="Enter notes" name="txtnote"
            @if(isset($errors))
                value="{{ $order->desc }}"
            @endif
            @if(!isset($errors))
                value="{{ old('txtnote') }}"
            @endif
            >
            @if($errors->has('txtnote'))
                <span class="help-block">
                    <strong>{{ $errors->first('txtnote') }}</strong>
                </span>
            @endif
        </div>
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
        <button type="submit" class="btn btn-success mr-2" name="btnupdate">update</button>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-light" >Cancel</a>
    </form>
</div>

@endSection
