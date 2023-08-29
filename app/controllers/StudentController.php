<?php
require_once('../models/StudentModel.php');

class StudentController {
    private $model;

    public function __construct($conn) {
        $this->model = new StudentModel($conn);
    }

    public function index() {
        $students = $this->model->getAllStudents();
        include('../views/student_list.php');
    }
}
?>
