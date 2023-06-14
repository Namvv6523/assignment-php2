<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController extends BaseController
{

    public $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $product = $this->product->getProduct();
        return $this->render('product.index', compact('product'));
    }


    // add
    public function store()
    {
        return $this->render('product.add');
    }

    public function create()
    {
        // validate
        if (isset($_POST['submit'])) {
            $errors = [];

            if (empty($_POST['ten'])) {
                $errors[] = "bạn chưa nhập tên";
            }

            if (empty($_POST['gia'])) {
                $errors[] = "bạn chưa nhập nhập giá";
            }

            if (count($errors) > 0) {
                redirect('errors', $errors, 'product/store');
                die;
            } else {
                $create = $this->product->addProduct($_POST['ten'], $_POST['gia']);
                if ($create) {
                    redirect('success', "Thêm thành công", 'product/list-product');
                    die;
                }
            }
        }
    }

    // lấy sản phẩm để update
    public function detail($id)
    {
        $product = $this->product->getDetailProduct($id);
        return $this->render('product.edit', compact('product'));
    }

    // update sản phẩm
    public function updatePrd($id)
    {
        if (isset($_POST['submit'])) {
            $errors = [];

            if (empty($_POST['ten'])) {
                $errors[] = "bạn chưa nhập tên";
            }

            if (empty($_POST['gia'])) {
                $errors[] = "bạn chưa nhập nhập giá";
            }

            if (count($errors) > 0) {
                redirect('errors', $errors, 'product/detail');
                die;
            } else {
                $update = $this->product->updateProduct($id,$_POST['ten'], $_POST['gia']);
                if ($update) {
                    redirect('success', "Thêm thành công", 'product/list-product');
                    die;
                }
            }
        }
    }

    public function delete($id){
         $this->product->deleteProduct($id);
        header('location: '.BASE_URL. 'product/list-product');
    }
}
