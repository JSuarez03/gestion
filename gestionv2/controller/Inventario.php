<?php

require_once('./controller/Database.php');

class Inventario {
    private $conexion;
    public function __construct() {
        $this->conexion = new Database;
    }
    public function agregar($datos) {
        try{
            $this->conexion->insert('clientes', $datos);
            return true;
        }
        catch (PDOException $err){
            return $err;
        }
    }
    
    public function actualizar($datos) {
        try{
            $this->conexion->update('clientes', $datos);
            return true;
        }
        catch (PDOException $err){
            return $err;
        }
    }
    
    public function lista() {
        try{
            $res = $this->conexion->readMany('inventario');
            
            return $res;
        } catch (Exception $err) {
            return $err;
        }
        
    }    
    public function historia($cliente) {
        try{
            $res = $this->conexion->readMany('move');
            return $res;
        } catch (Exception $err) {
            return $err;
        }
        
    }
}
