<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
          <p><?php echo $descrip['parking_lot'] ?></p>
          <p><?php echo $descrip['internet'] ?></p>
          <p><?php echo $descrip['price_pn'] ?></p>
          <button>Editar</button>
          <button onclick="deleteHouse(<?php echo $descrip['idhouses']?>)">Eliminar</button>

        </div>
      <?php
    
     
    }
    
    ?>

    </div>


<script src="../assests/js/updateHouse.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>
</html>