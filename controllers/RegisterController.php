<?php ob_start() ?>
<?php

require_once "../models/User.php";




if (isset($_POST["typeoperation"])){
    $type_query = $_POST["typeoperation"];




    switch($type_query){
      case 'insert_user':
        $name_user = $_POST["signup-username"];
        $rawPassword = $_POST["signup-password"];
        // $raw1Password = $_POST["signup-password_v"];
        $password= hash('sha256', $rawPassword);
        $email =  $_POST["signup-email"];
        $city =  $_POST["city"];
        $rol =  $_POST["signup-rol"];
        $pdata= 1;

        $user  = new User();
        $user->setUserRegister($name_user,$password,$email, $city, $rol, $pdata);

          if($user->validationEmail()==0){
            echo json_encode($user->createUser());
          }

      break;

      default:
      break;
    }


}
?>


<?php ob_end_flush();?>
