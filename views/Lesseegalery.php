<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡House rent Armenia!</title>
     <!-- BOOTSTRAP 4 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> 
    <!-- FONT AWESOEM-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet"  href="../assests/css/Navbarlessee.css">
    <link rel="stylesheet"  href="../assests/css/lesseefilter.css">
</head>
<body>
    <?php
    include("../views/layouts/NavbarLessee.php");
    ?>
    </br>
    </br>

    <!--Filter-->
    <div class="filter">
        <form class="cd-form" method="POST" action="../controllers/BookingController.php">
            <p class="fieldset">
                <label class="image-replace cd-username" for="start-d">Fecha de inicio</label>
                    </Br>
                <i class="fas fa-calendar-week"></i>
                <input class="date" type="date" placeholder="start-d" name ="start-date" id="start-date" min=<?php $hoy=date("Y-m-d"); echo $hoy;?>
                value=<?php echo $hoy;?> required>
            </p>
            <p class="fieldset">
                <label class="image-replace cd-username" for="ending-date">Fecha de finalización</label>
                    </Br>
                <i class="fas fa-calendar-check"></i>
                <input class="date" type="date" placeholder="ending-date" name ="ending-date" id="ending-date" 
                min=<?php
                $fecha = date('Y-m-d');
                $nuevafecha = strtotime ( '+1 day' , strtotime ( $fecha ) ) ;
                $nuevafecha = date ( 'Y-m-d' , $nuevafecha );
                echo $nuevafecha;
                ?> 
                required
                value=<?php
                    echo $nuevafecha
                ?>
                >
                
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
    
    <!--Footer o contacto-->
</body>
</html>