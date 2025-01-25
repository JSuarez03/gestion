<?php

session_start();

if (!isset($_SESSION['usuario'])) {
  header('Location: '.PATH.'login');
  die();
}

use Controller\Cliente;


$conexion = new Cliente;
$clientes = $conexion->lista();
$numClientes = sizeof($clientes);

$pagina = $_GET['page'] ?? 1;
$ClientesPorPagina  = 2;
$inicio =($pagina > 1) ? ($pagina - 1) * $ClientesPorPagina : 0;
$numeroPaginas = ceil($numClientes / $ClientesPorPagina);
$anterior = $pagina - 1;
$siguiente = $pagina + 1;
$reference = CompleteURL;
$clientes = array_slice($clientes, $inicio, $ClientesPorPagina);
$nums = [];
for($i=$pagina;$i <= $numeroPaginas;$i++){
    $nums[$i] = $i;
}


require_once './views/clientes/ver_citas_clientes.view.php';
