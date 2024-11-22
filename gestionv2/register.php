<?php session_start();

if(isset($_SESSION['usuario'])){
    header('Location: index.php');
}

/**
* ! AQUÍ SE PREPARAN Y SANITIZAN LAS VARIABLES, YA LOS DATOS LOS RECIBEN EN TEXTO CON HTMLSPECIALCHARS
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = filter_var(strip_tags($_POST['nombre']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $apellido = filter_var(strip_tags($_POST['apellido']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];

    $error = '';

/**
* ! VERIFICA QUE TODOS LOS CAMPOS ESTEN LLENOS,
*/
    if (empty($nombre) or empty($apellido) or empty($correo) or empty($contrasena) or empty($contrasena2)){
        $error .= '<script>Swal.fire({
                icon: "error",
                title: "Error",
                text: "Para registrarse es necesario llenar todos los campos",
              });
            </script>';
    }else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=gestionv2', 'root', '');
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
/**
* ! VERIFICA QUE EL CORREO NO SE REPITA
*/
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo LIMIT 1');
        $statement->execute(array(':correo' => $correo));
        $resultado = $statement->fetch();
        
        if ($resultado != false){
            $error .= '<script>Swal.fire({
                icon: "error",
                title: "Error",
                text: "Este correo ya se encuentra registrado",
              });
            </script>';
        }

/**
* ! HASHEAMOS LA CONTRASEÑA, AQUÍ SE PUEDE MEJORAR XD
*/
        $contrasena = hash('sha512', $contrasena);
        $contrasena2 = hash('sha512', $contrasena2);

/**
* ! COMPROBAMOS QUE LAS CONTRASEÑAS SEAN IGUALES
*/
        if ($contrasena !== $contrasena2) {
            $error = '<script>Swal.fire({
                icon: "error",
                title: "Error",
                text: "Las Contraseñas no Coinciden",
              });
            </script>'; }
    }
    
/**
* ! INSERTAMOS EL USUARIO EN LA BASE DE DATOS
*/
    if ($error == ''){
        $statement = $conexion->prepare('INSERT INTO usuarios (id_usuarios, nombre, apellido, correo, contrasena)
        VALUES (NULL, :nombre, :apellido, :correo, :contrasena)');
        $statement->execute(array(
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':correo' => $correo,
            ':contrasena' => $contrasena));
//AQUI DEBERIA SER A LOGIN.PHP
        $_SESSION['registro_exitoso'] = true;
        header('Location: login.php');
        exit;
    }
}

require_once 'views/login/register.view.php';

?>