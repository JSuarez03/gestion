<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: '.PATH.'login');
    exit;
}

use Controller\Productos;
try{
    $producto = (new Productos)->bajoStock();
}catch (\Exception $err) {
    echo "error:" . $err->getMessage();
    die();
}


require_once 'views/productos/low_productos.view.php';

?>