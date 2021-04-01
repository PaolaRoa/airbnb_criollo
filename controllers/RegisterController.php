<?php ob_start() ?>
<?php

require_once "../models/User.php";
require_once "../views/Register.php";

if (isset($_POST["typeoperation"])){
    $type_query = $_POST["typeoperation"];
    $name_user = $_POST["signup-username"];
    $rawPassword = $_POST["signup-password"];
    $password= hash('sha256', $rawPassword);
    $email =  $_POST["signup-email"];
    $city =  $_POST["city"];
    $rol =  $_POST["signup-rol"];
    $pdata= 1;

    switch($type_query){
      case 'insert_user':
        $user  = new User();
        $user->setUserRegister($name_user,$password,$email, $city, $rol, $pdata);

          if($user->validationEmail()==0){
            $new_user= $user->createUser();
            echo json_encode($new_user);
          }
          else{
            echo'<script type="text/javascript">
            alert("este correo ya esta registrado");
            </script>';
         }

      break;

      default:
      break;
    }


}
?>


<?php ob_end_flush();?>
