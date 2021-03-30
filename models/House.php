<?php 


require_once("../utils/conexion.php");


class House {
    private $name_property;
    private $description;
    private $num_rooms;
    private $num_toilets;
    private $parking_lot;
    private $internet;
    private $id_user;
    private $price_pn;

    public function __construct(){

    }


    public function setHouse($name_property,$description,$num_rooms,$num_toilets,$parking_lot,$internet,$id_user,$price_pn){
        $this->name_property =$name_property;
        $this->description =$description;
        $this->num_rooms =$num_rooms;
        $this->num_toilets=$num_toilets;
        $this->parking_lot =$parking_lot;
        $this->internet = $internet;
        $this->id_user = $id_user;
        $this->price_pn =$price_pn;
    }

    public function createHouse(){
        $stmt = Conexion::connect()->prepare("INSERT INTO houses(name , description, num_rooms ,num_toilets, parking_lot, 	internet, users_idusers, price_pn) VALUES ('$this->name_property','$this->description', ' $this->num_rooms','$this->num_toilets', '$this->parking_lot','$this->internet', '$this->id_user','$this->price_pn' )");
        $stmt -> execute();
        return 1;
    }

    public function LessorHouse($id){
        $stmt = Conexion::connect()->prepare("SELECT idhouses , name , description , num_rooms, num_toilets,parking_lot, internet, price_pn FROM houses WHERE users_idusers='$id'");
        $stmt -> execute();
        $arr = $stmt->fetchAll();
        return $arr;
    }

    public function setSessionHouse($id){
        $_SESSION['house_lessor'] =$this->LessorHouse($id);
    }

    public function deleteHouse($id_house, $id_lessor){
        $stmt = Conexion::connect()->prepare("DELETE FROM houses WHERE idhouses=$id_house");
        $stmt -> execute();
        if($stmt -> rowCount() >0){
            $newHouses = self::LessorHouse($id_lessor);
            return $newHouses;
        }
        else{
            return "error ocurrio";
        }
    }

}


?>