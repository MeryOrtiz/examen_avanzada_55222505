<?php
class Nota {
    private $conn;
    private $table = "notas";

    public $id;
    public $estudiante;
    public $descripcion;
    public $nota;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function guardar() {
        $sql = "INSERT INTO $this->table (estudiante, descripcion, nota) VALUES (:estudiante, :descripcion, :nota)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':estudiante', $this->estudiante);
        $stmt->bindParam(':descripcion', $this->descripcion);
        $stmt->bindParam(':nota', $this->nota);
        return $stmt->execute();
    }

    public function obtenerTodas() {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function calcularPromedio() {
        $sql = "SELECT AVG(nota) AS promedio FROM $this->table";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['promedio'];
    }
}
