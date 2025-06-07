<?php
require_once 'config/database.php';
require_once 'models/Nota.php';

class NotaController {
    private $conn;
    private $nota;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
        $this->nota = new Nota($this->conn);
    }

    public function index() {
        $notas = $this->nota->obtenerTodas()->fetchAll(PDO::FETCH_ASSOC);
        $promedio = $this->nota->calcularPromedio();
        include 'views/lista.php';
    }

    public function registrar() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->nota->estudiante = $_POST['estudiante'];
            $this->nota->descripcion = $_POST['descripcion'];
            $this->nota->nota = $_POST['nota'];
            $this->nota->guardar();
            header("Location: index.php");
        } else {
            include 'views/formulario.php';
        }
    }
}
