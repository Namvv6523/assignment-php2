@extends('layout.main')
@section('content')

<div class="container">
    <a href="{{ BASE_URL }}taikhoan/store" class="btn btn-success">Add</a>
    <table class="table">
        <thead>
            <th>id</th>
            <th>Tên đăng nhập</th>
            <th>Mật khẩu</th>
            <th>Action</th>
        </thead>

        @foreach ($taikhoan as $item)
        <tbody>
            <td>{{$item->id}}</td>
            <td>{{$item->ten}}</td>
            <td>{{$item->matkhau}}</td>
            <td>
                <a href="{{ BASE_URL }}taikhoan/update/{{ $item->id }}" class="btn btn-primary">Edit</a>
                <a href="{{ BASE_URL }}taikhoan/remove/{{ $item->id }}" class="btn btn-danger">Delete</a>
            </td>
        </tbody>
        @endforeach
    </table>
</div>

@endsection
