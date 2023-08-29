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

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $this->model->addStudent($name, $age);
        }
        header('Location: index.php?action=index');
    }

    public function del() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['del'];
            $this->model->delStudent($id);
        }
        header('Location: index.php?action=index');
    }
}

?>
