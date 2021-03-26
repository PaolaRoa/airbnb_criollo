<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡House rent Armenia!</title>

    <!-- BOOTSTRAP 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet"  href="../assests/css/Navbarlessee.css">

</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="../index.php">
                    <img src="../assests/img/hotel2.png" />
                </a>
              <ul class="menu">
                  <li><a href="../views/GeneralLessor.php">Home</a></li>
                  <li><a href="../views/PropertiesLessor.php">Propiedades</a>
                      <ul class="submenu">
                          <li><a href="../views/Newhomelessor.php"> 
                            <i class="fas fa-plus"></i>
                              Agregar</a></li>
                      </ul>
                  </li>
                  <li><a href="#">
                        <i class="fas fa-question-circle"></i>
                      Contacto</a></li>
                  <li><a href="#">
                        <i class="fas fa-user"></i>
                      <?php
                            echo $_SESSION['name_user'];
                      ?>
                      </a>
                      <ul class="submenu">
                          <li><a href="#"> 
                                <i class="fas fa-tools"></i>
                              Ayuda</a></li>
                          <li><a href="#"> 
                              <i class="fas fa-sign-out-alt"></i>
                              Salir</a></li>
                      </ul>
                  </li>
              </ul>
            </div>
          </nav>
          <!-- HEADER AND MENU -->
    </header>
    </header>
</body>
</html>