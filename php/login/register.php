<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: ' . PATH . 'home');
    exit;
}
require_once 'php/evaluar.php';

use Controller\Usuario;

$error = ''; // Asegúrate de que $error está definido
$success = false; // Variable para el éxito del registro

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $datos = [
            'nombre' => sanear($_POST['nombre']),
            'apellido' => sanear($_POST['apellido']),
            'email' => sanearMail($_POST['email']),
            'contrasena' => $_POST['contrasena'],
        ];
        $contrasena2 = $_POST['contrasena2'];
        if ($datos['contrasena'] !== $contrasena2) {
            throw new Exception('Las Contraseñas no Coinciden');
        }

        $conexion = new Usuario;
        $resultado = $conexion->comprobar(array('email' => $datos['email']));
        if ($resultado != false) {
            throw new Exception("Este correo ya se encuentra registrado");
        }

        if (empty($error)) {
            $result = $conexion->registro($datos);
            if ($result) {
                $success = true;
                $_SESSION['registro_exitoso'] = true;
                header('Location: ' . PATH . 'login');
            } else {
                throw new Exception("Error en el registro. Por favor, intenta de nuevo.");
            }
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

require_once 'views/login/register.view.php';
?>
