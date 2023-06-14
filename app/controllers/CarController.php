<?php

namespace App\Controllers;

use App\Models\Car;

class CarController extends BaseController
{
    public $car;

    public function __construct()
    {
        $this->car = new Car();
    }


    // xây dựng hàm lấy danh sánh ô tô
    public function index()
    {
        $car = $this->car->getCar();
        return $this->render('car.index', compact('car'));
    }

    // xây dựng hàm form ô tô
    public function addCar()
    {
        return $this->render('car.add');
    }

    // xây dựng hàm đẩy dữ liệu lên data
    public function postCar()
    {

        if (isset($_POST['submit'])) {
            $errors = [];

            if (empty($_POST['ten'])) {
                $errors[] = "Bạn chưa nhập tên";
            }

            if (empty($_POST['color'])) {
                $errors[] = "Bạn chưa nhập color";
            }

            if (count($errors) > 0) {
                redirect('errors', $errors, 'car/add-car');
                die;
            } else {
                $result = $this->car->add($_POST['ten'], $_POST['color']);

                if ($result) {
                    redirect('success', "Thêm thành công", 'car/list-car');
                    die;
                }
            }
        }
    }

    // xây dựng hàm lấy dữ liệu sản phẩm
    public function getDetail($id)
    {
        $car = $this->car->getDatailCar($id);
        return $this->render('car.edit', compact('car'));
    }

    // xây dựng hàm cập nhập
    public function updateCar($id)
    {
        if (isset($_POST['submit'])) {
            $errors = [];

            if (empty($_POST['ten'])) {
                $errors[] = "Bạn chưa nhập tên";
            }

            if (empty($_POST['color'])) {
                $errors[] = "Bạn chưa nhập color";
            }

            if (count($errors) > 0) {
                redirect('errors', $errors, 'car/detail');
                die;
            } else {
                $result = $this->car->update($id, $_POST['ten'], $_POST['color']);

                if ($result) {
                    redirect('success', "Thêm thành công", 'car/list-car');
                    die;
                }
            }
        }
    }

    // xây dựng hàm xóa 
    public function deleteCar($id)
    {
        $this->car->delete($id);
        header('location:' . BASE_URL . 'car/list-car');
    }
}
