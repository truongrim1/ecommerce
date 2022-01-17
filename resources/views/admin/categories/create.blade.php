
@extends('admin.master')

@section('title', 'Add categories')

@section('content')
<style>
    .help-block{
        color: red;
    }
    .has-errors input{
        border-color: red;
    }
</style>
<form action="{{ route('categories.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="mb-3 {{ $errors->has('name') ? 'has-error' : ''}}" >
        <label for="exampleInputEmail1" class="form-label">Categories Name</label>
        <input type="text" class="form-control" id="name" name="name">
            @if( $errors->has('name'))
            <span class="help-block">
            <strong>{{ $errors->first('name') }} <strong>
            <span>
            @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection