<?php ob_start() ?>
<?php

require_once "../models/Booking.php";

$action = $_GET['action'];


if ($action=='search'){
    session_start();
    $_SESSION['start_date']= $_POST['start-date'];
    $_SESSION['end_date']= $_POST['ending-date'];
    header('Location: ../views/Lesseegalery.php');

}
else if ($action=='book'){

}



?>
<?php ob_end_flush();?>