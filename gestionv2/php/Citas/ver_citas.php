<?php
session_start();
if(!isset($_SESSION['usuario'])){
   header('Location: /gestion/gestionv2/login');
  die();
}

use Controller\Citas;
$citas = new Citas();

if(!isset($_GET['search'])){
    $citasList = $citas->listaTotal();
}



require_once 'views/citas/ver_citas.view.php';
?>