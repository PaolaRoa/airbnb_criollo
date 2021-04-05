<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡House rent Armenia!</title>

    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet"  href="./assests/css/Navbarlessee.css">
    <link rel="stylesheet" href="assests/css/styles.css">
    <link rel="stylesheet"  href="./assests/css/testimonial.css">
    <link rel="stylesheet"  href="./assests/css/footer.css">

</head>

<body>
    <?php
        include("./views/layouts/Navbarindex.php");
    ?>
    </br>
    </br>
    </br>

       
  <!-- BANNER -->
  <div class="banner">
    <div class="banner-content">
      <h1>¡Tus propiedades en arriendo!</h1>

    </div>
  </div>
  <!--BANNER END -->


  <!-- CARDS HOUSEs IN RENT -->

  <div class="contedor-tarjetas">

    <div class="card" id="card-house">
      <?php
      foreach ($lessorhouse as $house => $descrip) {
      ?>
        <!-- Data main -->
        <div class="date">
          <h1><?php echo $descrip['name'] ?></h1>
          <!-- Slider -->
          <div class="container-slider">
            <ul class="slider">
              <li id="slide1">
                <img src="../assests/img/photo2.jpg" />
              </li>
              <li id="slide2">
                <img src="../assests/img/photo3.jpg" />
              </li>
              <li id="slide3">
                <img src="../assests/img/photo4.jpg" />
              </li>
            </ul>
            <!-- slide button -->
            <ul class="menuslide">
              <li>
                <a href="#slide1">1</a>
              </li>
              <li>
                <a href="#slide2">2</a>
              </li>
              <li>
                <a href="#slide3">3</a>
              </li>
            </ul>
          </div>
          <h3><b><?php echo $descrip['description'] ?></b></h3>
        </div>
        <!-- House Components -->
        <div class="items">
          <p><i class="fas fa-bed"></i><?php echo $descrip['num_rooms'] ?> Habitaciones</p>
          <p><i class="fas fa-bath"></i><?php echo $descrip['num_toilets'] ?> Baños</p>
          <p><i class="fas fa-parking"></i><?php echo $descrip['parking_lot'] ?> Parqueadero</p>
          <p><i class="fas fa-wifi"></i><?php echo $descrip['internet'] ?> Zona WiFi</p>
          <p><i class="fas fa-dollar-sign"></i><?php echo $descrip['price_pn'] ?> Valor por noche</p>
        </div>

        <!-- Buttons Crud -->
        <div>
          <button><i class="fas fa-pencil-alt"></i>Editar</button>
          <button onclick="deleteHouse(<?php echo $descrip['idhouses'] ?>)"><i class="fas fa-trash-alt"></i>Eliminar</button>
        </div>

      <?php


      }

      ?>

    </div>
  </div>


  <!-- CARDS HOUSE IN RENT-->

        <div class="testimonials">
            <div class="inner">
                <h3>Testimonios</h3>
                <div class="border"></div>
                    <div class="row">
                        <div class="testimonial">
                            <img src="./assests/img/testimonio1.jpg">
                                <div class="name">Sandra Castro</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime odit in nam doloribus magni ab repudiandae fugiat consequuntur voluptatibus ex? Labore sit itaque laborum veritatis est repellendus quo eligendi. Quos.</p>
                        </div>

                        <!--Testimonial two-->
                        <div class="testimonial">
                            <img src="./assests/img/testimonio2.jpg">
                                <div class="name">Juan Castillo</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime odit in nam doloribus magni ab repudiandae fugiat consequuntur voluptatibus ex? Labore sit itaque laborum veritatis est repellendus quo eligendi. Quos.</p>
                        </div>

                        <!--Testimonial tree-->
                        <div class="testimonial">
                            <img src="./assests/img/testimonio3.jpg">
                                <div class="name">Camila Sabogal</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime odit in nam doloribus magni ab repudiandae fugiat consequuntur voluptatibus ex? Labore sit itaque laborum veritatis est repellendus quo eligendi. Quos.</p>
                        </div>
                    </div>
            </div>
        </div>
        
        </br>
        </br>

        
<!--Footer-->
<?php
        include("../views/layouts/Footer.php");
    ?>

<script src="../assests/js/updateHouse.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>