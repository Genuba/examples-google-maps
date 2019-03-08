<?php
require_once('conexion.php');
class LotePersistencia extends Conexion
{
    public $id;
    public $nombre;
    public $cantidadGallinas;
    public $fechaCreacion;
    public $razaGallina;
    public $proveedor;

    public function crearRuta(){
        $this->query("INSERT INTO LE_TLOTE 
                    VALUES ('',
                            '$this->nombre',
                            '$this->cantidadGallinas',
                            '$this->fechaCreacion',
                            '$this->razaGallina',
                            '$this->proveedor'
                             )");
    }
}
?>