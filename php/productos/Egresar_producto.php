<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ' . PATH . 'login');
    die();
}

use Controller\Productos;
use Controller\Cliente;
require_once 'php/evaluar.php';

if($url == '/productos/list'){
    $id = sanear($_POST['id_producto']);
    $productos = (new Productos)->listaUnica($id);
    $cantidad  = sanear($_POST['cantidad']);
    $datos = array(
        'id_cliente' => sanear($_POST['cliente']),
        'id_producto' => $id ,
        'hora_movimiento' => date('H:i:s'),
        'fecha_movimiento' => date('Y-m-d'),
        'cantidad' => $cantidad,
        'precio' => $productos['precio_unitario'] * $cantidad,
    );
    $nuevaCantidad = $productos['cantidad'] - $cantidad;
    $res = (new Productos)->egresar($datos,array('id_producto' => $id,'cantidad'=>$nuevaCantidad));
    header('Location: ' . PATH . 'productos');
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($url);
    $id = sanear($_POST['id_producto']);
    $productos = (new Productos)->listaUnica($id);
    $clientes = (new Cliente)->lista();
}


require_once 'views/productos/Egresar_producto.view.php';

?>
