<?php ob_start() ?>
<?php

require_once "../models/Booking.php";
require_once "../models/House.php";
require_once "../models/AditionalServerHelp.php";

$action = $_GET['action'];
switch ($action){
    case "search":
        search();
        break;
    case "book":
        book();
        break;
    case "detail":
        showHouse();
        break;
        //header('Location: ../views/LesseHouse.php');
    case "bookings":
        getBookings();
        break;
    case "delete":
        delete();
        break;
}
function search(){
    session_start();
    $_SESSION['start_date']= $_POST['start-date'];
    $_SESSION['end_date']= $_POST['ending-date'];
    /*echo $_SESSION['start_date'];
    echo $_SESSION['end_date'];*/
    $booking = new Booking;
    $houses = $booking->getAvalaibles($_SESSION['start_date'], $_SESSION['end_date']);
    $_SESSION['houses']= $houses;
    //echo $houses;
    header('Location: ../views/Lesseegalery.php');


}
function book(){
    session_start();
    $start = $_SESSION['start_date'];
    $end = $_SESSION['end_date'];
    $idhouse = $_GET['id'];
    $iduser = $_SESSION['iduser'];
    $booking = new Booking();
    $booking->setBooking($start, $end, $iduser, $idhouse);
    $test = $booking->setTotal($idhouse);
    $resp = $booking->createBooking();
    if($resp){
        echo '<script type="text/javascript">
        alert("Registro exitoso");
        window.location.href="../controllers/BookingController.php?action=bookings"
        </script>';
        //getBookings();

    }
    else{
        echo'<script type="text/javascript">
        alert("no se pudo reservar");
        window.location.href="../views/Lesseegalery.php";
        </script>';
    }
}
function showHouse(){
    $houseId = $_GET['id'];
    $houseObj = new House();
    $house = $houseObj->getHouse($houseId);
    $servicesObj = new AditionalServerHelp();
    $services = $servicesObj->getHouseServices($houseId);
    $images = Booking::getImg($houseId);
    session_start();
    $_SESSION['houseDetail'] = $house;
    $_SESSION['houseServices'] = $services;
    $_SESSION['bImages'] = $images;
    header('Location: ../views/LesseeHouse.php');
}
function getBookings(){
    session_start();
    $booking = new Booking();
    $iduser = $_SESSION['iduser'];
    $userbookings = $booking->getUserBookings($iduser);
    $_SESSION['userBookings'] = $userbookings;
    header('Location: ../views/BookingLessee.php');
}
function delete(){
    $idB = $_GET['idB'];
    $booking = new Booking($idB);
    $resp = $booking->deleteBooking($idB);
    if($resp){
        echo '<script type="text/javascript">
        alert("se ha eliminado la reserva");
        window.location.href="../controllers/BookingController.php?action=bookings"
        </script>';
    }
    else{
        echo '<script type="text/javascript">
        alert("no se pudó eliminar");
        window.location.href="../controllers/BookingController.php?action=bookings"
        </script>';
    }
}
?>
<?php ob_end_flush();?>