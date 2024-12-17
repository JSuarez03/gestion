<?php 
session_start();

if(isset($_SESSION['usuario'])){
    header('Location: /gestion/gestionv2/home');
}

use Controller\Usuario;

$error = '';

/**
* ! Para sanitizar los valores y evitar inyecciones
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = filter_var(strip_tags($_POST['nombre']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);
    
/**
* ! NOS CONECTAMOS A LA BASE DE DATOS
*/
try {
    $conexion = new Usuario();
}catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

/**
* ! EJECUTAMOS NUESTRA CONSULTA PARA QUE ELIJA LOS USUARIOS REGISTRADOS
*/
    $statement = $conexion->comprobar(array('nombre' => $nombre,'correo' => $correo,'contrasena' => $contrasena));
    
    #EJECUTAMOS NUESTRA SENTENCIA SQL

    //$error .='<h3>Datos Incorrectos</h3>';
    // Luego, verifica si el usuario existe
    if($resultado !== false){
    // Si el usuario existe, redirige a la página de contenido
    $_SESSION['usuario'] = $nombre;
    header('Location: home');
    }else {
        $error .='<script>Swal.fire({
                icon: "error",
                title: "Error",
                text: "Datos Incorrectos",
              });
            </script>';
}

}

require 'views/login/login.view.php';

?>