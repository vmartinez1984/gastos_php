<?php
require_once('UnitOfWork/BusinessLayer/UnitOfWork.php');

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
    // //     // http://127.0.0.1:8080/codigosPostales/v2/index.php/api/estados
    if ($uri[1] == "gastos") {
        if($method == "GET"){
            $categorias = null;
            
            $categorias = $unitOfWork->categoria->obtener_todos();
            
            echo json_encode($categorias);
        }
    }
}