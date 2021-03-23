<?php ob_start() ?>
<?php 

require_once "../models/User.php";
require_once "../views/Register.php";

 $name_user = $_POST["signup-username"];
 $password = $_POST["signup-password"];
 $email =  $_POST["signup-email"];
 $city =  "Bogota";
 $rol =  $_POST["rol"];
 $pdata= 1;


 $user  = new User($name_user,$password,$email, $city, $rol, $pdata);
 $user->createUser();

 header('Location:../index.php');
  
 


?>


<?php ob_end_flush();?>

