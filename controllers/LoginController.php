<?php ob_start() ?>
<?php 

require_once "../models/User.php";


$email = $_POST["signup-email"];
$password = $_POST["signup-password"];


$user  = new User();
$user->setUserLogin($email, $password);

if($user->loginUserValidation()==0){

    echo "no estas registrado , falta manejar esto";
 }
 else{
    if($user->validationRol()['rol']==0){
      
      
      session_start();
      
      $id_lessor=$user->validationRol()['idusers'];
      $name_user=$user->validationRol()['name_user'];
      
      $_SESSION['idusers']= $id_lessor;
      $_SESSION['name_user']= $name_user;
      header('Location: ../views/Newhomelessor.php');
      

   }else if($user->validationRol()['rol']==1)
   {
      header('Location: ../views/Lesseegalery.php');
   }
 }

?>


<?php ob_end_flush();?>

