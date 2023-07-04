<?php
include_once(__DIR__.'/../Repository/Repository.php');
//require_once('../Repository/Repository.php');

class CategoriaBl{
    public $repository = null;

    function __construct()
    {
        $this->repository = new Repository();
    }

    public function obtener_todos(){
        $entidades = null;
        $dtos = array();

        $entidades = $this->repository->categoria->obtener_todos();
        foreach ($entidades as $key => $value) {
            $dto= null;

            $dto = array('id'=> $value['Id'], 'nombre'=> $value['Nombre']);
            array_push($dtos, $dto);
        }

        return $dtos;
    }
}