<?php
include_once 'Conexion.php';

class SubcategoriaRepository extends Conexion{
    private $subcategoria = "Subcategoria";

    public function __construct()
    {
        parent:: __construct();
    }

    public function obtener_todos(){
        $query = null;
        $resultado = null;
        $datos = null;

        $query = "SELECT * FROM  {$this->subcategoria}";
        $resultado = $this->mysqli->query($query);
        $datos = $resultado->fetch_all(MYSQLI_ASSOC);

        return $datos;
    }

    public function agregar($subcategoria){
        $query = "INSERT INTO {$this->subcategoria} (CategoriaId, Nombre, EstaActivo, Cantidad, Guid) VALUES(?,?,1,?,?);";
        $statement = $this->mysqli->prepare($query);
        $statement->bind_param('isds', $subcategoria['categoriaId'],$subcategoria['nombre'],$subcategoria['cantidad'],$subcategoria['guid']);
        $statement->execute();
        
        $query = "SELECT LAST_INSERT_ID()";
        $statement = $this->mysqli->query($query);
        $datos = $statement->fetch_all(MYSQLI_ASSOC);

        return $datos;
    }
}