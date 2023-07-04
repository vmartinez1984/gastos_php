<?php
include_once(__DIR__.'/../Repository/Repository.php');

class SubcategoriaBl{
    public $repository = null;

    function __construct()
    {
        $this->repository = new Repository();
    }

    public function obtener_todos(){
        $entidades = null;
        $dtos = array();

        $entidades = $this->repository->subcategoria->obtener_todos();
        $categorias = $this->repository->categoria->obtener_todos();
        foreach ($entidades as $key => $value) {
            $dto= null;
            $categoria =null;

            foreach ($categorias as $key => $item) {
                if($value['CategoriaId'] == $item['Id']){
                    $categoria = array(
                        'id' => $item['Id'],
                        'nombre' => $item['Nombre']
                    );
                }
            }
            $dto = array(
                'id'=> $value['Id'], 
                'nombre'=> $value['Nombre'], 
                'cantidad'=> $value['Cantidad'], 
                'guid' => $value['Guid'],
                'categoria' => $categoria
            );
            array_push($dtos, $dto);
        }

        return $dtos;
    }

    public function agregar($subcategoria){
        return $this->repository->subcategoria->agregar($subcategoria);
    }
}