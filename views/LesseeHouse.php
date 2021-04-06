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
                    <img src="https://images.pexels.com/photos/584399/living-room-couch-interior-room-584399.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                    onclick="img(this)">
                    <img src="https://images.pexels.com/photos/3797991/pexels-photo-3797991.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" onclick="img(this)">
                    <img src="https://images.pexels.com/photos/2029687/pexels-photo-2029687.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" onclick="img(this)">

                </div>
            </div>
            <div class="info">
                <h1>Nombre de la casa</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum nihil tenetur, accusamus fugiat quidem voluptatem ad consequatur atque rerum iste maxime totam eligendi illum. Quidem modi dignissimos sequi tempore a.</p>
                <div class="data">
                    <div class="items">
                        <h2>Habitaciones:</h2>
                        <p>4</p>
                    </div>
                    <div class="items">
                        <h2>Baños:</h2>
                        <p>3</p>
                    </div>
                    <div class="items">
                        <h2>Parqueadero:</h2>
                        <p>si</p>
                    </div>
                    <div class="items">
                        <h2>Internet:</h2>
                        <p>si</p>
                    </div>
                </div>
                <div class="data-two">
                    <h2>Servicios adicionales</h2>
                    <div class="items">
                        <i class="fas fa-swimmer"></i>
                        <i class="fas fa-concierge-bell"></i>
                        <i class="fas fa-medkit"></i>
                        <i class="fas fa-medkit"></i>
                        <i class="fas fa-medkit"></i>
                    </div>
                </div>
                <div class="price">
                        <h3>Precio:</h3>
                        <p>$50.000</p>
                        <button>Reservar</button>
                </div>
            </div>
        </div>

        <!--Otras propiedades-->
    <!--Slider-->
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
</body>
</html>