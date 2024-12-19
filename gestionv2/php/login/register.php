<?php 
session_start();
if(isset($_SESSION['usuario'])){
  header('Location: login');
}
require_once 'php/evaluar.php';
use Controller\Usuario;

/**
 * ! AQUÍ SE PREPARAN Y SANITIZAN LAS VARIABLES, YA LOS DATOS LOS RECIBEN EN TEXTO CON HTMLSPECIALCHARS, y VERIFICA QUE TODOS LOS CAMPOS ESTEN LLENOS
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $error = '';
  try{
    $datos['nombre'] = sanear($_POST['nombre']);
    $datos['apellido'] = sanear($_POST['apellido']);
    $datos['email'] = sanearMail($datos['email'] );
    $datos['contrasena'] = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];
  }
  catch (Exception $e) {
    $e = $e->getMessage();
    $error .= "<script>Swal.fire({
      icon: 'error',
      title: 'Error',
      text: '$e',
    });
    </script>";
  }

/**
* ! VERIFICA QUE EL CORREO NO SE REPITA
*/
  $conexion = new Usuario;
    $resultado = $conexion->comprobar(array('email'=>"'".$datos['email']."'"));
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
    $datos['contrasena'] = hash('sha512', $datos['contrasena']);
    $contrasena2 = hash('sha512', $contrasena2);

/**
* ! COMPROBAMOS QUE LAS CONTRASEÑAS SEAN IGUALES
* TODO: esto ira junto a la comprobacion
*/
        if ($datos['contrasena'] !== $contrasena2) {
            $error = '<script>Swal.fire({
                icon: "error",
                title: "Error",
                text: "Las Contraseñas no Coinciden",
              });
            </script>'; }
    
    
/**
* ! INSERTAMOS EL USUARIO EN LA BASE DE DATOS
*/
    if ($error == ''){
/*       $statement = array(
        'nombre' => "'".$nombre."'", 
        'apellido' => "'".$apellido."'", 
        'email' => "'".$correo."'", 
        'contrasena' => "'".$contrasena."'",
      ); */
      $result = $conexion->registro($datos);
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