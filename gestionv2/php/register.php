<?php session_start();

if(isset($_SESSION['usuario'])){
  header('Location: index');
}
require_once('controller/Usuario.php');
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
            $conexion = new Usuario();
        }catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        } 
/**
* ! VERIFICA QUE EL CORREO NO SE REPITA
*/
    $resultado = $conexion->comprobar(array('correo'=>"'".$correo."'"));
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
* TODO: esto tambien se va a colocar en la clase usuario
*/
    $contrasena = hash('sha512', $contrasena);
    $contrasena2 = hash('sha512', $contrasena2);

/**
* ! COMPROBAMOS QUE LAS CONTRASEÑAS SEAN IGUALES
* TODO: esto ira junto a la comprobacion
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
      $statement = array(
        'nombre' => "'".$nombre."'", 
        'apellido' => "'".$apellido."'", 
        'correo' => "'".$correo."'", 
        'contrasena' => "'".$contrasena."'",
      );
      $result = $conexion->registro($statement);
      if($result !== true){
        echo $result;
        die();
      }
      $_SESSION['registro_exitoso'] = true;
      header('Location: login');
      exit;
    }
}

require_once 'views/login/register.view.php';

?>