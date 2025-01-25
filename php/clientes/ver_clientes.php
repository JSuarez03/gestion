<?php

session_start();

if (!isset($_SESSION['usuario'])) {
  header('Location: '.PATH.'login');
  die();
}

use Controller\Cliente;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $conexion = new Cliente;
  $clientes = $conexion->lista();
  $datos = array(['Nombre', 'Apellido', 'Telefono', 'Direccion']);
  foreach ($clientes as $cliente) {
    array_push($datos, [$cliente['nombre'], $cliente['apellido'], $cliente['telefono'], $cliente['direccion']]);
  };
  return $datos;
}


require_once './views/clientes/ver_citas_clientes.view.php';
