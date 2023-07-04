<?php

class Conexion{

	public $mysqli;

	public function __construct(){        
        $this->mysqli = new mysqli("127.0.0.1", "root", "", "gastos");
        if ($this->mysqli->connect_errno) {
            echo "Error en la conexion" . $this->mysqli->connect_error;
        }
    }
}