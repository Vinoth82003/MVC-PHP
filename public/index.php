<?php
require_once('../config/database.php'); // Include the database configuration

$config = include('../config/database.php'); // Assign the configuration array to $config variable

$conn = new PDO(
    "mysql:host={$config['host']};dbname={$config['dbname']}",
    $config['dbuser'],
    $config['dbpass']
);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
switch ($action) {
    case 'index':
        require_once('../app/controllers/StudentController.php');
        $controller = new StudentController($conn);
        $controller->index();
        break;

    case 'add':
        require_once('../app/controllers/StudentController.php');
        $controller = new StudentController($conn);
        $controller->add();
        break;
    
    case 'del':
        require_once('../app/controllers/StudentController.php');
        $controller = new StudentController($conn);
        $controller->del();
        break;

    case 'mark':
        require_once('../app/controllers/MarkController.php');
        $controller = new MarkController($conn);
        $controller->mark();
        break;

    case 'staff':
        require_once('../app/controllers/staffController.php');
        $controller = new staffController($conn);
        $controller->staff();
        break;

    case 'addstaff':
        require_once('../app/controllers/staffController.php');
        $controller = new staffController($conn);
        $controller->addstaff();
        break;

    case 'delstaff':
        require_once('../app/controllers/staffController.php');
        $controller = new staffController($conn);
        $controller->delstaff();
        break;

    default:
        echo "404 Not Found";
        break;
}
?>
