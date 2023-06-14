<?php

namespace App\Controllers;

use App\Models\TaiKhoan;

class TaiKhoanController extends BaseController
{
    public $taikhoan;

    public function __construct()
    {
        $this->taikhoan = new TaiKhoan();
    }

    public function index()
    {
        $taikhoan = $this->taikhoan->getTaiKhoan();
        return $this->render('taikhoan.index', compact('taikhoan'));
    }

    public function store()
    {
        return $this->render('taikhoan.add');
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['submit'])) {
                $ten = $_POST['name'];
                $matkhau = $_POST['pass'];
                $create = $this->taikhoan->add($ten, $matkhau);
                header('location:list-taikhoan');
            }
            return $this->render('taikhoan.add', compact('create'));
        }
    }

    public function update()
    {
        return $this->render('taikhoan.update');
    }

    public function saveUpdate($id)
    {
        if (isset($_POST['submit'])) {
            $ten_new = $_POST['name'];
            $matkhau_new = $_POST['pass'];
            $updateTk = $this->taikhoan->update($ten_new, $matkhau_new);
            header('location:list-taikhoan');
        }
        return $this->render('taikhoan.update', compact('updateTk'));
    }

    public function delete($id){
        $this->taikhoan->remove($id);
        header('location: ' .BASE_URL. 'taikhoan/list-taikhoan');
    }

}
