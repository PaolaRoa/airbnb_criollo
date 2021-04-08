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



    public function getImageMain($idhouse){
        $stmt = Conexion::connect()->prepare("select url from images inner join houses on images.houses_idhouses = houses.idhouses where main=1 and houses_idhouses='$idhouse'");
        $stmt->execute();
        $arrimages = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $arrimages;
    }


}


?>