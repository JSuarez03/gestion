<?php

namespace Controller;

use Controller\Database;

/**
 * Description of Citas
 *
 * @author Usuario
 */
class Citas {
    private $conexion;
    public function __construct() {
        $this->conexion = Database::getInstance();
    }
    public function agregar(array $datos) {
        try{
            $res = $this->conexion->insert('citas', $datos);
            return $res;
        }
        catch (\PDOException $err){
            return $err->getMessage();
        }
    }
    
    public function listaTotal(): array{
        try{
            $res = $this->conexion->readMany('citas');
            return $res;
        } catch (\Exception $err) {
            return "error:" . $err->getMessage();
        }
    }
      
    public function listaUnica(array $cliente): array{
        try{
            $res = $this->conexion->readOnly('citas',array('nombre'=>$cliente));
            return $res;
        } catch (\Exception $err) {
            return "error:" . $err->getMessage();
        }
        
    }    
    public function historia($cliente) {
        try{
            $res = $this->conexion->readOnly('history',array('correo'=>$cliente));
            return $res;
        } catch (\Exception $err) {
            return $err;
        }
        
    }
    public function historiaAdd($cliente) {
        try{
            $res = $this->conexion->insert('history',$cliente);
            return $res;
        } catch (\Exception $err) { 
            return $err;
        }
        
    }
}
