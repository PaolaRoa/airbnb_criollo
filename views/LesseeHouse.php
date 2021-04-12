<?php
       header('Content-Type: text/html; charset=UTF-8');
        //Iniciar una nueva sesión o reanudar la existente.
        session_start();
        //si el rol es 1 es arrendatario entonces lo deja entrar
        if (!isset($_SESSION['rol'])){
            header('Location: ../views/Login.php');

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
                    <?php
                        if(isset($_SESSION['bImages'])){
                            $images = $_SESSION['bImages'];
                            $imgP = $images[0]['url'];  
                            $img1 = $images[1]['url'];
                            $img2 = $images[2]['url'];
                        }
                        else{
                            
                            $imgP = null;  
                            $img1 = null;
                            $img2 = null;
                        }
                            
                    ?>
                    <img id="image-box" src="../imagenes/<?php echo $imgP?>">
                </div>
                <div class="product-small">
                    <img src="../imagenes/<?php echo $imgP?>"
                    onclick="img(this)">
                    <img src="../imagenes/<?php echo $img1?>"
                    onclick="img(this)">
                    <img src="../imagenes/<?php echo $img2?>"
                    onclick="img(this)">

                </div>
            </div>
            <div class="info">
            <?php
                    if(!isset($_SESSION['houseDetail'])){
                        echo '<h1>No se pudo obtener el detalle de la casa</h1>';
                    }
                    else
                    {$house = $_SESSION['houseDetail'];
                    foreach ($house as $houseTemp) {
                        $idHouse = $houseTemp['idhouses'];
                        $name=$houseTemp['name'];
                        $description = $houseTemp['description'];
                        $direction = $houseTemp['direccion'];
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
                        </div>";}
                    
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
                                    if(!isset($_SESSION['houseServices'])){
                                        echo '<h1>Ups!</h1>';
                                    }
                                    else
                                    {$services = $_SESSION['houseServices'];
                                    foreach($services as $s){
                                        echo "<i class='fas' id=$s></i>";}}
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
        <div class="two">
            <h2>Otras propiedades</h2>
                <div class="others">

                    <div class="other-house">
                        <div class="product">
                            <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                        </div>
                        <div class="info">
                        <h1>Nombre de la casa</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor qui ipsum molestiae commodi sed quod dolorem odit, fugit itaque, deserunt ad ex, quibusdam consectetur obcaecati necessitatibus nulla accusantium repellendus. Ullam.</p>
                        </div>
                    </div>
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