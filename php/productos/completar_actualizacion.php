<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ' . PATH . 'login');
    die();
}
require_once('./php/evaluar.php');

use Controller\Productos;

try {
    $datos = [
        "id_producto" => sanear($_POST['id_producto']),
        'nombre_producto' => sanear($_POST['nombre']),
        'descripcion' => sanear($_POST['descripcion']),
        'cantidad' => sanear($_POST['cantidad']),
        'precio_unitario' => sanear($_POST['precio']),
        'id_categoria' => sanear($_POST['categoria'])
    ];
    $cita = (new Productos)->modificar($datos);
} catch (\Exception $err) {
    echo $err->getMessage();
}
header('Location:' . PATH . 'productos');
