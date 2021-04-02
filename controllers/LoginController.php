<?php ob_start() ?>
<?php 

require_once "../models/User.php";
require_once "../utils/funcionesvalidacion.php";

$errors = array();

$email = $_POST["signup-email"];
$rawPassword = $_POST["signup-password"];
$password= hash('sha256', $rawPassword);


$user  = new User();
$user->setUserLogin($email, $password);


if($user->loginUserValidation()==0){

   header('Location: ../views/Login.php');
 }
 else{
    if($user->validationRol()['rol']==0){
      session_start();
      $user->setSession();
      header('Location: ../views/Newhomelessor.php');

   }else if($user->validationRol()['rol']==1)
   {
      session_start();
      $user->setSession();
      header('Location: ../views/Lesseegalery.php');
   }
 }
?>


<?php ob_end_flush();?>

