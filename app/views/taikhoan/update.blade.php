@extends('layout.main')
@section('content')

<div class="container mt-3">
    <form action="{{BASE_URL}}taikhoan/saveUpdate" method="post">

        <label for="">Name</label>
        <input type="text" name="name" class="form-control" >

        <label for="">Passwrod</label>
        <input type="text" name="pass" class="form-control" >

        <input type="submit" name="submit" value="Update" class="btn btn-success mt-3">
    </form>
</div>

@endsection