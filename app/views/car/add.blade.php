@extends('layout.main')
@section('content')

    @if (isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach ($_SESSION['errors'] as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if (isset($_SESSION['success']) && isset($_GET['msg']))
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif

    <div class="container">
        <form action="{{ BASE_URL }}car/post-car" method="POST">

            <label for="">Name Car</label>
            <input type="text" name="ten" class="form-control">


            <label for="">Color</label>
            <input type="text" name="color" class="form-control">


            <input type="submit" name="submit" value="Add" class="btn btn-success mt-3">
        </form>
    </div>
@endsection