
@extends('admin.master')

@section('title', 'Edit categories')

@section('content')
<style>
    .help-block{
        color: red;
    }
    .has-errors{
        border-color: red;
    }
</style>
<form action="{{ route('categories.update', $categories->id) }}" method="POST" >
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('name') ? 'has-errors': '' }}">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control"  value= "{{$categories->name}}">
        @if($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection