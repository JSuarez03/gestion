<?php
session_start();
if (isset($_SESSION['usuario'])) {
  header('Location: login');
}
require_once 'php/evaluar.php';

use Controller\Usuario;

/**
 * ! AQUÍ SE PREPARAN Y SANITIZAN LAS VARIABLES, YA LOS DATOS LOS RECIBEN EN TEXTO CON HTMLSPECIALCHARS, y VERIFICA QUE TODOS LOS CAMPOS ESTEN LLENOS
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $error = '';
  try {
    $datos = [
      'nombre' => sanear($_POST['nombre']),
      'apellido' => sanear($_POST['apellido']),
      'email' => sanearMail($_POST['email']),
      'contrasena' => $_POST['contrasena'],
    ];
    $contrasena2 = $_POST['contrasena2'];
    if ($datos['contrasena'] !== $contrasena2) {
      throw new Error('Las Contraseñas no Coinciden');
    }

    /**
     * ! VERIFICA QUE EL CORREO NO SE REPITA
     */
    $conexion = new Usuario;
    $resultado = $conexion->comprobar(array('email' => $datos['email']));
    if ($resultado != false) {
      throw new Error("Este correo ya se encuentra registrado");
    }

    /**
     * ! COMPROBAMOS QUE LAS CONTRASEÑAS SEAN IGUALES
     * TODO: esto ira junto a la comprobacion
     */


    /**
     * ! INSERTAMOS EL USUARIO EN LA BASE DE DATOS
     */
    if (empty($error)) {
      $result = $conexion->registro($datos);
      $_SESSION['registro_exitoso'] = true;
      header('Location: login');
    }
  } catch (\Exception $e) {
    $e = $e->getMessage();
    $error = "<script>Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: $e 
                });
              </script>";
  }
}

require_once 'views/login/register.view.php';
