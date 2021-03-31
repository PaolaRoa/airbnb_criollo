<?php 
require_once("../utils/conexion.php");

class Booking{

    private $idBookings;
    private $start_d;
    private $final_date;
    private $users_idusers;
    private $houseId;

    public function __construct(){

    }

    public function setBooking($start_d,$final_date, $users_idusers, $houseId){
        $this->start_d = $start_d;
        $this->final_date = $final_date;
        $this->users_idusers = $users_idusers;
        $this->houseId = $houseId();
    }
    public function createBooking(){
        $stmt = Conexion::connect()->prepare("INSERT INTO Bookings('start_date', final_date, users_idusers, houseId) values($this->$start_d','$this->$final_date','$this->$users_idusers','$this->$houseId)");

        $stmt->execute();
        //set the id that was assign in the last query
        $id= PDO::lastInsertId();
        setId($id);
        //$stmt2 = Conexion::connect()->prepare("INSERT INTO houses_has_Bookings values($this->$houseId','$this->$idBookings)");    
    }
    public function setId($id){
        $this->idBookings = $id;
    }
    /*public function get_avalaiblehouses($start_d, $end_date){
        $stmt = Conexion::connect()prepare("SELECT houseId from Bookings");
    }*/

}