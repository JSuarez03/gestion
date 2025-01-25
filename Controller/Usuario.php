<?php
  
namespace Controller;

use Controller\Database;

class Usuario{
  private $conexion;

  public function __construct()
  {
    $this->conexion = Database::getInstance();
  }

  public function comprobar($datos){
    $resultado = $this->conexion->readOnly('usuarios',$datos);
    if($resultado != false){
      return true;
    }
    return false;
  }

  public function login($datos){
      $contrasena = array_pop($datos);
      $resultado = $this->conexion->readOnly('usuarios',$datos);
      if(empty($resultado)){
        throw new \Exception('Usuario no existe');
      }
      if(password_verify($contrasena,$resultado['contrasena'])){
        return $resultado;
      }else{
        return false;
      }
    
  }
  
  
  public function registro($datos){
    try{
      $datos['contrasena'] = password_hash($datos['contrasena'],PASSWORD_BCRYPT);
      $resultado = $this->conexion->insert('usuarios',$datos);
      return true;
    }catch(\PDOException $err){
      throw new \Exception('Fallo al registrar el usuario');
    }
    ;
  }
}