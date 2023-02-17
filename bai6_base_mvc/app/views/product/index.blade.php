@extends('layout.main')
@section('content')
<table border="1">
    <tr>
        <td>ID</td>
        <td>Tên sp</td>
        <td>Giá</td>
        <td>Thao tác</td>
    </tr>
    @foreach($products as $pr)
        <tr>
            <td>{{ $pr->id }}</td>
            <td>{{ $pr->ten_sp }}</td>
            <td>{{ $pr->gia }}</td>
            <td><a href="{{ route('edit-product/'.$pr->id) }}">Sửa</a><a>Xóa</a></td>
        </tr>
    @endforeach
</table>
@endsection