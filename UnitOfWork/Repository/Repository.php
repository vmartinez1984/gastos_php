<?php
include_once 'CategoriaRepository.php';
include_once 'SubcategoriaRepository.php';

class Repository{
    public $categoria;
    public $subcategoria;

    function __construct()
    {
        $this->categoria = new CategoriaRepository();
        $this->subcategoria = new SubcategoriaRepository();
    }
}