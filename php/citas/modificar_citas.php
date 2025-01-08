<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location: '.PATH.'login');
  die();
}

require_once('./php/evaluar.php');
use Controller\Citas;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $datos = sanear($_POST['id_cita']);
  $cita = (new Citas)->listaUnica($datos);
  $estado = $cita['estado'];
}


require_once './views/citas/modificar_cita.view.php';
