<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡House rent Armenia!</title>
    <!-- FONT AWESOEM-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet"  href="../assests/css/Navbarlessee.css">

    <link rel="stylesheet" href="../assests/css/footer.css">
</head>
<body>

    
    <?php
    include("../views/layouts/NavbarLessor.php");
    $lessorhouse =$_SESSION['house_lessor'];
    ?>

    <h1>Hola soy las casas<h1>
    <div class="card" id="card-house">
    <?php
    foreach($lessorhouse as $house=>$descrip){
       ?>
        <img src="../assests/img/parquedelcafe.jpeg" alt="Avatar" style="width:50%">
        <div class="container">
          <h4><b> <?php echo $descrip['name'] ?></b></h4>
          <p><?php echo $descrip['description'] ?></p>
          <p><?php echo $descrip['num_rooms'] ?></p>
          <p><?php echo $descrip['num_toilets'] ?></p>
          <p><?php $parking =$descrip['parking_lot'] ==0 ?  "Si" :  "No" ; echo $parking?></p>
          <p><?php $internet = $$descrip['internet']==0 ? "Si": "No"; echo $internet?></p>
          <p><?php echo $descrip['price_pn'] ?></p>
          <button onclick="editHouse(<?php echo $descrip['idhouses']?>)">Editar</button>
          <button onclick="deleteHouse(<?php echo $descrip['idhouses']?>)">Eliminar</button>

        </div>
      <?php
    }
    ?>

    </div>

    <!--Footer-->
    <?php
        include("../views/layouts/Footer.php");
    ?>

<script src="../assests/js/updateHouse.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>
</html>