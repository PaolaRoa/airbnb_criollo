<?php
    /*session_start();*/
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
    <link rel="stylesheet"  href="../assests/css/Lessehouse.css">
    <link rel="stylesheet" href="../assests/css/footer.css">

</head>
<body>
    <!--Navbar-->
    <?php
    include("../views/layouts/NavbarLessee.php");
    ?>

    <!--Info de cada casa-->
        <!--galeria slider-->
        <!--nombre 
            descripcion-->
        <!--Detalles
            Detalles de precio (aun que creo que deberia ir de ultimas)
            Descripcción general del departamento (esto depende de los campos)-->
        <!--Medios de pago (no se si es una prioridad la verdad)-->
    <!--Boton de alquilar-->
    <div class="container">
    <!--Inicia la galeria para hacer un trajeta con esto-->
        <div class="container-one">
            <div class="House">
                <div class="product">
                    <img id="image-box" src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                </div>
                <div class="product-small">
                    <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                    onclick="img(this)">
                    <img src="https://images.pexels.com/photos/3797991/pexels-photo-3797991.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" onclick="img(this)">
                    <img src="https://images.pexels.com/photos/2029687/pexels-photo-2029687.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" onclick="img(this)">

                </div>
            </div>
            <div class="info">
            <?php
                    
                    $house = $_SESSION['houseDetail'];
                    foreach ($house as $houseTemp) {
                        $idHouse = $houseTemp['idhouses'];
                        $name=$houseTemp['name'];
                        $description = $houseTemp['description'];
                        $beds= $houseTemp['num_rooms'];
                        $baths = $houseTemp['num_toilets'];
                        $price = $houseTemp['price_pn'];
                        $parking = $houseTemp['parking_lot'];
                        $internet = $houseTemp['internet'];
                        echo "
                        <h1>$name</h1>
                        <p>$description</p>
                        <div class='data'>
                            <div class='items'>
                                <h2>Habitaciones:</h2>
                                <p>$beds</p>
                            </div>
                            <div class='items'>
                                <h2>Baños:</h2>
                                <p>$baths</p>
                            </div>
                            <div class='items'>
                                <h2>Parqueadero:</h2>
                                <p>$parking</p>
                            </div>
                            <div class='items'>
                                <h2>Internet:</h2>
                                <p>$internet</p>
                            </div>
                        </div>
                        <div class='price'>
                                <h3>Precio:</h3>
                                <p>$price</p>
                                <a href='../controllers/BookingController.php?action=book&id=".$idHouse."'>
                                    <button>Reservar</button>
                                <a>
                        </div>";
                    
                    /*$services = $_SESSION['houseServices'];
                    foreach($services as $s){
                        echo "<i class='fas fa-swimmer'></i>";
                    }*/
                    
                    }
                ?>
                <div class='data-two'>
                            <h2>Servicios adicionales</h2>
                            <div class='items'>
                                <?php
                                    $services = $_SESSION['houseServices'];
                                    foreach($services as $s){
                                        echo "<i class='fas' id=$s></i>";}
                                ?>
                                <!--<i class='fas fa-swimmer'></i>
                                <i class='fas fa-concierge-bell'></i>
                                <i class='fas fa-medkit'></i>
                                <i class='fas fa-medkit'></i>
                                <i class='fas fa-medkit'></i>-->
                            </div>
                        </div>
                </div>;
                </div>
        
    </div>



     <!--Footer-->
     <?php
        include("../views/layouts/Footer.php");
    ?>
    <script src="../assests/js/imageHouse.js"></script>
    <script src="../assests/js/setIconService.js"></script>




</body>
</html>