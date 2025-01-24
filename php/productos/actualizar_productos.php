<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: '.PATH.'login');
    exit;
}

use Controller\Productos;
require_once 'php/evaluar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $datos = sanear($_POST['id_producto']);
    $producto = (new Productos)->listaUnica($datos);
    $categorias = (new Productos)->getCategorias();
}else{
    header('Location: '.PATH.'productos');
    exit;
}


require_once 'views/productos/actualizar_productos.view.php';

?>