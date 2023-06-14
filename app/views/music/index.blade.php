@extends('layout.main')
@section('content')
    <div class="container">
        <a href="{{ BASE_URL }}music/add-music" class="btn btn-success mb-3">Add</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Music name</th>
                <th>Author</th>
                <th>Action</th>
            </thead>

            @foreach ($music as $item)
                <tbody>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name_music }}</td>
                    <td>{{ $item->author }}</td>
                    <td>
                        <a href="{{BASE_URL}}music/detail/{{$item->id}}" class="btn btn-primary">Edit</a>
                        <a href="{{BASE_URL}}music/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
