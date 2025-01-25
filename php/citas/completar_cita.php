<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location: '.PATH.'login');
  die();
}
require_once('./php/evaluar.php');
use Controller\Citas;
try{
    $datos = [
      "id_cita" => sanear($_POST['id_cita']),
      'fecha' => sanear($_POST['date']),
      'hora' => sanear($_POST['time']),
      'servicio' => sanear($_POST['servicio']),
      'estado' => sanear($_POST['estado'])
    ];
    $cita = (new Citas)->modificar($datos);
  }
  catch(\Exception $err){
    echo $err->getMessage();
  }
  header('Location:'.PATH.'citas'); 
