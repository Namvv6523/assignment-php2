<?php

namespace App\Models;

class TaiKhoan extends BaseModel
{
    protected $table = "taikhoan";

    // lấy danh sách tài khoản
    public function getTaiKhoan()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // xây dựng hàm thêm
    public function add($ten, $matkhau)
    {
        $sql = "INSERT INTO $this->table (ten, matkhau) value( ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$ten, $matkhau]);
    }

    // xây dựng hàm updade
    public function update($id)
    {
        $sql = "UPDATE $this->table SET ten = name, matkhau = pass WHERE id = $id";
        $this->setQuery($sql);
        return $this->execute($id);
    }

    // xây dựng hàm xóa
    public function remove($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
