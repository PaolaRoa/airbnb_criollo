<?php
       header('Content-Type: text/html; charset=UTF-8');
        //Iniciar una nueva sesión o reanudar la existente.
        session_start();
        //si el rol es 1 es arrendatario entonces lo deja entrar
        if (!isset($_SESSION['rol'])){
            header('Location: ../views/Login.php');

        }else if($_SESSION['rol']==0){
            $cliente = $_SESSION['rol'];
        }
        else{
            header('Location: ../views/Lesseegalery.php');//si no lo redirecciona a la vista de arrendador  
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡House rent Armenia!</title>
    <!-- FONT AWESOEM-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="../assests/css/Navbarlessee.css">
    <link rel="stylesheet" href="../assests/css/LessorHouse.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../assests/css/footer.css">
</head>

<body>

    <?php
    include("../views/layouts/NavbarLessor.php");
   ?>

    <?php
    $lessorhouse = $_SESSION['house_lessor'];
    ?>
    <!-- BANNER -->
    <div class="banner">
        <div class="banner-content">
            <h1>¡Tus propiedades en arriendo!</h1>

        </div>
    </div>
    </br>
    </br>
    <!--BANNER END -->

    <!-- CARDS HOUSEs IN RENT -->
    <div class="container"  id="card-house">
        <?php
        if (count($lessorhouse) == 0) {
        ?>
        <div></div>
            <div class="container-two">
                <h1> <?php echo $_SESSION['name_user'] ?> no tienes casas registradas</h1>
            </div>
            <?php
        } else {

            foreach ($lessorhouse as $house => $descrip) {
            ?>
                <div class="card ">
                    <!-- Data main -->
                    <img src="../imagenes/<?php echo $descrip['url']?>" class="card-img-top" alt="photos">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $descrip['name'] ?></h3>
                    </div>

                    <!-- House Components -->
                    <ul class="list-group">
                        <li class="list-group-item"><i class="fas fa-bed"></i><?php echo $descrip['num_rooms'] ?> Habitaciones </li>
                        <li class="list-group-item"><i class="fas fa-bath"></i><?php echo $descrip['num_toilets'] ?> Baños</li>
                        <li class="list-group-item"><i class="fas fa-wifi"></i>Zona WiFi:<?php echo $descrip['internet'] ?></li>
                        <li class="list-group-item"><i class="fas fa-parking"></i>Parqueadero: <?php echo $descrip['parking_lot'] ?> </li>
                    </ul>

                   <div><h5 class="card-direction"><?php echo $descrip['direccion'] ?></h5></div>
                    <ul class="list-group-two">
                        <li class="list-group-item"><i class="fas fa-dollar-sign"></i><?php echo $descrip['price_pn'] ?> Valor por noche </li>
                    </ul>
                    <!-- Buttons Crud -->
                    <div class="buttons">
                        <button class="btn-primary" onclick="editHouse(<?php echo $descrip['idhouses'] ?>)"><i class="fas fa-pencil-alt"></i>Editar</button>
                        <a href="../controllers/HouseController.php?action=detail&id=<?php echo $descrip['idhouses'] ?>">
                                 <button class="btn-primary"><i class="fas fa-eye"></i>
                                Ver más
                                </button>
                                </a>
                        <button class="btn-danger" onclick="deleteHouse(<?php echo $descrip['idhouses'] ?>)"><i class="fas fa-trash-alt"></i>Eliminar</button>
                        </br>
                    </div>
                </div>
                    <?php
                }
            }
        ?>

    </div>
    </br>
    </br>
    <!-- CARDS HOUSEs IN RENT END -->


    <div>
    <!--Footer-->


    
    <?php
    
    include("../views/layouts/Footer.php");
    ?>


    </div>

    <script src="../assests/js/updateHouse.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</body>

</html>