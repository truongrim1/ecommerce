@extends('admin.master')

@section('title', 'Danh Mục Sản Phẩm')

@section('content')

<div class="card-body">
    @if(session()->get('errors'))
        {{ session()->get('errors')->first }}
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}
        </div>
    @endif
    <h4 class="card-title">Danh Mục </h4>
    <a class="btn btn-success" style="margin-bottom:10px;" href="{{ route('admin.categories.create') }}">ADD</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                    <td><a href="{{ route('admin.categories.show', $category->id) }}">{{ $category->name }}</a></td>
                    <td>
                    <form action="{{ route('admin.categories.edit', $category->id) } ">                                     
                            <button class= "btn btn-primary" type="submit">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" >
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button class= "btn btn-danger" type="submit">Delete</button>
                        </form>

                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links(); }}
</div>
@endsection
