<?php
namespace App\Models;

class Car extends BaseModel{
    protected $table = "car";

    // xây dựng hàm list danh sách ô tô
    public function getCar(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // xây dựng hàm thêm ô tô
    public function add($name_car, $color){
        $sql = "INSERT INTO $this->table (name_car, color) VALUES (?,?)";
        $this->setQuery($sql);
        return $this->execute([$name_car, $color]);
    }

    // xây dựng hàm lấy dữ liệu ô tô
    public function getDatailCar($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    // xây dựng hàm cập nhập
    public function update($id, $name_car, $color){
        $sql = "UPDATE $this->table SET name_car = ?, color = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$name_car, $color, $id]);
    }

    // xây dựng hàm xóa
    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}