<?php ob_start() ?>
<?php 

require_once "../models/User.php";
require_once "../views/Register.php";

 $name_user = $_POST["signup-username"];
 $password = $_POST["signup-password"];
 $email =  $_POST["signup-email"];
 $city =  "Bogota";
 $rol =  $_POST["signup-rol"];
 $pdata= 1;


 $user  = new User($name_user,$password,$email, $city, $rol, $pdata);
 
 
 $user_response = $user->createUser();



 if ($user_response ==1){
    header('Location: ../views/Register.php');
 }  
 else{
    header('Location:../index.php');
 }

 

?>


<?php ob_end_flush();?>

