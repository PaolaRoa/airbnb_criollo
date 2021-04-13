<?php
        header('Content-Type: text/html; charset=UTF-8');
        //Iniciar una nueva sesión o reanudar la existente.
        session_start();
        //si el rol es 1 es arrendatario entonces lo deja entrar
        if (!isset($_SESSION['rol'])){
            header('Location: ../views/Login.php');//si no lo redirecciona a la vista de arrendador

        }else if($_SESSION['rol']==1){
            $cliente = $_SESSION['rol'];
        }
        else{
            header('Location: ../views/GeneralLessor.php');//si no lo redirecciona a la vista de arrendador
           
        }
?>
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
                <input class="date" type="date" placeholder="start-date" name ="start-date" id="start-date" min=<?php $hoy=date("Y-m-d"); echo $hoy;?>
                value=<?php 
                    if(isset($_SESSION['start_date'])){
                        echo  $_SESSION['start_date'];
                    }
                    else{
                        echo $hoy;
                        $_SESSION['start_date']=$hoy;
                    }
                ?> 
                required>
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
                    if(isset($_SESSION['end_date'])){
                        echo  $_SESSION['end_date'];
                    }
                    else{
                        echo $nuevafecha;
                        $_SESSION['end_date']=$nuevafecha;
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
    <div class="container"  id="card-house">
    <?php
        if(count($_SESSION['houses'])===0 || !isset($_SESSION['houses'])){
            echo '
                <div class="container-not">
                    <h1>No hay casas disponibles para reservar en estas fechas</h1>
                </div>';
        }else {
                $houses= $_SESSION['houses'];
                foreach ($houses as $house) {
                    $idHouse = $house['idhouses'];
                    $name=$house['name'];
                    $description = $house['description'];
                    $beds= $house['num_rooms'];
                    $bahts = $house['num_toilets'];
                    $price = $house['price_pn'];
                    $img = $house['url'];
                    echo "        <div class='card'>
                                    <!-- Data main -->
                                    <img src='../imagenes/$img' class='card-img-top' alt='photos'>
                                    <div class='card-body'>
                                        <h3 class='card-title'>".$name."</h3>

                                        <div>
                                            <p class='card-text'>".$description."</p>
                                        </div>
                                    </div>

                                    <!-- House Components -->
                                    <ul class='list-group'>
                                        <li class='list-group-item'><i class='fas fa-bed'></i>".$beds." Habitaciones </li>
                                        <li class='list-group-item'><i class='fas fa-bath'></i>".$bahts." Baños</li>
                                    </ul>

                                    <ul class='list-group-two'>
                                        <li class='list-group-item'><i class='fas fa-dollar-sign'></i>".$price." Valor por noche </li>
                                    </ul>

                                    <!-- Buttons Crud -->
                                    <div class='buttons'>
                                        <a href='../controllers/BookingController.php?action=detail&id=".$idHouse."'>
                                            <button class='btn-primary'><i class='fas fa-eye'></i>
                                                Ver más
                                            </button>
                                        </a>
                                    </br>
                                    </div>
                                </div>";
                    }
            
                // $this->$email= $row['email'] <a href='../controllers/BookingController.php?action=book&id=".$idHouse."'>;
                };
            ?>
    </div>
    
     <!--footer-->
     
    <?php
        include("../views/layouts/Footer.php");
    ?>
    <script src="../assests/js/validateDate.js"></script>
</body>
</html>