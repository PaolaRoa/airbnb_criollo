<?php ob_start() ?>
<?php

require_once "../models/House.php";

session_start();


// CREATE HOUSE

if(isset($_POST["title"]))
{
   $name_house = $_POST["title"] ;
   $description = $_POST["description"];
   $num_rooms =$_POST["habitaciones"];
   $num_toilets=$_POST["baños"];
   $parking_lot =$_POST["parqueadero"];
   $internet= $_POST["internet"];
   $price_pn=$_POST["price_noche"];

   $house = new House();
   $house->setHouse($name_house, $description, $num_rooms, $num_toilets, $parking_lot, $internet,  $_SESSION['iduser'],$price_pn);


   if ($house->createHouse()==1)
   {

      echo'<script type="text/javascript">
      alert("Registro de casa exitoso");
      window.location.href="../views/Newhomelessor.php";
      </script>';
   }
}


// DELETE AND EDIT HOUSE AJAX
else if (isset($_POST["typeoperation"])){

   $id_house = $_POST["id"];
   $type_query = $_POST["typeoperation"];
   $id_lessor=  $_SESSION['iduser'];
   switch($type_query){
      case 'delete':
         $house = new House();
         $newHouse =$house->deleteHouse($id_house,$id_lessor);
         echo json_encode($newHouse);
        break;
        default:
         break;

   }

}


// SHOW HOUSE

else
{
   $house = new House();
   $house->setSessionHouse($_SESSION['iduser']);

   echo '<script type="text/javascript">
   window.location.href="../views/LessorHouse.php";
   </script>';
}









?>


<?php ob_end_flush();?>

