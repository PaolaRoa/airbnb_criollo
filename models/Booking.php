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
        $stmt = $con->prepare("INSERT INTO Bookings (`start_date`, final_date, users_idusers, housesId, total) values('$this->start_d', '$this->final_date','$this->users_idusers', '$this->houseId', '$this->total')");
        $resp = $stmt->execute();
        //set the id that was assign in the last query
        $id=$con->lastInsertId();
        $this->setId($id);
        return $resp;
        //$stmt2 = Conexion::connect()->prepare("INSERT INTO houses_has_Bookings values($this->$housesId','$this->$idBookings)");    
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
    public function getAvalaibles($sDate, $eDate){
        $con = Conexion::connect();
        $stmt = $con->prepare("SELECT h.*, i.url
        FROM houses h
        left join Bookings b 
        on h.idhouses = b.housesId
        join images i on h.idhouses = i.houses_idhouses
        where
        ('$sDate' not between b.start_date and b.final_date)
        and ('$eDate' not between b.start_date and b.final_date)
        or h.idhouses not in 
        (select housesId from Bookings)
        and i.main = 1");
            $resp = $stmt->execute();
            $arrHouses = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $arrHouses;
            
    }
    public function getUserBookings($iduser){
        $con = Conexion::connect();
        $stmt = $con->prepare("SELECT h.*, b.total, b.start_date, b.final_date, b.idBookings, i.url FROM 
        houses h, Bookings b, images i
        where h.idhouses = b.housesId
        and h.idhouses = i.houses_idhouses
        and i.main = 1
        and b.users_idusers =$iduser;");
        $stmt->execute();
        $arrBookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $arrBookings;
    }
    public static function getImg($idH){
        try {
            $con = Conexion::connect();
            $stmt = $con-> prepare("SELECT i.url, i.main
            from images i
            inner join houses h
            on h.idhouses = i.houses_idhouses
            where h.idhouses = $idH
            order by main desc");
            $stmt->execute();
            $arrImg = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $arrImg;
        } catch (\Throwable $th) {
            return "no se hizo la consulta";
            
        }
        
    }
    public function deleteBooking($idB){
        $con = Conexion::connect();
        $stmt = $con-> prepare("DELETE FROM Bookings where idBookings = $idB");
        $resp = $stmt->execute();
        return $resp;
    }

}