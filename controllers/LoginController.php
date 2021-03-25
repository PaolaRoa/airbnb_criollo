<?php ob_start() ?>
<?php 

require_once "../models/User.php";


$email = $_POST["signup-email"];
$password = $_POST["signup-password"];


$user  = new User();
$user->setUserLogin($email, $password);

if($user->loginUserValidation()==0){
    echo "alert('no estas registrado')";
 }
 else{
    header('Location: ../views/Lesseegalery.php');
 }

?>


<?php ob_end_flush();?>

