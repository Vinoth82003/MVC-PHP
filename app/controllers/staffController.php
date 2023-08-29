<?php
require_once(__DIR__ . '/../models/staffModel.php');

class staffController {
    private $model;

    public function __construct($conn) {
        $this->model = new staffModel($conn);
    }

    public function staff() {
        $staffs = $this->model->getAllstaffs();
        include(__DIR__ . '/../views/staff_list.php');
    }

    public function addstaff() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $this->model->addstaff($name, $age);
        }
        header('Location: index.php?action=staff');
    }

    public function delstaff() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['del'];
            $this->model->delstaff($id);
        }
        header('Location: index.php?action=staff');
    }
}

?>
