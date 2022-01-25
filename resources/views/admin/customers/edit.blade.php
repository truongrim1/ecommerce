@extends ('admin.master')
@section('title','Edit customer')
@section('content')

<div class="col-lg-4 form-create-app">
<form action="{{ route('admin.customers.update', $customer->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
  <div class="mb-3" >
    <label for="exampleInputEmail1" class="form-label">Fullname</label>
    <input type="text" class="form-control" id="name" name="fullName" value="{{old('fullName', $customer->fullName)}}">

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{old('email', $customer->email)}}">

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pass</label>
    <input type="text" class="form-control" id="pwd" name="pass" value="{{old('pass', $customer->pass)}}">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control" id="adr" name="address" value="{{old('address', $customer->address)}}">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone', $customer->phone)}}">

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
   <a  class="btn btn-primary" href= "{{ route('admin.customers.index') }}"> Return Home</a>
</form>
</div>
@endsection
