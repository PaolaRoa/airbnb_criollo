<?php ob_start() ?>
<?php 

require_once "../models/User.php";


$email = $_POST["signup-email"];
$rawPassword = $_POST["signup-password"];
$password= hash('sha256', $rawPassword);


$user  = new User();
$user->setUserLogin($email, $password);

if($user->loginUserValidation()==0){
    echo "alert('no estas registrado')";
 }
 else{
   session_start();
   $user->setSession();
   header('Location: ../views/Lesseegalery.php');
 }
?>


<?php ob_end_flush();?>

