<?php
session_start();

if (isset($_SESSION['usuario'])) {
  header('Location: /gestion/gestionv2/home');
}

require_once 'php/evaluar.php';

use Controller\Usuario;
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  /**
  * ! Para sanitizar los valores y evitar inyecciones
  */
  try {
    $datos['email'] = sanearMail($datos['email'] );
    $datos['contrasena'] = $_POST['contrasena'];
    $datos['contrasena'] = hash('sha512', $datos['contrasena']);
  } catch (Exception $e) {
    $e = $e->getMessage();
    $error .= "<script>Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '$e',
        });
        </script>";
  }

  /**
  * ! NOS CONECTAMOS A LA BASE DE DATOS
  */

  try {
    $conexion = new Usuario();
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

  /**
   * ! EJECUTAMOS NUESTRA CONSULTA PARA QUE ELIJA LOS USUARIOS REGISTRADOS
   */

  $statement = $conexion->comprobar(array('email' => $datos['email'], 'contrasena' => $datos['contrasena']));

  // Si el usuario existe, redirige a la página de contenido
  if ($statement !== false) {
    $_SESSION['usuario'] = $statement["nombre"];
    header('Location: home');
  } else {
    $error .= '<script>Swal.fire({
                icon: "error",
                title: "Error",
                text: "Datos Incorrectos",
              });
            </script>';
  }
}

require 'views/login/login.view.php';
