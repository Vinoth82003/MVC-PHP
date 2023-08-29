<?php
class StudentModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllStudents() {
        $query = "SELECT * FROM students";
        $result = $this->conn->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
