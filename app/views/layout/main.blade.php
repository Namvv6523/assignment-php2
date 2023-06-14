<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layout.style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
<div class="container">
    <header>
        <div class="header-main">
            <ul class="menu">
                <li><a href="{{BASE_URL}}product/list-product">Quản lý Product</a></li>
                <li><a href="{{BASE_URL}}student/list-student">Quản lý Student</a></li>
                <li><a href="{{BASE_URL}}car/list-car">Quản lý Car</a></li>
                <li><a href="{{BASE_URL}}music/list-music">Quản lý Music</a></li>
                <li><a href="{{BASE_URL}}taikhoan/list-taikhoan">Quản lý Tài khoản</a></li>
            </ul>
        </div>
    </header>
    <section class="content">
       @yield('content')
    </section>
    <footer>
        <span>FPT POLYTECNIC</span>
    </footer>
</div>
</body>
</html>

