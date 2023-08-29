<?php
require_once(__DIR__ . '/../models/StudentModel.php');

class StudentController {
    private $model;

    public function __construct($conn) {
        $this->model = new StudentModel($conn);
    }

    public function index() {
        $students = $this->model->getAllStudents();
        include(__DIR__ . '/../views/student_list.php');
    }
}
?>
