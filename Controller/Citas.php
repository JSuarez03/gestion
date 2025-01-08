<?php

namespace Controller;

use Controller\Database;
use Exception;

/**
 * Descripcion:
 * Clase que se encarga de gestionar las citas de los clientes
 */
class Citas
{
    private $conexion;
    public function __construct()
    {
        $this->conexion = Database::getInstance();
    }
    public function agregar(array $datos)
    {
        try {
            $res = $this->conexion->insert('citas', $datos);
            return $res;
        } catch (\PDOException $err) {
            return $err->getMessage();
        }
    }
    public function modificar(array $datos)
    {
        $res = $this->conexion->update('citas', $datos);
        return $res;
    }

    public function listaTotal(): array|\Exception
    {
        try {
            $res = $this->conexion->readOnlyAll('CITAS_CLIENTES',$datos = ['status'=>0]);
            return $res;
        } catch (\Exception $err) {
            return $err->getMessage();
        }
    }

    public function listaUnica(string $cliente): array|\PDOException
    {
        try {
            $res = $this->conexion->readOnly('CITAS_CLIENTES', array('id_cita' => $cliente));
            return $res;
        } catch (\PDOException $err) {
            return "error:" . $err->getMessage();
        }
    }
    public function historia($cliente)
    {
        try {
            $res = $this->conexion->readOnly('history', array('correo' => $cliente));
            return $res;
        } catch (\Exception $err) {
            return $err;
        }
    }
    public function historiaAdd($cliente)
    {
        try {
            $res = $this->conexion->insert('history', $cliente);
            return $res;
        } catch (\Exception $err) {
            return $err;
        }
    }
    public function eliminarCita($datos): array|\Throwable{
        try {
            $res = $this->conexion->update('citas', $datos);
            return $res;
        } catch (\Exception $err) {
            return $err;
        }
    }
}
