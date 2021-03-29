<?php 


require_once("../utils/conexion.php");


class House {
    private $name_property;
    private $description;
    private $num_rooms;
    private $num_toilets;
    private $parking_lot;
    private $internet;
    private $price_pn;

    public function __construct($name_property,$description,$num_rooms,$num_toilets,$parking_lot,$internet,$price_pn){
        $this->name_property =$name_property;
        $this->description =$description;
        $this->num_rooms =$num_rooms;
        $this->num_toilets=$num_toilets;
        $this->parking_lot =$parking_lot;
        $this->internet = $internet;
        $this->price_pn =$price_pn;
    }

    public function createHouse(){
        $stmt = Conexion::connect()->prepare("INSERT INTO houses(name , description, num_rooms ,num_toilets, parking_lot, 	internet, users_idusers, price_pn) VALUES ()");

        $stmt -> execute();
        
    }

}


?>