@extends('admin.master')

@section('title', 'Edit brands')

@section('content')
<style>
    .help-block{
        color: red;
    }
    .has-errors{
        border-color: red;
    }
</style>
<form action="{{ route('brands.update', $brand->id) }}" method="POST" >
    @method('PATCH')
    @csrf
    <div class="form-group {{ $errors->has('name') ? 'has-errors': '' }}">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placehoder="Enter name" id="name" value="{{ $brand->name }}">
        @if($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('desc') ? 'has-errors': '' }}">
        <label for="desc">Desc</label>
        <input type="text" name="desc" class="form-control" placehoder="Enter desc" id="desc" value="{{ $brand->desc }}">           
        @if($errors->has('desc'))
            <span class="help-block">
                <strong>{{ $errors->first('desc') }}</strong>
            </span>
        @endif 
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
