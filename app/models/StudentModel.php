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

    public function addStudent($name, $age) {
        $query = "INSERT INTO students (name, age) VALUES (:name, :age)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->execute();
    }

    public function delStudent($id) {
        $query = "DELETE FROM students WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    

}
?>
