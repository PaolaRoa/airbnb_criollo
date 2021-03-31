<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡CASAS EN RENTA ARMENIA!</title>

    <!--Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <link rel="stylesheet" href="../assests/css/Navbarlessee.css">
    <link rel="stylesheet" href="../assests/css/login.css">
    <link rel="stylesheet" href="../assests/css/footer.css">
</head>
<body>
<?php
    include("../views/layouts/Navbarlogin.php");
    ?>
    </br>
<div class="form">
        <form class="cd-form" method="POST" action="../controllers/LoginController.php">
            <h1>Inicia Sesion</h1>
            <p class="fieldset">
                <label class="image-replace cd-email" for="signup-email">E-mail</label>
                </Br>
                </Br>
                <i class="fas fa-envelope"></i>
                <input class="text" id="signup-email" type="email" placeholder="E-mail" name="signup-email" id="signup-email" required>
            </p>

            <p class="fieldset">
                <label class="image-replace cd-password" for="signup-password">Contraseña</label>
                </Br>
                </Br>
                <i class="fas fa-key"></i>
                <input class="password" id="signup-password" type="password"  placeholder="contraseña" name="signup-password" id="signup-password" required>
                <a href="#0" class="hide-password"><i class="fas fa-eye"></i></a>
            </p>
            <p class="fieldset">
                <input class="button" type="submit" value="Entrar">
            </p>
            <p>¿Aun no tienes una cuenta?
                <a class="link" href="../views/Register.php">Registrate</a>
            </p>
        </form>
        </div> <!-- cd-signup -->
     </div>

     <!--footer-->
    <?php
        include("../views/layouts/Footer.php");
    ?>
    
</body>
</html>