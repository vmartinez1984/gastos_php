<?php
require_once(__DIR__.'/../UnitOfWork/BusinessLayer/UnitOfWork.php');

header('autor: VictorMtz');
$unitOfWork = null;

if (isset($_SERVER["PATH_INFO"])) {
    $uri;
    $url;
    $method;

    $url = strtolower($_SERVER["PATH_INFO"]);
    $uri = explode("/", strtolower($_SERVER["PATH_INFO"]));
    $method = $_SERVER["REQUEST_METHOD"];
    //print_r($uri);
    //print_r($_SERVER);   
    //print_r($method);

    $unitOfWork = new UnitOfWork();
    // http://127.0.0.1:8080/codigosPostales/v2/index.php/api/estados
    if ($uri[1] == "categorias") {
        if($method == "GET"){
            $categorias = null;
            
            $categorias = $unitOfWork->categoria->obtener_todos();
            
            echo json_encode($categorias);
        }
    }
    else     if ($uri[1] == "subcategorias") {
        if($method == "GET"){
            $lista = null;
            
            $lista = $unitOfWork->subcategoria->obtener_todos();
            
            echo json_encode($lista);
        }else if($method == 'POST'){
            //echo json_encode($_REQUEST);
            //$data = json_decode(file_get_contents('php://input'), true);

            //print_r($data);
            $_POST = json_decode(file_get_contents('php://input'), true);
            print_r($_POST);
            $data = $unitOfWork->subcategoria->agregar($_POST);

            echo json_encode($data);
        }
    }
}