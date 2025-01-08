<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location: /gestion/gestionv2/login');
  die();
}

use Controller\Productos;
require_once('./php/evaluar.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $error = '';
  try{
    $datos = [
      'nombre_producto' => sanear($_POST['nombre']),
      'descripcion' => sanear($_POST['descripcion']),
      'cantidad' => sanear($_POST['cantidad']),
      'precio_unitario' => sanear($_POST['precio']),
      'id_categoria' => sanear($_POST['categoria'])
    ];
    $producto = (new Productos)->agregar($datos);
  }catch(Exception $e){
    $error = $e->getMessage();
  }
  if(empty($error)){
    header("Location:". CompleteURL);
  }
  
}
$categorias = (new Productos)->getCategorias();

require_once 'views/productos/registrar_producto.view.php';
?>