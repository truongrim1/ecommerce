@extends('admin.master');
@section('title', "List orderdetail");
@section('content')

<div class="card-body">
  <h4 class="card-title">DANH SÁCH chi tiết ĐƠN HÀNG</h4>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mã ct đơn hàng</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
    @foreach($orderdetails as $orderdetail)
         <tr>
          <td scope="row"> {{ $orderdetail->id }} </td>
          <td scope="row"> {{ $orderdetail->product->name }} </td>
          <td scope="row"> {{ $orderdetail->quantity }} </td>
          <td scope="row"> {{ $orderdetail->id }} </td>
          <td>
            <form action="{{ route( 'orderdetails.destroy', $orderdetail->id ) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit"> Xóa</button>
            </form>
          </td>
        </tr> 
        @endforeach
    </tbody>
  </table><br>
  <a href="{{ route('orders.index') }}" class="btn btn-primary" >Cancel</a>
</div>

@endsection