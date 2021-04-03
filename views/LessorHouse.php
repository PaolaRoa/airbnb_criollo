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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assests/css/footer.css">
</head>
<body>

    <?php
    include("../views/layouts/NavbarLessor.php");
    ?>

    <?php
      $lessorhouse =$_SESSION['house_lessor'];
    ?>

    <div class="card mt-4" style="width: 60%; margin: auto auto" id="card-house">
    <?php
    foreach($lessorhouse as $house=>$descrip){
       ?>
            <img src="../assests/img/parquedelcafe.jpeg" class="card-img-top" alt="photos">
            <div class="card-body">
            <h5 class="card-title"><?php echo $descrip['name'] ?></h5>
            <p class="card-text"><?php echo $descrip['description'] ?></p>
            </div>
             <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $descrip['num_rooms'] ?></li>
            <li class="list-group-item"><?php echo $descrip['num_toilets'] ?></li>
            <li class="list-group-item"><?php $internet = $$descrip['internet']==0 ? "Si": "No"; echo $internet?></li>
           </ul>
            <button class="btn btn-primary" onclick="editHouse(<?php echo $descrip['idhouses']?>)">Editar</button>
            <button class="btn btn-danger" onclick="deleteHouse(<?php echo $descrip['idhouses']?>)">Eliminar</button>
            <br>
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