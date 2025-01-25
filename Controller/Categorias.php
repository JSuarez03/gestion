<?php

namespace Controller;

use Controller\Database;

class Categorias {
    private $conexion;
    public function __construct() {
        $this->conexion = Database::getInstance();
    }
    public function agregar($datos) {
        try{
            $this->conexion->insert('Categorias', $datos);
            return true;
        }
        catch (\PDOException $err){
            return $err;
        }
    }
    
    public function actualizar($datos) {
        try{
            $this->conexion->update('Categorias', $datos);
            return true;
        }
        catch (\PDOException $err){
            return $err;
        }
    }
    
    public function lista() {
        try{
            $res = $this->conexion->readMany('Categorias');
            
            return $res;
        } catch (\Exception $err) {
            return $err;
        }
        
    }
}
