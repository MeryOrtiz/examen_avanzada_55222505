<?php
require_once 'controllers/NotaController.php';

$action = $_GET['action'] ?? 'index';
$controller = new NotaController();

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Acción no válida";
}
