<?php
       header('Content-Type: text/html; charset=UTF-8');
        //Iniciar una nueva sesión o reanudar la existente.
        session_start();
        //si el rol es 1 es arrendatario entonces lo deja entrar
        if (!isset($_SESSION['rol'])){
            header('Location: ../views/Login.php');

        }else if($_SESSION['rol']==1){
            $cliente = $_SESSION['rol'];
        }
        else{
            header('Location: ../views/GeneralLessor.php');//si no lo redirecciona a la vista de arrendador  
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡House rent Armenia!</title>
    <!-- FONT AWESOEM-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="../assests/css/Navbarlessee.css">
    <link rel="stylesheet" href="../assests/css/HelpLessor.css">

    <link rel="stylesheet" href="../assests/css/footer.css">
</head>

<body>

    <!--Navbar-->
    <?php
    include("../views/layouts/NavbarLessee.php");
    
    ?>
    <!-- BANNER -->
    <div class="banner">
        </br>
        </br>
        <h1>¿Tienes alguna queja o reclamo?</h1>
        </br>
        </br>
    </div>
    <!--BANNER END -->


    <div class="contedor-tarjetas">

        <div class="card">


            <div class="form">
    
                <form class="cd-form" method="POST" action="../controllers/EmailControlerLessee.php">
                    <p class="fieldset">
                        <i class="fas fa-file-signature"></i>
                        <input class="text" type="text" placeholder="Nombre" name="name"  required>
                    </p>
                    <p class="fieldset">
                        <i class="fas fa-envelope"></i>
                        <input class="text" type="email" placeholder="Email" name="email"  required>
                    </p>
                    <p class="fieldset">
                      <i class="fas fa-pencil-alt"></i>
                      <input class="text" type="text" placeholder="Asunto" name="business"  required>
                    </p>
                    </br>
                    <p class="fieldset">
                        <i class="fas fa-envelope-open-text"></i>
                        <textarea type="text" placeholder="Mensaje " name="msj"  required></textarea>
                    </p>
                    </br>
                    </br>
                    <p class="fieldset">
                        <input class="button" type="submit" value="Enviar">
                    </p>
                    <p class="tranks">¡Gracias por comunicar te con nosotros!</p>
                    <!-- <p>¿Deseas comunicarte directamente con un asesor?
                        <a class="link" href="../views/Register.php">haz clic aquí</a>
                    </p> -->
                </form>

            </div>
        </div>
    </div>

    <!--Footer-->
    <?php
    include("../views/layouts/Footer.php");
    ?>
</body>

</html>