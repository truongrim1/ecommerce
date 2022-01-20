@extends ('admin.master')
@section('title','List of Customers')
@section('content')
<div class="card-body">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif

    @if(session()->has('succeskh'))
        <div class="alert alert-success">
        {{ session()->get('succeskh') }}
        </div>
    @endif

<h4 class="card-title">LIST OF CUSTOMERS</h4>
    <a class="btn btn-primary" style = "margin-bottom:10px;" href="{{ route('admin.customers.create') }}">Add</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Số thứ tự</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Mật khẩu</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>

                <th>#</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <th scope="row">{{$customer->id}}</th>
                <td><a href="{{ route('customers.show', $customer->id) }}"> {{ $customer->fullName }} </a></td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->pass }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->phone }}</td>

                <td><a class="btn btn-primary" href="{{ route('customers.edit', $customer->id) }}"> Edit </a></td>

                <td>
                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" onsubmit="return confirm('Bạn có muốn xóa sản phẩm này không?')">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button class="btn btn-primary" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop()
