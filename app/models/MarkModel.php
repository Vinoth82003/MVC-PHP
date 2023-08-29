<?php
class MarkModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllMarks(){
        $query = "SELECT * FROM Marks";
        $result = $this->conn->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function addMark($name, $age) {
    //     $query = "INSERT INTO Marks (name, age) VALUES (:name, :age)";
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->bindParam(':name', $name);
    //     $stmt->bindParam(':age', $age);
    //     $stmt->execute();
    // }

    // public function Mark($id) {
    //     $query = "DELETE FROM students WHERE id = :id";
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->bindParam(':id', $id);
    //     $stmt->execute();
    // }
    

}
?>
