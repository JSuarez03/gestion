<?php

session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: '.PATH.'login');
    die();
}

require_once 'php/evaluar.php';

use Controller\Cliente;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $error = '';

    // Verificar si todos los campos están llenos
    if(empty($_POST['nombre']) || empty($_POST['cedula']) || empty($_POST['apellido']) || empty($_POST['telefono']) || empty($_POST['direccion'])){
        $error = 'Por favor rellene todos los campos';
    } else {
        try {
            $datos['nombre'] = sanear($_POST['nombre']);
            $datos['cedula'] = sanear($_POST['cedula']);
            $datos['apellido'] = sanear($_POST['apellido']);
            $datos['telefono'] = sanear($_POST['telefono']);
            $datos['direccion'] = sanear($_POST['direccion']);
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    }

    if($error === ''){
        try{
            $conexion = new Cliente;
            $resultado = $conexion->agregar($datos);
            unset($conexion);unset($datos);
            $success = true;
        }catch(\PDOException $e){
            $error = 'Error al registrar el cliente';
        }
    }
}

require_once './views/clientes/registrar_clientes.view.php';
