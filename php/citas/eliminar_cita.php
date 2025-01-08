<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location: '.PATH.'login');
  die();
}

require_once('./php/evaluar.php');
use Controller\Citas;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  try {
    $datos = [
      'id_cita' => sanear($_POST['id_cita']),
      'status' => 1
    ];
    $cita = (new Citas)->eliminarCita($datos);
    header("location:".PATH."citas"); 

  } catch (\Throwable $th) {
    echo $th;
    die();
  }
}else{
  header("location:".PATH."citas");
}
