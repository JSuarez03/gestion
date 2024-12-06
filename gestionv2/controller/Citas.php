<?php

require_once('./controller/Database.php');

/**
 * Description of Citas
 *
 * @author Usuario
 */
class Citas {
        private $conexion;
    public function __construct() {
        $this->conexion = new Database;
    }
    public function agregar($datos) {
        try{
            $this->conexion->insert('citas', $datos);
            return true;
        }
        catch (PDOException $err){
            return $err;
        }
    }
    public function lista(array $cliente): array{
        try{
            $res = $this->conexion->readOnly('clientes',array('correo'=>$cliente));
            return $res;
        } catch (Exception $err) {
            return $err;
        }
        
    }    
    public function historia($cliente) {
        try{
            $res = $this->conexion->readOnly('history',array('correo'=>$cliente));
            return $res;
        } catch (Exception $err) {
            return $err;
        }
        
    }
    public function historiaAdd($cliente) {
        try{
            $res = $this->conexion->insert('history',$cliente);
            return $res;
        } catch (Exception $err) { 
            return $err;
        }
        
    }
}
