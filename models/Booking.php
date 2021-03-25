<?php 


require_once("../utils/conexion.php");




class Booking{

    private $idBookings;
    private $start_d;
    private $final_date;
    private $users_idusers;
    private $id_house;

    public function __construct(){

    }

    public function setBooking($start_d,$final_date, $users_idusers, $id_house){
        $this->$start_dB = $start_d;
        $this->$final_date = $final_date;
        $this->$users_idusers = $users_idusers;
        $this->$id_house;
    }
    public function createBooking(){
        $stmt = Conexion::connect()->prepare("INSERT INTO Bookings('start_date', final_date, users_idusers) values('$this->$start_d','$this->$final_date','$this->$users_idusers')");
        $stmt->execute();
        //set the id that was assign in the last query
        $id= PDO::lastInsertId();
        setId($id);
        $stmt2 = Conexion::connect()->prepare("INSERT INTO houses_has_Bookings values($this->$id_house','$this->$idBookings)");    
    }
    public function setId($id){
        $this->$idBookings = $id;
    }

}