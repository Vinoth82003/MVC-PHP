<?php
class staffModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllstaffs() {
        $query = "SELECT * FROM staffs";
        $result = $this->conn->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addstaff($name, $age) {
        $query = "INSERT INTO staffs (name, age) VALUES (:name, :age)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->execute();
    }

    public function delstaff($id) {
        $query = "DELETE FROM staffs WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    

}
?>
