<?php 

class Conexion{

	private $servidor;
    private $usuario;
    private $clave;
    private $basedatos;
    public $mysqli;
	
	 function __construct() {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->clave = "";
        $this->basedatos = "finca";
        $this->mysqli = new mysqli($this->servidor, $this->usuario, $this->clave, $this->basedatos);
        
        if (!empty($this->mysqli->error)) {
            echo "Conexión fallida: ", $this->mysqli->error;
        }
    }
	 
}

?>