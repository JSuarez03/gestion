<?php
session_start();

if (isset($_SESSION['usuario'])) {
  header('Location: '.PATH.'home');
}

require_once 'php/evaluar.php';

use Controller\Usuario;

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  try {
    /**
     * ! SE recibe y sanean las variables
     */

    $datos['email'] = sanearMail($_POST['email']);
    $datos['contrasena'] = $_POST['contrasena'];

    /**
     * ! Usamos el metodo login de la clase Usuario para verificar si el usuario existe, 
     * ! y si la contraseña es correcta
     */

    $conexion = new Usuario();
    $statement = $conexion->login($datos);

    /**
     * ! Si el usuario existe y la contraseña es correcta se inicia la sesion y se redirige al home
     * * de lo contrario se muestra un mensaje de error
     */
    if ($statement !== false) {
      $_SESSION['email'] = $statement["email"];
      $_SESSION['usuario'] = $statement["nombre"];
      header('Location: home');
    }
  } catch (\Exception $e) {
    $error = $e->getMessage();
    $error = "<script>Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: $error ,
                });
              </script>";
  }
}

require 'views/login/login.view.php';
