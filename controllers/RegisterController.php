<?php ob_start() ?>
<?php 

require_once "../models/User.php";
require_once "../views/Register.php";

 $name_user = $_POST["signup-username"];
 $rawPassword = $_POST["signup-password"];
 $password= hash('sha256', $rawPassword);
 $email =  $_POST["signup-email"];
 $city =  $_POST["city"];
 $rol =  $_POST["signup-rol"];
 $pdata= 1;


 $user  = new User();
  $user->setUserRegister($name_user,$password,$email, $city, $rol, $pdata);

 if($user->validationEmail()==0){
    $user->createUser();
    //header('Location: ../index.php');
    echo'<script type="text/javascript">
    alert("Registro exitoso");
    window.location.href="../index.php";
    </script>';
 }
 else{
   echo'<script type="text/javascript">
   alert("este correo ya esta registrado");
   </script>';
 }

?>


<?php ob_end_flush();?>
