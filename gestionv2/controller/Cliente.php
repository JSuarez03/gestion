<?php

namespace Controller;

use Controller\Database;

/**
 * Clase utiliazada para menejar las operaciones relacionadas con los Clientes
 *
 * @author Usuario
 */
class Cliente {
    private $conexion;
    public function __construct() {
        $this->conexion = Database::getInstance();
    }
    public function agregar($datos): true|\PDOException {
        try{
            $this->conexion->insert('clientes', $datos);
            return true;
        }
        catch (\PDOException $err){
            return $err;
        }
    }
    public function lista($cliente = false): array|false|\Exception {
        try{
            if($cliente !== false){
                $res = $this->conexion->readOnly('clientes',array('correo'=>$cliente));
            }else{
                $res = $this->conexion->readMany('clientes');
            }
            return $res;
        } catch (\Exception $err) {
            return $err;
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
    
}
