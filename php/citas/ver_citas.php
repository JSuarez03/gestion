<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location: '.PATH.'login');
  die();
}

use Controller\Citas;
$citas = new Citas();
try{
  $citasList = $citas->listaTotal();
}catch (\Exception $err) {
    echo "error:" . $err->getMessage();
    die();
}



require_once 'views/citas/ver_citas.view.php';
?>