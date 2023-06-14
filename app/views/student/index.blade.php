@extends('layout.main')
@section('content')
    <div class="container">
        <a href="{{ BASE_URL }}student/add-student" class="btn btn-success mb-3">Add</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Action</th>
            </thead>

            @foreach ($student as $std)
                <tbody>
                    <td>{{ $std->id }}</td>
                    <td>{{ $std->name }}</td>
                    <td>{{ $std->email }}</td>
                    <td>{{ $std->age }}</td>
                    <td>
                        <a href="{{ BASE_URL }}student/detail-student/{{ $std->id }}"
                            class="btn btn-primary">Edit</a>
                        <a href="{{ BASE_URL }}student/delete-student/{{ $std->id }}"
                            class="btn btn-danger">Delete</a>
                    </td>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
