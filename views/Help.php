<!DOCTYPE html>
<<<<<<< HEAD:views/Help.php
<html lang="es">
=======
<html lang="en">

>>>>>>> lessor-single-final:views/HelpLessor.php
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡House rent Armenia!</title>
    <!-- FONT AWESOEM-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<<<<<<< HEAD:views/Help.php
    
    <link rel="stylesheet"  href="../assests/css/Navbarlessee.css">
    <link rel="stylesheet"  href="../assests/css/Help.css">
=======

    <link rel="stylesheet" href="../assests/css/Navbarlessee.css">
    <link rel="stylesheet" href="../assests/css/HelpLessor.css">

>>>>>>> lessor-single-final:views/HelpLessor.php
    <link rel="stylesheet" href="../assests/css/footer.css">
</head>

<body>

    <!--Navbar-->
    <?php
    include("../views/layouts/NavbarLessor.php");
    $lessorhouse = $_SESSION['house_lessor'];
    ?>
<<<<<<< HEAD:views/Help.php
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
=======
    <!-- BANNER -->
    <div class="banner">
        <div class="banner-content">
            <h1>¿Tienes alguna queja o reclamo?</h1>

        </div>
    </div>
    <!--BANNER END -->


    <div class="contedor-tarjetas">

        <div class="card">
>>>>>>> lessor-single-final:views/HelpLessor.php


            <div class="form">
                <div class="politics">
                    <p>Comentanos la dificultad que presentas y uno de nuestros asesores se comunicara con tigo por correo electronico

                        </br>
                        ¡IMPORTANTE!
                        </br>
                        SURAMERICANA pagará la indemnización que corresponde a los dos (2)
                        primeros meses del incumplimiento por parte del inquilino, dentro del mes siguiente
                        a la fecha en la que se formaliza la reclamación. Un mes después de efectuado el
                        primer pago, SURAMERICANA realizará el segundo pago, y así sucesivamente hasta que
                        ilino entregue el inmueble o pague la deuda que tiene con el arrendador.
                        El límite máximo de indemnización es de treinta y seis (36) meses siempre y
                        cuando se encuentre en vigencia este contrato de seguro.
                    </p>
                </div>
                <form class="cd-form" method="POST" action="../controllers/LoginController.php">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-asunto"></label>


                        <i class="fas fa-pencil-alt"></i> <input class="text" id="signup-email" type="email" placeholder="Asunto" name="signup-email" id="signup-email" required>
                    </p>
                    </br>
                    </br>
                    </br>
                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password"></label>

                        <i class="fas fa-envelope-open-text"></i>


                        <input class="text" id="signup-password" type="text" placeholder="Mensaje" name="signup-password" id="signup-password" required>
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
    </div>

    <!--Footer-->
    <?php
    include("../views/layouts/Footer.php");
    ?>
</body>

</html>