
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
        <form class="cd-form" method="POST" action="../controllers/BookingController.php?action=search">
            <p class="fieldset">
                <label class="image-replace cd-username" for="start-d">Fecha de inicio</label>
                    </Br>
                <i class="fas fa-calendar-week"></i>
                <input class="date" type="date" placeholder="start-d" name ="start-date" id="start-date" min=<?php $hoy=date("Y-m-d"); echo $hoy;?>
                value=<?php 
                    if(isset($_SESSION['start_date'])){
                        echo  $_SESSION['start_date'];
                    }
                    else{
                        echo $hoy;
                    }
                   
                
                ?> 
                required>
            </p>
            <p class="fieldset">
                <label class="image-replace cd-username" for="end-date">Fecha de finalización</label>
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
                    if(isset($_SESSION['end_date'])){
                        echo  $_SESSION['end_date'];
                    }
                    else{
                        echo $nuevafecha;
                    }
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
        <?php
            $houses= $_SESSION['houses'];
            foreach ($houses as $house) {
                $idHouse = $house['idhouses'];
                $name=$house['name'];
                $description = $house['description'];
                $beds= $house['num_rooms'];
                $bahts = $house['num_toilets'];
                $price = $house['price_pn'];
                echo "        <div class='card-one'>
                                <img src='../assests/img/photo1.jpg'>
                                 </br>
                                <h4>".$name."</h4>
                                <P>".$description."</P>
                                 <span>
                                 <i class='fa fa-map-marker'></i>
                                EJE CAFETERO, FINLANDIA
                                </span>
                                 <span>
                                 <i class='fa fa-bed'></i>".$beds."
                                 </span>
                                    <span>
                                <i class='fa fa-bath'></i>".$bahts."
                                 </span>
                                <div class='rent-price pull-left'>".$price."</div>
                                 <a href='../controllers/BookingController.php?action=book&id=".$idHouse."'>
                                 <button>
                                VER MAS
                                </button>
                                </a>
                                </div>";
          
               // $this->$email= $row['email'];
            };
        ?>
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