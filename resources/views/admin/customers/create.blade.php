@extends ('admin.master')
@section('title','Add Customer')
@section('content')

<style>
  .help-block{
    color:red;
    font-size: 12px ;
    font-weight:  normal;
    line-height:  inherit;
  }
   .has-error input{ 
    border-color: red;
  }
  
</style>
<div class="col-lg-4 form-create-app">
<form action="{{ route('customers.store') }}" method="POST">
    {{ csrf_field() }}
  <div class="mb-3 {{ $errors->has('fullName') ? 'has-error' : ''}}" >
    <label for="exampleInputEmail1" class="form-label">Fullname</label>
    <input type="text" class="form-control" id="name" name="fullName">
    @if( $errors->has('fullName'))
    <span class="help-block">
      <strong>{{ $errors->first('fullName') }} <strong>
    <span>
    @endif
  </div>

  <div class="mb-3 {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
    @if( $errors->has('email'))
    <span class="help-block">
      <strong>{{ $errors->first('email') }} <strong>
    <span>
    @endif
  </div>

  <div class="mb-3 {{ $errors->has('pass') ? 'has-error' : ''}}">
    <label for="exampleInputEmail1" class="form-label">Pass</label>
    <input type="text" class="form-control" id="pwd" name="pass">
    @if( $errors->has('pass'))
    <span class="help-block">
      <strong>{{ $errors->first('pass') }} <strong>
    <span>
    @endif
  </div>
  <div class="mb-3 {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="password" class="form-control" id="adr" name="address">
    @if( $errors->has('address'))
    <span class="help-block">
      <strong>{{ $errors->first('address') }} <strong>
    <span>
    @endif
  </div>
  <div class="mb-3 {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="password" class="form-control" id="phone" name="phone">
    @if( $errors->has('phone'))
    <span class="help-block">
      <strong>{{ $errors->first('phone') }} <strong>
    <span>
    @endif
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
   <a  class="btn btn-primary" href= "{{ route('customers.index') }}"> Return Home</a>
</form>
</div>

@endsection