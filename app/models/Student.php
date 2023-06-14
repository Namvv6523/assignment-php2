<?php

namespace App\Models;

class Student extends BaseModel
{
    protected $table = "student";

    // xây dựng hàm lấy danh sách học sinh
    public function getStudent()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // xây dựng hàm thêm học sinh
    public function add($name, $email, $age)
    {
        $sql = "INSERT INTO $this->table (name, email, age) VALUES (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$name, $email, $age]);
    }

    // xây dựng hàm lấy giá trị
    public function detail($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    // xây dựng hàm cập nhập
    public function update($id, $name, $email, $age)
    {
        $sql = "UPDATE $this->table SET name = ?, email = ?, age = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$name, $email, $age, $id]);
    }

    // xây dựng hàm xóa học sinh
    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
