<style>
    a:link, a:visited {
        background-color: white;
        color: black;
        border: 2px solid #1E90FF;
        padding: 5px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    a:hover, a:active {
        background-color: #1E90FF;
        color: white;
    }
</style>

<a href="{{ route('brands.index') }}">Quay lại</a>
<h1 class="card-title">Brands Details</h1>  
<p>Name: {{ $brand->name }}</p>
<p>Desc: {{ $brand->desc }}</p>              
<a href="{{ route('brands.edit', $brand->id) }}">Edit</a></td><br><br>
<form action="{{ route('brands.destroy', $brand->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc muốn xoá sản phẩm này')">
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <button type="submit" style="color:white; background-color: #1E90FF; padding: 5px 15px;">Delete</button>
</form>
               


