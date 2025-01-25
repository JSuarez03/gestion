<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location: '.PATH.'login');
  die();
}
require_once('./php/evaluar.php');
use Controller\Citas;
use Controller\Cliente;
$listaClientes = (new Cliente)->lista();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $datos = array();$error = '';$encontrado = false;
    try{
        //Comprobamos si cliente esta vacio
        vacia($_POST['cliente']);
        // Guardamos la informacion del cliente en forma de un array en la variable datos['cedula_cliente']
        $datos['cedula_cliente'] = explode("-",$_POST['cliente']);
        //! En este foreach se busca si el cliente esta en la base de datos
        foreach($listaClientes as $cliente){
          if(in_array($datos['cedula_cliente'][0], $cliente) && in_array($datos['cedula_cliente'][1], $cliente) && in_array($datos['cedula_cliente'][2], $cliente)){
            $datos['cedula_cliente'] = $datos['cedula_cliente'][0];
            $encontrado = true;
            break;
          }
        } //! En caso de que no se encuentre el cliente se lanza una excepcion
        if(!$encontrado){
          throw new Exception("El cliente no se encuentra en la base de datos");
        }
        //! Saneamos los demas datos
        $datos['fecha'] = sanear($_POST['fecha']);
        $datos['hora'] = sanear($_POST['hora']);
        $datos['servicio'] = sanear($_POST['servicio']);
        //! al apenas crear la cita se coloca en estado pendiente
        $datos['estado'] = sanear($_POST['estado']);
        
        //! Comprobamos si la fecha de la cita es anterior a la fecha actual, en caso de ser asi se lanca una excepcion
        $current_date = new DateTime();
        $date = new DateTime($datos['fecha']." ". $datos['hora']);
        
        if($date->format('Y-m-d H:i') < $current_date->format('Y-m-d H:i')){
            throw new Exception("la fecha de la cita no puede ser colocara en una fecha anterior");
        }
    } catch (Exception $th){
        $error = $th->getMessage();
    }
    //! En caso de que no haya errores se crea la cita y se redirige a la pagina de citas
    if($error === ''){
        $cita = new Citas();
        $cita->agregar($datos);
        unset($datos); 
        unset($cita);
        header("location:".PATH."citas");
    }else{
        echo "<script>alert('".$error."')</script>";
    }
}

require_once 'views/citas/crear_cita.view.php';
?>