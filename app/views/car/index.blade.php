@extends('layout.main')
@section('content')
    <div class="container">
        <a href="{{BASE_URL}}car/add-car" class="btn btn-success mb-3">Add</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name Car</th>
                <th>Color</th>
                <th>Action</th>
            </thead>
            @foreach ($car as $item)
                <tbody>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name_car }}</td>
                    <td>{{ $item->color }}</td>
                    <td>
                        <a href="{{BASE_URL}}car/detail/{{ $item->id }}" class="btn btn-primary">Edit</a>
                        <a href="{{BASE_URL}}car/delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
