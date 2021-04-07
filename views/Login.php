<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡CASAS EN RENTA ARMENIA!</title>

    <!--Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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

    <?php   if(isset( $_SESSION["msg"])) { ?>
            <div class="alert alert-<?= $_SESSION["msg_type"];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION["msg"] ?>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                
            </button>
          </div>
          <?php session_unset();
        }
    ?>

        <form class="cd-form" method="POST" action="../controllers/LoginController.php" autocomplete="off" >
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
                <i class="fas fa-eye" id="show"></i>
            </p>
            <p class="fieldset">
                <input class="button" type="submit" value="Entrar">
            </p>

           

            <p>¿Aun no tienes una cuenta?
                <a class="link" href="../views/Register.php">Registrate</a>
            </p>
        </form>

       
</div> <!-- cd-signup -->

</br>



     <!--footer-->
    <?php
        include("../views/layouts/Footer.php");
    ?>

    <script src="../assests/js/ViewPassword.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
   

</body>
</html>