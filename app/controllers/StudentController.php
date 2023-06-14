<?php

namespace App\Controllers;

use App\Models\Student;

class StudentController extends BaseController{

    public $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    // hàm lấy danh sách học sinh
    public function index(){
        $student = $this->student->getStudent();
        return $this->render('student.index', compact('student'));
    }

    // tạo hàm form add
    public function addStudent()
    {
        return $this->render('student.add');
    }

    // xây dựng hàm lưu add
    public function postStudent(){

        if(isset($_POST['submit'])){
            $errors = [];

            if(empty($_POST['name'])){
                $errors[] = "Bạn chưa nhập tên";
            }

            if(empty($_POST['email'])){
                $errors[] = "Bạn chưa nhập email";
            }

            if(empty($_POST['age'])){
                $errors[] = "Bạn chưa nhập age";
            }

            if(count($errors) > 0){
                redirect('errors', $errors, 'student/add-student');
                die;
            }else{
                $result = $this->student->add($_POST['name'], $_POST['email'], $_POST['age']);

                if($result){
                    redirect('success', "Thêm thành công", 'student/list-student');
                    die;
                }
            }
        }
    }

    // xây dựng hàm detail
    public function detailStudent($id){
        $student = $this->student->detail($id);
        return $this->render('student.edit', compact('student'));
    }

    // xây dựng hàm cập nhập
    public function updateStudent($id){

        if(isset($_POST['submit'])){
            $errors = [];

            if(empty($_POST['name'])){
                $errors[] = "Bạn chưa nhập tên";
            }

            if(empty($_POST['email'])){
                $errors[] = "Bạn chưa nhập email";
            }

            if(empty($_POST['age'])){
                $errors[] = "Bạn chưa nhập age";
            }

            if(count($errors) > 0){
                redirect('errors', $errors, 'student/update-student');
                die;
            }else{
                $result = $this->student->update($id, $_POST['name'], $_POST['email'], $_POST['age']);

                if($result){
                    redirect('success', "Thêm thành công", 'student/list-student');
                    die;
                }
            }
        }
    }

    // xây dựng hàm xóa
    public function deleteStudent($id){
        $this->student->delete($id);
        header('location: ' .BASE_URL. 'student/list-student');
    }


}