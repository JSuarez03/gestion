<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location: '.PATH.'login');
  die();
}

use Controller\Citas;
$citas = new Citas();
$citasList = $citas->listaTotal();



require_once 'views/citas/ver_citas.view.php';
?>