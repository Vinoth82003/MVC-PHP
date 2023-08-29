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
    default:
        echo "404 Not Found";
        break;
}
?>
