<?php 
require_once("../utils/conexion.php");

class AditionalServer{

    private $service;
    public function __construct(){

    }

    public function setAddServer($service){
        $this->service = $service;
    }


    public function createAddServer(){
        $con = Conexion::connect();
        $stmt = $con->prepare("INSERT INTO additional_services (service) values('$this->service')");
        $resp = $stmt->execute();
        return $resp;
    }


}