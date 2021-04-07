<?php 


require_once("../utils/conexion.php");


class Imagenes {

  
    private $nombre;


    public function __construct(){

    }

    public function setImagen( $nombre){

        $this->nombre = $nombre;
    }

    public function createImagenMain(){
        $stmt = Conexion::connect()->prepare("INSERT INTO imagenes(  nombre ) VALUES ('$this->nombre')");
        $stmt -> execute();
        return 1;
    }



}


?>