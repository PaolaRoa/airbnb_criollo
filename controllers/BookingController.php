<?php ob_start() ?>
<?php

require_once "../models/Booking.php";

$action = $_GET['action'];
switch ($action){
    case "search":
        search();
        break;
    case "book":
        book();
        break;
}

function search(){
    session_start();
    $_SESSION['start_date']= $_POST['start-date'];
    $_SESSION['end_date']= $_POST['ending-date'];
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
        window.location.href="../index.php";
        </script>';
    }
    else{
        echo'<script type="text/javascript">
        alert("no se pudo reservar");
        window.location.href="../index.php";
        </script>';
    }
}
/*if ($action=='search'){
    session_start();
    $_SESSION['start_date']= $_POST['start-date'];
    $_SESSION['end_date']= $_POST['ending-date'];
    header('Location: ../views/Lesseegalery.php');
    /*echo $_SESSION['start_date'];
    echo $_SESSION['end_date'];

}
else if ($action=='book'){
    session_start();
    $start = $_SESSION['start_date'];
    $end = $_SESSION['end_date'];
    $idhouse = $_GET['id'];
    $iduser = $_SESSION['iduser'];
    $booking = new Booking();
    $booking->setBooking($start, $end, $iduser, $idhouse);
    $test = $booking->setTotal($idhouse);
    $resp = $booking->createBooking();

    if(true){
        '<script type="text/javascript">
        alert("Registro exitoso");
        window.location.href="../index.php";
        </script>';
    }
    else{
        echo'<script type="text/javascript">
        alert("no se pudo reservar");
        window.location.href="../index.php";
        </script>';
    }



}*/



?>
<?php ob_end_flush();?>