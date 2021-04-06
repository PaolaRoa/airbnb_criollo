<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡House rent Armenia!</title>
    <!-- FONT AWESOEM-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet"  href="../assests/css/Navbarlessee.css">
    <link rel="stylesheet"  href="../assests/css/Help.css">
    <link rel="stylesheet" href="../assests/css/footer.css">
</head>
<body>

<!--Navbar-->
    <?php
    include("../views/layouts/NavbarLessor.php");
    $lessorhouse =$_SESSION['house_lessor'];
    ?>
    <div class="container">
        <h1>¿Tienes alguna queja o reclamo?</h1>
        <p>Comentanos la dificultad que presentas y uno de nuestros asesores se comunicara con tigo por correo electronico</p>
        <div class="form">
        <form class="cd-form" method="POST" action="../controllers/LoginController.php">
            <p class="fieldset">
                <label class="image-replace cd-email" for="signup-asunto">Asunto</label>
                </Br>
                </Br>
                
                <input class="text" id="signup-email" type="email" placeholder="Asunto" name="signup-email" id="signup-email" required>
            </p>
            </br>
            </br>
            <p class="fieldset">
                <label class="image-replace cd-password" for="signup-password">Mensaje</label>
                </Br>
                </Br>
                <i class="fas fa-sticky-note"></i>
                <input class="text" id="signup-password" type="text"  placeholder="Mensaje" name="signup-password" id="signup-password" required>
            </p>
            </br>
            </br>
            <p class="fieldset">
                <input class="button" type="submit" value="Enviar">
            </p>
            <p>¿Deseas comunicarte directamente con un asesor?
                <a class="link" href="../views/Register.php">haz clic aquí</a>
            </p>
        </form>

        </div>
    </div>

    <!--Footer-->
    <?php
        include("../views/layouts/Footer.php");
    ?>
</body>
</html>