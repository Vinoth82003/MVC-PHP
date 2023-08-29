<?php
require_once(__DIR__ . '/../models/MarkModel.php');

class MarkController {
    private $model;

    public function __construct($conn) {
        $this->model = new MarkModel($conn);
    }

    public function mark() {
        $marks = $this->model->getAllMarks();
        include(__DIR__ . '/../views/mark_list.php');
    }

    // public function add() {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $name = $_POST['name'];
    //         $age = $_POST['age'];
    //         $this->model->addMark($name, $age);
    //     }
    //     header('Location: index.php?action=index');
    // }

    // public function mark() {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $id = $_POST['del'];
    //         $this->model->Mark($id);
    //     }
    //     header('Location: index.php?action=index');
    // }
}

?>
