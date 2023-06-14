<?php
namespace App\Models;

class Music extends BaseModel{
    protected $table = "music";


    // xây dựng hàm lấy danh sách
    public function getMusic(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // xây dựng hàm add
    public function add($name_music, $author){
        $sql = "INSERT INTO $this->table (name_music, author) VALUES (?, ?)";
        $this->setQuery($sql);
        return $this->loadAllRows([$name_music, $author]);
    }

    // xây dựng hàm lấy dữu liệu
    public function detail($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]); 
    }

    // xây dựng hàm thêm
    public function update($id, $name_music, $author){
        $sql = "UPDATE $this->table SET name_music = ?, author = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows([$name_music, $author, $id]);
    }

    // xây dựng hàm xóa
    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows([$id]);
    }

}