<?php 
require_once("../utils/conexion.php");

class Booking{

    private $idBookings;
    private $start_d;
    private $final_date;
    private $users_idusers;
    private $houseId;
    //aqui voy
    private $total;

    public function __construct(){

    }

    public function setBooking($start_d,$final_date, 
    $users_idusers, $houseId){
        $this->start_d = $start_d;
        $this->final_date = $final_date;
        $this->users_idusers = $users_idusers;
        $this->houseId = $houseId;
    }
    public function createBooking(){
        $con = Conexion::connect();
        $stmt = $con->prepare("INSERT INTO bookings (`start_date`, final_date, users_idusers, houseId, total) values('$this->start_d', '$this->final_date','$this->users_idusers', '$this->houseId', '$this->total')");
        $resp = $stmt->execute();
        //set the id that was assign in the last query
        $id=$con->lastInsertId();
        $this->setId($id);
        return $resp;
        //$stmt2 = Conexion::connect()->prepare("INSERT INTO houses_has_Bookings values($this->$houseId','$this->$idBookings)");    
    }
    public function setId($id){
        $this->idBookings = $id;
    }
    public function setTotal($idHouse){
        //calc days with start and end date
        $date1 = new DateTime($this->start_d);
        $date2 = new DateTime($this->final_date);
        $diff = $date1->diff($date2);
        $days = $diff->days;
        $con = Conexion::connect();
        $stmt = $con->prepare("SELECT price_pn FROM houses where  idhouses='$idHouse'");
        $stmt->execute();
        $price = $stmt->fetchColumn();
        //calc total
        $total = $price * $days;
        $this->total = $total;   
    }


}