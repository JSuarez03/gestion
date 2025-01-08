<?php

namespace Controller;

use Controller\Database;

/**
 * Descripcion:
 * Clase que se encarga de gestionar los productos que hay en el inventario
 */

class Productos{
    private $conexion;
    public function __construct(){
        $this->conexion = Database::getInstance();
    }
    public function getCategorias(): array|\PDOException{
        try{
            $res = $this->conexion->readMany('categorias');
            return $res;
        }
        catch (\PDOException $err){
            return $err->getMessage();
        }
    }
    public function agregar(array $datos){
        try{
            $res = $this->conexion->insert('productos', $datos);
            return $res;
        }
        catch (\PDOException $err){
            return $err->getMessage();
        }
    }
    public function modificar(array $datos){
        try{
            $res = $this->conexion->update('productos', $datos);
            return $res;
        }
        catch (\PDOException $err){
            return $err->getMessage();
        }
    }
    public function listaTotal(): array|\Exception{
        try{
            $res = $this->conexion->readMany('productos');
            return $res;
        } catch (\Exception $err) {
            return "error:" . $err->getMessage();
        }
    }
    public function listaUnica(string $producto): array|\PDOException{
        try{
            $res = $this->conexion->readOnly('productos',array('id_producto'=>$producto));
            return $res;
        } catch (\PDOException $err) {
            return "error:" . $err->getMessage();
        }
    }
}