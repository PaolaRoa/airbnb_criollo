<?php ob_start() ?>
<?php

require_once "../models/House.php";

require_once "../models/AditionalServer.php";



session_start();




// DELETE AND EDIT HOUSE AJAX
if (isset($_POST["typeoperation"])){

   $id_house = $_POST["id"];
   $type_query = $_POST["typeoperation"];
   $id_lessor=  $_SESSION['iduser'];


   switch($type_query){
      case 'delete':
         $house = new House();
         $newHouse =$house->deleteHouse($id_house,$id_lessor);
         echo json_encode($newHouse);
        break;

        case 'edit':
         $house = new House();
         $getHouse =$house->getHouse($id_house);
         echo json_encode($getHouse);
        break;


        case 'update':
         $id_house = $_POST["id_u"];
         $name = $_POST["name_u"];
         $description = $_POST["description_u"];
         $num_rooms = $_POST["num_rooms_u"];
         $num_toilets = $_POST["num_toilets_u"];
         $parking_lot = $_POST["parqueadero_u"];
         $internet = $_POST["internet_u"];
         $price_pn = $_POST["price_pn_u"];
         $house = new House();

         echo json_encode($house->updateHouse($id_house, $id_lessor,$name, $description, $num_rooms, $num_toilets, $parking_lot, $internet, $price_pn));

        break;

        case 'insert':

         $name_house = $_POST["title"] ;
         $description = $_POST["description"];
         $num_rooms =$_POST["habitaciones"];
         $num_toilets=$_POST["baños"];
         $parking_lot =$_POST["parqueadero"];
         $internet= $_POST["internet"];
         $price_pn=$_POST["price_noche"];
         $house = new House();
         $house->setHouse($name_house, $description, $num_rooms, $num_toilets, $parking_lot, $internet,  $_SESSION['iduser'],$price_pn);


         
         $piscina = $_POST["piscina"];
         $limpieza = $_POST["limpieza"];
         $aire = $_POST["aire"];
         $agua = $_POST["agua"];
         $sauna = $_POST["sauna"];

         $serveradd  = new AditionalServer();

         $serveradd->setAddServer($piscina);
         $serveradd->createAddServer();


         echo json_encode($house->createHouse());
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

