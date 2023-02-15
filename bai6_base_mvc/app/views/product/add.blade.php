@extends('layout.main')
@section('content')
    @isset($_SESSION['errors'])
        <ul>
            @foreach($_SESSION['errors'] as $error)
            <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    @endisset
    @isset($_SESSION['success'])
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endisset
<form action="{{ BASE_URL.'add-product-post' }}" method="POST">
    Tên sản phẩm <input type="text" name="ten_sp"></br>
    Đơn giá <input type="text" name="don_gia"></br>
    <input type="submit" name="them" value="Thêm">
</form>
@endsection