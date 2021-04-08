<?php ob_start() ?>
<?php

require_once "../models/House.php";

require_once "../models/AditionalServerHelp.php";

require_once "../models/Imagenes.php";


session_start();


$action = $_GET['action'];
switch ($action){
   case "detail":

      $houseId = $_GET['id'];
      $houseObj = new House();
      $house = $houseObj->getHouse($houseId);
      $servicesObj = new AditionalServerHelp();
      $services = $servicesObj->getHouseServices($houseId);
      session_start();
      $_SESSION['houseDetail'] = $house;
      $_SESSION['houseServices'] = $services;
      header('Location: ../views/LessorHouseDetail.php');
   

      break;

      default:
      break;



}








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
         $direction = $_POST["direction_u"];

         $house = new House();

         echo json_encode($house->updateHouse($id_house, $id_lessor,$name, $description, $num_rooms, $num_toilets, $parking_lot, $internet, $price_pn, $direction));

        break;

        case 'insert':

         $name_house = $_POST["title"] ;
         $description = $_POST["description"];
         $num_rooms =$_POST["habitaciones"];
         $num_toilets=$_POST["baños"];
         $parking_lot =$_POST["parqueadero"];
         $internet= $_POST["internet"];
         $price_pn=$_POST["price_noche"];
         $direction = $_POST["direction"];


         $house = new House();
         $house->setHouse($name_house, $description, $num_rooms, $num_toilets, $parking_lot, $internet,  $_SESSION['iduser'],$price_pn, $direction);

         $create_house=$house->createHouse();

         $lastid_house= $house->Last_id();

         // // aditional server
         $piscina = $_POST["piscina"];
         $limpieza = $_POST["limpieza"];
         $aire = $_POST["aire"];
         $agua = $_POST["agua"];
         $sauna = $_POST["sauna"];

         $servers = array($piscina, $limpieza, $aire, $agua, $sauna);

         foreach($servers as $server )
         {
               if($server != NULL){


                  $serveradd  = new AditionalServerHelp();
                  // set for id service
                  $serveradd->setServer($server);
                  $idserver =$serveradd->idServer();
                  // set fot add server
                  $serveradd->setServerHelp($lastid_house["idhouses"], $idserver["idadditional_services"]);
                  $serveradd->createServerHelp();



               }
         }



         $imagen = $_FILES['main-picture']['name'];
         $size_img=$_FILES["main-picture"] ['size'];
         $type_img=$_FILES["main-picture"] ['type'];
         $nombre = time();
         $url = $nombre."-".$imagen;
         $storage_img=$_SERVER['DOCUMENT_ROOT'];
         $main =1;


         if ($size_img<=4000000000000000) {
            //Tipo de archivos permitidos
            if ( $type_img=='image/png'||$type_img=='image/jpeg'||$type_img=='image/jpg'||$type_img=='image/gif') {
                   $temp  = $_FILES['main-picture']['tmp_name'];
                  $Imagen = new Imagenes();
                  $Imagen->setImagen($url, $main , $lastid_house["idhouses"]);
                  $Imagen->createImagenMain();
                  move_uploaded_file($temp,$storage_img."/"."airbnb_criollo"."/"."imagenes"."/".$url);
         } else{
               echo "formato no permitido";
         }
         } else{
               echo "El tamaño es superior al permitido";
         }

         //Imagen de apoyo

         $imagen_a = $_FILES['additional-images']['name'];
         $size_a=$_FILES["additional-images"] ['size'];
         $type_a=$_FILES["additional-images"] ['type'];
         $nombre = time();
         $url_a = $nombre."-".$imagen_a;
         $storage_img=$_SERVER['DOCUMENT_ROOT'];
         $main_a =0;


         if ($size_a<=4000000000000000) {
            //Tipo de archivos permitidos
            if ( $type_a=='image/png'||$type_a=='image/jpeg'||$type_a=='image/jpg'||$type_a=='image/gif') {
               $temp  = $_FILES['additional-images']['tmp_name'];
               $Imagen = new Imagenes();
               $Imagen->setImagen($url_a, $main_a , $lastid_house["idhouses"]);
               $Imagen->createImagenMain();

               move_uploaded_file($temp,$storage_img."/"."airbnb_criollo"."/"."imagenes"."/".$url_a);
            }
            else{
               echo "formato no permitido";
            }
            } else{
               echo "El tamaño es superior al permitido";
            }
         echo json_encode($create_house);
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

