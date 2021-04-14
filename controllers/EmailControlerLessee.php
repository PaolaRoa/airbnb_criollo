<?php
    $addressee = "airbnb.criollo@gmail.com";

    $name= $_POST['name'];
    $business=$_POST['business'];
    $email=$_POST['email'];
    $msj=$_POST['msj'];

    $header = "Queja o reclamo de Airbinb criollo";
    $MSJ_complete = $msj. "\nAttentamente:" .$name;

    mail($addressee, $business, $MSJ_complete, $header);

    echo "
        <script>alert('Correo enviado exitosamente')</script>";

    echo "
        <script>setTimeout(\"location.href='../views/Lesseegalery.php'\",1000)</script>";

?>