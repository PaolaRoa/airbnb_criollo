<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡House rent Armenia!</title>
    <!-- FONT AWESOEM-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet"  href="../assests/css/Navbarlessee.css">

    <link rel="stylesheet" href="../assests/css/footer.css">
</head>
<body>

    <!--Navbar-->
    <?php
    include("../views/layouts/NavbarLessor.php");
    $lessorhouse =$_SESSION['house_lessor'];
    ?>
    
    <h1>Perfil de la persona</h1>

    <!--Footer-->
    <?php
        include("../views/layouts/Footer.php");
    ?>
</body>
</html>