@extends('layout.main')
@section('content')
    <div class="container">
        <form action="{{ BASE_URL }}music/create" method="POST">

            <label for="">Name Music</label>
            <input type="text" name="name" class="form-control">

            <label for="">Author</label>
            <input type="text" name="tacgia" class="form-control">

            <input type="submit" name="submit" value="Add" class="btn btn-success mt-3">
        </form>
    </div>
@endsection
