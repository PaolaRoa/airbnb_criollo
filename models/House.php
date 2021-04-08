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
    private $direction;

    public function __construct(){

    }


    public function setHouse($name_property,$description,$num_rooms,$num_toilets,$parking_lot,$internet,$id_user,$price_pn, $direction){
        $this->name_property =$name_property;
        $this->description =$description;
        $this->num_rooms =$num_rooms;
        $this->num_toilets=$num_toilets;
        $this->parking_lot =$parking_lot;
        $this->internet = $internet;
        $this->id_user = $id_user;
        $this->price_pn =$price_pn;
        $this->direction = $direction;
    }

    public function createHouse(){
        $stmt = Conexion::connect()->prepare("INSERT INTO houses(name , description, num_rooms ,num_toilets, parking_lot, 	internet, users_idusers, price_pn, direccion) VALUES ('$this->name_property','$this->description', ' $this->num_rooms','$this->num_toilets', '$this->parking_lot','$this->internet', '$this->id_user','$this->price_pn','$this->direction' )");
        $stmt -> execute();
        // $id=$stmt->lastInsertId();
        return 1;
    }

    public function Last_id(){
        $stmt = Conexion::connect()->prepare("SELECT idhouses FROM houses ORDER BY idhouses DESC LIMIT 1");
        $stmt -> execute();
        $arr = $stmt->fetch();
        return $arr;
    }



    public function LessorHouse($id){
        $stmt = Conexion::connect()->prepare("SELECT idhouses , name , description , num_rooms, num_toilets,parking_lot, internet, price_pn, direccion FROM houses WHERE users_idusers='$id'");
        $stmt -> execute();
        $arr = $stmt->fetchAll();
        return $arr;
    }

    public function LessorHouseImg($id){
        $stmt = Conexion::connect()->prepare("select idhouses, name, description, num_rooms, num_toilets , parking_lot , internet , price_pn , url, direccion from houses inner join users on users.idusers = houses.users_idusers inner join images on images.houses_idhouses=houses.idhouses where main=1 and users.idusers='$id'");
        $stmt -> execute();
        $arr = $stmt->fetchAll();
        return $arr;
    }

    public function setSessionHouse($id){
        $_SESSION['house_lessor'] =$this->LessorHouseImg($id);
    }

    public function deleteHouse($id_house, $id_lessor){
        $stmt = Conexion::connect()->prepare("DELETE FROM houses WHERE idhouses=$id_house");
        $stmt -> execute();
        if($stmt -> rowCount() >0){
            $newHouses = self::LessorHouseImg($id_lessor);
            return $newHouses;
        }
        else{
            return "error ocurrio";
        }
    }
    //search all houses
    static public function get_houses(){
        $stmt = Conexion::connect()->prepare("SELECT * FROM houses");
        $stmt->execute();
        $arrHouses = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $arrHouses;
    }


    public function getHouse($id_house){
        $stmt = Conexion::connect()->prepare("SELECT * FROM houses WHERE idhouses=$id_house");
        if($stmt -> execute()){
            $getHouses = $stmt ->fetchAll(PDO::FETCH_ASSOC);
            return $getHouses;
        }
        else{
            return "error ocurrio";
        }
    }

    public function updateHouse($id_house,$id_lessor,$name, $description, $num_rooms, $num_toilets, $parking_lot, $internet, $price_pn , $direction){
        $stmt = Conexion::connect()->prepare("UPDATE houses SET name='$name',description='$description', num_rooms=$num_rooms, num_toilets=$num_toilets, parking_lot='$parking_lot', internet='$internet', price_pn='$price_pn', direccion='$direction' WHERE idhouses=$id_house");
        $stmt -> execute();
        if($stmt -> rowCount() >0){
            $newHouses = self::LessorHouseImg($id_lessor);
            return $newHouses;
        }
        else{
            return "error ocurrio";
        }
    }




}


?>