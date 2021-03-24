<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>¡CASAS EN RENTA ARMENIA!</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assests/css/styles.css">
  </head>
  <body>
  <!-- HEADER AND MENU -->
  <header>
  <nav class="navbar navbar-light" >
  
      <div class="container">
      <img class="logo" src="assests/img/logo.png">
        <ul class="menu">
    <li><a href="#">HOME</a></li>
    <li><a href="#">HOUSES</a></li>
                
    <li><a href="#">SERVICES</a>
     <ul class="submenu">
      <li><a href="#">ANUNCIAR CASAS EN ALQUILER</a></li>
      <li><a href="#">PODER RENTAR CASAS</a></li>
                        <li><a href="#">CONTACTO ENTRE ALQUILADOR Y RENTADOR</a></li>
     </ul>
    </li>
    <li><a href="#">CONTACTO</a></li>
                <li><a href="#">NOSOTROS</a></li>
                <li><a href="./views/Register.php">REGISTRO</a></li>
  </ul>
  </ul>
      </div>
    </nav>
    <!-- HEADER AND MENU -->
 
    <div class="formdate">
       <form name="formulario" method="post" action="/send.php">
         <!-- Campo de entrada de fecha -->
         Selecciona la fecha de llegada: 
        <input type="date" name="fecha" />
        <!-- Campo de entrada de hora -->
        Selecciona la hora de chekout:
        <input type="date" name="fecha" />
      </form>
    </div>

    <div class ="title">
        <h1>ARMENIA EL MEJOR DESTINO</h1>
    </div>

    <!-- CARDS HOUSES -->
    <div class="contedor-tarjetas"> 

    <div class ="card" >
        <img src="assests/img/photo1.jpg">
        <h4>Casa Camprestre </h4>
        <P>Agradable casa para hasta 5 huéspedes </P>
        <span>
            <i class="fa fa-map-marker"></i>
            EJE CAFETERO, FINLANDIA
        </span>
        <span>
        <i class="fa fa-bed"></i> 3 Bedrooms
        </span>
        <span>
        <i class="fa fa-bath"></i>2 Bathroom
        </span>
        <div class="rent-price pull-left">$200</div>
        <a href="#">VER MAS</a>   
    </div>
</body>
</html>
