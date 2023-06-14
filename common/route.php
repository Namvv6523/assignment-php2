<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function () {
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])) {
        header('location: ' . BASE_URL . 'login');
        die;
    }
});

// --------------------Product------------------
$router->get('product/list-product', [App\Controllers\ProductController::class, 'index']); // lấy ra danh sách sản phẩm
$router->get('product/store', [App\Controllers\ProductController::class, 'store']); // tạo form add
$router->post('product/create', [App\Controllers\ProductController::class, 'create']); // đẩy dữ liệu lên db
$router->get('product/detail/{id}', [App\Controllers\ProductController::class, 'detail']); // tạo form add
$router->post('product/update/{id}', [App\Controllers\ProductController::class, 'updatePrd']); // lưu add
$router->get('product/delete/{id}', [App\Controllers\ProductController::class, 'delete']); // xóa

// --------------------Student------------------
$router->get('student/list-student', [App\Controllers\StudentController::class, 'index']); // lấy danh sách sản phẩm
$router->get('student/add-student', [App\Controllers\StudentController::class, 'addStudent']); // tạo form add
$router->post('student/post-student', [App\Controllers\StudentController::class, 'postStudent']); // lưu form add
$router->get('student/detail-student/{id}', [App\Controllers\StudentController::class, 'detailStudent']); // tạo form add
$router->post('student/update-student/{id}', [App\Controllers\StudentController::class, 'updateStudent']); // lưu form add
$router->get('student/delete-student/{id}', [App\Controllers\StudentController::class, 'deleteStudent']); // xóa

// -------------------Car--------------------------
$router->get('car/list-car', [App\Controllers\CarController::class, 'index']); // danh sách car
$router->get('car/add-car', [App\Controllers\CarController::class, 'addCar']); // tạo form add
$router->post('car/post-car', [App\Controllers\CarController::class, 'postCar']); // lưu thêm
$router->get('car/detail/{id}', [App\Controllers\CarController::class, 'getDetail']); // tạo form edit
$router->post('car/update-car/{id}', [App\Controllers\CarController::class, 'updateCar']); // lưu cập nhập
$router->get('car/delete/{id}', [App\Controllers\CarController::class, 'deleteCar']); // xóa 

// --------------------Music-----------------------
$router->get('music/list-music', [App\Controllers\MusicController::class, 'index']); // danh sách music
$router->get('music/add-music', [App\Controllers\MusicController::class, 'store']); // tạo form add
$router->post('music/create', [App\Controllers\MusicController::class, 'create']); // lưu form add
$router->get('music/detail/{id}', [App\Controllers\MusicController::class, 'getDetail']); // tạo form edit
$router->post('music/update/{id}', [App\Controllers\MusicController::class, 'updateMusic']); // lưu form edit
$router->get('music/delete/{id}', [App\Controllers\MusicController::class, 'deleteMusic']); // xóa

// ---------------------Tài Khoản--------------------
$router->get('taikhoan/list-taikhoan', [App\Controllers\TaiKhoanController::class, 'index']); // danh sách tài khoản
$router->get('taikhoan/store', [App\Controllers\TaiKhoanController::class, 'store']); // tạo form
$router->post('taikhoan/create', [App\Controllers\TaiKhoanController::class, 'create']); // lưu form
$router->get('taikhoan/update/{id}', [App\Controllers\TaiKhoanController::class, 'update']); // tạo form update
$router->post('taikhoan/saveUpdate/{id}', [App\Controllers\TaiKhoanController::class, 'saveUpdate']); // lưu update
$router->get('taikhoan/remove/{id}', [App\Controllers\TaiKhoanController::class, 'delete']); // xóa

// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function () {
    return "trang chủ";
});

$router->get('test', [App\Controllers\ProductController::class, 'index']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
