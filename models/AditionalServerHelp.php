<?php 
require_once("../utils/conexion.php");

class AditionalServerHelp{

    private $id_house;
    private $id_service;
    private $server;
    public function __construct(){

    }

    public function setServerHelp($id_house,$id_service){
        $this->id_house = $id_house;
        $this->id_service = $id_service;
    }

    public function setServer($server){
        $this->server = $server;
    }

    public function idServer(){
        $stmt = Conexion::connect()->prepare("SELECT * FROM additional_services WHERE service = '$this->server'");
        $stmt -> execute();
        $arr = $stmt->fetch();
        return $arr;
    }


    public function createServerHelp(){
        $con = Conexion::connect();
        $stmt = $con->prepare("INSERT INTO additional_services_help (houses_idhouses, idadditional_services) values('$this->id_house','$this->id_service')");
        $resp = $stmt->execute();
        return $resp;
    }

    public function getHouseServices($idHouse){
        $con = Conexion::connect();
        $stmt = $con->prepare("SELECT idadditional_services FROM hotel.additional_services_help
        where houses_idhouses = '$idHouse'");
        $stmt->execute();
        $arr = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
        return $arr;
    }


    public function getServices($iduser){
        $con = Conexion::connect();
        $stmt = $con->prepare(" SELECT idadditional_services FROM  additional_services_help INNER JOIN houses ON houses.idhouses= additional_services_help.houses_idhouses INNER JOIN users ON users.idusers = houses.users_idusers WHERE idusers='$iduser'");
        $stmt->execute();
        $arr = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
        return $arr;
    }





}