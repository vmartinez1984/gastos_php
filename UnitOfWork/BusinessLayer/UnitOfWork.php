<?php
include_once "CategoriaBl.php";
include_once "SubcategoriaBl.php";

class UnitOfWork{
    public $categoria;
    public $subcategoria;

    public function __construct()
    {
        $this->categoria = new CategoriaBl();
        $this->subcategoria = new SubcategoriaBl();
    }
}