<?php
session_start();

use Controller\Productos;
require_once './php/evaluar.php';

$producto = (new Productos)->listaTotal();
$numproductos = sizeof($producto);

$pagina = isset($_GET['page']) ? $_GET['page'] : 1;
$busqueda = isset($_GET['search']) ? $_GET['search'] : '';
$productosPorPagina = 8;
$inicio =($pagina > 1) ? ($pagina - 1) * $productosPorPagina : 0;
$numeroPaginas = ceil($numproductos / $productosPorPagina);
$anterior = $pagina - 1;
$siguiente = $pagina + 1;
$reference = CompleteURL;
if($busqueda != ''){
  $reference .= "?search=$busqueda&page=";
} else {
  $reference .= "?page=";
}

$producto = array_slice($producto, $inicio, $productosPorPagina);


require_once 'views/productos/ver_producto.view.php';
?>