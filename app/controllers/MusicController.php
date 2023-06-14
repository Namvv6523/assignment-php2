<?php

namespace App\Controllers;

use App\Models\Music;

class MusicController extends BaseController{
    public $music;

    public function __construct()
    {
        $this->music = new Music();
    }

    // xây dựng hàm lấy danh sách 
    public function index(){
        $music = $this->music->getMusic();
        return $this->render('music.index', compact('music'));
    }

    // xây dựng hàm store
    public function store(){
        return $this->render('music.add');
    }

    // xây dựng hàm create
    public function create() {
        if($_SERVER['REQUEST_METHOD']  == 'POST'){
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $author = $_POST['tacgia'];
                $music = $this->music->add($name, $author);
                header('location: ' .BASE_URL. 'music/list-music');
            }
            return $this->render('music.add', compact('music'));
        }
    }

    // xây dựng hầm lấy dữ liệu
    public function getDetail($id){
        $music = $this->music->detail($id);
        return $this->render('music.edit', compact('music'));
    }

    // xây dựng hàm update
    public function updateMusic($id){
        if($_SERVER['REQUEST_METHOD']  == 'POST'){
            if(isset($_POST['submit'])){
                $name_new = $_POST['name'];
                $author_new = $_POST['tacgia'];
                $music = $this->music->update($id, $name_new, $author_new);
                header('location: ' .BASE_URL. 'music/list-music');
            }
            return $this->render('music.edit', compact('music'));
        }
    }

    // xây dựng hàm xóa
    public function deleteMusic($id){
        $this->music->delete($id);
        header('location: '.BASE_URL. 'music/list-music');
    }
}