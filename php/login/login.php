<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: '.PATH.'home');
    exit;
}

require_once 'php/evaluar.php';
use Controller\Usuario;

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $email = sanearMail($_POST['email']);
        $contrasena = $_POST['contrasena'];

        if (empty($email) || empty($contrasena)) {
            throw new Exception('Todos los campos son obligatorios');
        }

        $conexion = new Usuario();
        $statement = $conexion->login(['email' => $email, 'contrasena' => $contrasena]);

        if ($statement !== false) {
            $_SESSION['email'] = $statement["email"];
            $_SESSION['usuario'] = $statement["nombre"];
            header('Location: home');
            exit;
        } else {
            throw new Exception('Clave o Correo Invalido');
        }
    } catch (\Exception $e) {
        $error = $e->getMessage();
    }
}

require 'views/login/login.view.php';
?>
