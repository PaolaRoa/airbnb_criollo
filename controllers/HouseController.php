<?php ob_start() ?>
<?php

require_once "../models/House.php";

session_start();

$name_house = $_POST["title"];
$description = $_POST["description"];
$num_rooms =$_POST["habitaciones"];
$num_toilets=$_POST["baños"];
$parking_lot =$_POST["parqueadero"];
$internet= $_POST["internet"];

$price_pn=$_POST["price_noche"];

$house = new House($name_house, $description, $num_rooms, $num_toilets, $parking_lot, $internet,  $_SESSION['iduser'],$price_pn);


if ($house->createHouse()==1){

   echo'<script type="text/javascript">
   alert("Registro de casa exitoso");
   window.location.href="../views/Newhomelessor.php";
   </script>';
}









?>


<?php ob_end_flush();?>

