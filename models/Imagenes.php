<?php 


require_once("../utils/conexion.php");


class Imagenes {

  
    private $url;
    private $main;
    private $id_house;


    public function __construct(){

    }

    public function setImagen( $url , $main, $id_house){
        $this->url = $url;
        $this->main = $main;
        $this->id_house = $id_house;


    }

    public function createImagenMain(){
        $stmt = Conexion::connect()->prepare("INSERT INTO images(  url , main , houses_idhouses ) VALUES ('$this->url','$this->main', '$this->id_house')");
        $stmt -> execute();
        return 1;
    }



}


?>