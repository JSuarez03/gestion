<?php
  
require_once('./controller/Database.php');

class Usuario{
  private $conexion;

  public function __construct()
  {
    $this->conexion = Database::getInstance();
  }

  public function comprobar($datos){
    $resultado = $this->conexion->readOnly('usuarios',$datos);
    return $resultado;
  }
  
  public function registro($datos){
    try{
      $resultado = $this->conexion->insert('usuarios',$datos);
      return true;
    }catch(PDOException $err){
      return $err;
    }
    ;
  }
}