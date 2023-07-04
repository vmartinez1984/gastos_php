<?php
include_once 'Conexion.php';

class CategoriaRepository extends Conexion{
    public function __construct()
    {
        parent:: __construct();
    }

    public function obtener_todos(){
        $query = null;
        $resultado = null;
        $datos = null;

        $query = "SELECT * FROM  Categoria";
        $resultado = $this->mysqli->query($query);
        $datos = $resultado->fetch_all(MYSQLI_ASSOC);

        return $datos;
    }
}