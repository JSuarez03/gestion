<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location: /gestion/gestionv2/login');
  die();
}
require_once('./php/evaluar.php');
use Controller\Citas;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $datos = array();$error = '';
    try{
        $datos['nombre'] = sanear($_POST['nombre']);
        $datos['apellido'] = sanear($_POST['apellido']);
        $datos['direccion'] = sanear($_POST['direccion']);
        $datos['numero'] = sanear($_POST['telefono']);
        $datos['fecha'] = sanear($_POST['dia']);
        $datos['hora'] = sanear($_POST['hora']);
        $datos['razon'] = sanear($_POST['razon']);
        
        $current_date = new DateTime();
        $date = new DateTime($datos['fecha']." ". $datos['hora']);
    
        if($date->format('Y-m-d H:i') < $current_date->format('Y-m-d H:i')){
             throw new Exception("la fecha de la cita no puede ser colocara en una fecha anterior");
        }
    } catch (Exception $th){
        $error = $th->getMessage();
    }
    
    if($error === ''){
        $cita = new Citas();
        $cita->agregar($datos);
        unset($datos); 
        unset($cita);
        header("location:/gestion/gestionv2/citas/create");
    }
}

require_once 'views/citas/crear_cita.view.php';
?>