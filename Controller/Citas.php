<?php

namespace Controller;

use Controller\Database;

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
            $res = $this->conexion->readMany('CITAS_CLIENTES');
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
    public function historia()
    {
        try {
            $res = $this->conexion->readMany('citas_historicas');
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
