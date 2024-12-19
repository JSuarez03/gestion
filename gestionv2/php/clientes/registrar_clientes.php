<?php

session_start();
if(!isset($_SESSION['usuario'])){
  header('Location: /gestion/gestionv2/login');
  die();
}

require_once 'php/evaluar.php';

use Controller\Cliente;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  /**
  * ! Para sanitizar los valores y evitar inyecciones
  */
  $error = '';
  try {
    $datos['nombre'] = sanear($_POST['nombre']);
    $datos['cedula'] = sanear($_POST['cedula']);
    $datos['apellido'] = sanear($_POST['apellido']);
    $datos['telefono'] = sanear($_POST['telefono']);
    $datos['direccion'] = sanear($_POST['direccion']);
  } catch (Exception $e) {
    $e = $e->getMessage();
    $error .= "<script>Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '$e',
        });
        </script>";
  }

  if($error === ''){
    try{
      $conexion = new Cliente;
      $resultado = $conexion->agregar($datos);
      unset($conexion);unset($datos);
      header("Location:".PATH."clientes/registrar");
    }catch(\PDOException $e){
      $error .= "<script>Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Error al registrar el cliente',
          });
          </script>";
    }
  }
}




require_once './views/clientes/registrar_clientes.view.php';