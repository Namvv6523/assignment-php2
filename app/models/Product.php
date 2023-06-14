<?php

namespace App\Models;

class Product extends BaseModel
{
    protected $table = "product";

    // lấy toàn bộ giá trị 
    public function getProduct()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // Xây dựng hàm thêm sản phẩm
    public function addProduct($tenSP, $gia)
    {
        $sql = "INSERT INTO $this->table (tenSP, gia) VALUES (?,?)";
        $this->setQuery($sql);
        return $this->execute([$tenSP, $gia]);
    }

    // xây dựng hàm lấy chi tiết sản phẩm
    public function getDetailProduct($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    // xây dựng hàm cập nhập sản phẩm
    public function updateProduct($id, $tenSP, $gia)
    {
        $sql = "UPDATE $this->table SET tenSP = ?, gia = ? WHERE id = ? ";
        $this->setQuery($sql);
        return $this->execute([$tenSP, $gia, $id]);
    }

    // xây dựng hàm xóa sản phẩm
    public function deleteProduct($id){
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
