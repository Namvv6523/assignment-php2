@extends('layout.main')
@section('content')
    <div class="container">
        <a href="{{BASE_URL}}product/store" class="btn btn-success mb-3">Add</a>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Action</th>
            </thead>

            @foreach ($product as $prd)
                <tbody>
                    <td>{{$prd->id}}</td>
                    <td>{{$prd->tenSP}}</td>
                    <td>{{$prd->gia}}</td>
                    <td>
                        <a href="{{BASE_URL}}product/detail/{{$prd->id}}" class="btn btn-primary">Edit</a>
                        <a href="{{BASE_URL}}product/delete/{{$prd->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
