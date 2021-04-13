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
    case "payment":
        pay();
}
function search(){
    session_start();
    $_SESSION['start_date']= $_POST['start-date'];
    $_SESSION['end_date']= $_POST['ending-date'];
    header('Location: ../views/Lesseegalery.php');

    /*echo $_SESSION['start_date'];
    echo $_SESSION['end_date'];*/
    $booking = new Booking;
    $houses = $booking->getAvalaibles($_SESSION['start_date'], $_SESSION['end_date']);
    $_SESSION['houses']= $houses;
     //echo $houses;
    //header('Location: ../views/Lesseegalery.php');


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

function pay(){
  $token = $_REQUEST["token"];
  $payment_method_id = $_REQUEST["payment_method_id"];
  $installments = $_REQUEST["installments"];
  $issuer_id = $_REQUEST["issuer_id"];

  require_once '../vendor/autoload.php';

  MercadoPago\SDK::setAccessToken("TEST-5491215237072949-041317-09b6896b629d0da7953cdec650c21ae4-548275510");
  //...
  $payment = new MercadoPago\Payment();
  $payment->transaction_amount = $_GET['total'];
  $payment->token = $token;
  $payment->description = $_GET['idB'];
  $payment->installments = $installments;
  $payment->payment_method_id = $payment_method_id;
  $payment->issuer_id = $issuer_id;
  $payment->payer = array(
  "email" => "john@yourdomain.com"
  );
  // Guarda y postea el pago
  $payment->save();
  //...
  // Imprime el estado del pago
  echo $payment->status;
  //...

  
}




?>
<?php ob_end_flush();?>