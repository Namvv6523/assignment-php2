@extends('layout.main')
@section('content')
    <div class="container">
        <form action="{{ BASE_URL }}music/update/{{ $music->id }}" method="POST">

            <label for="">Name Music</label>
            <input type="text" name="name" class="form-control" value="{{ $music->name_music }}">

            <label for="">Author</label>
            <input type="text" name="tacgia" class="form-control" value="{{ $music->author }}">

            <input type="submit" name="submit" value="Update" class="btn btn-primary mt-3">
        </form>
    </div>
@endsection
