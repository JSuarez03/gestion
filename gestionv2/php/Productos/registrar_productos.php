<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location: /gestion/gestionv2/login');
  die();
}
require_once 'views/productos/registrar_producto.view.php';
?>