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
    <link rel="stylesheet"  href="../assests/css/lesseefilter.css">
    <link rel="stylesheet" href="../assests/css/footer.css">
</head>
<body>
    <?php
    include("../views/layouts/NavbarLessee.php");
    ?>
    </br>
    </br>

    <!--Filter-->
    <div class="filter">
        <form class="cd-form" method="POST" action="../controllers/RegisterController.php">
            <p class="fieldset">
                <label class="image-replace cd-username" for="start-date">Fecha de inicio</label>
                    </Br>
                <i class="fas fa-calendar-week"></i>
                <input class="date" type="date" placeholder="start-date" name ="start-date" id="start-date" required>
            </p>
            <p class="fieldset">
                <label class="image-replace cd-username" for="ending-date">Fecha de finalización</label>
                    </Br>
                <i class="fas fa-calendar-check"></i>
                <input class="date" type="date" placeholder="ending-date" name ="ending-date" id="ending-date" required>
            </p>
            <p class="fieldset">
                <input class="button" type="submit" value="Buscar">
            </p>
        </form>
    </div>
    <div class="galery">
        </br>
        </br>
        <h1>Galeria</h1>
        </br>
        </br>
    </div>
    <!--Galery-->
    <div class="contedor-tarjetas">
        <div class="card-one">
                <img src="../assests/img/photo1.jpg">
            </br>
            <h4>Casa Camprestre </h4>
            <P>Agradable casa para hasta 5 huéspedes </P>
            <span>
                <i class="fa fa-map-marker"></i>
                EJE CAFETERO, FINLANDIA
            </span>
            <span>
                <i class="fa fa-bed"></i>   3 Bedrooms
            </span>
            <span>
                <i class="fa fa-bath"></i>2 Bathroom
            </span>
            <div class="rent-price pull-left">$200</div>
            <a href="../views/LesseeHose.php">
                <button>
                    VER MAS
                </button>
            </a>
        </div>

        
    </div>
    
     <!--footer-->
    <?php
        include("../views/layouts/Footer.php");
    ?>
</body>
</html>