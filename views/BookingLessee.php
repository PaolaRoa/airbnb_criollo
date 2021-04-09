
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
    <link rel="stylesheet"  href="../assests/css/lesseefilter.css">
    <link rel="stylesheet" href="../assests/css/footer.css">
</head>
<body>
    <?php
    include("../views/layouts/NavbarLessee.php");
    ?>
    </br>
    </br>

    <!--Filter-->

    <div class="galery">
        </br>
        </br>
        <h1>Reservas</h1>
        </br>
        </br>
    </div>
    <!--Galery-->
    <div class="contedor-tarjetas">
        <?php
            $bookings = $_SESSION['userBookings'];
            foreach ($bookings as $houseTemp) {
                $idHouse = $houseTemp['idhouses'];
                $idB = $houseTemp['idBookings'];
                $name=$houseTemp['name'];
                $description = $houseTemp['description'];
                $beds= $houseTemp['num_rooms'];
                $baths = $houseTemp['num_toilets'];
                $price = $houseTemp['price_pn'];
                $parking = $houseTemp['parking_lot'];
                $internet = $houseTemp['internet'];
                $total = $houseTemp['total'];
                $start = $houseTemp['start_date'];
                $end = $houseTemp['final_date'];
                echo "        <div class='card-one'>
                                <img src='../assests/img/photo1.jpg'>
                                 </br>
                                <h4>".$name."</h4>
                                <div class='booking'>
                                    <h3>Fechas de reserva:</h3>
                                    <p>$start</p>
                                    <p>$end</p>
                                    </div>
                                 <span>
                                 <i class='fa fa-bed'></i>".$beds."
                                 </span>
                                    <span>
                                <i class='fa fa-bath'></i>".$baths."
                                 </span>
                                <div class='rent-price pull-left'>Total: $$total</div>   
                                 <a href='../controllers/BookingController.php?action=delete&idB=$idB''>
                                 <button>
                                    Eliminar reserva
                                </button>
                                </a>
                                </div>";
          
               // $this->$email= $row['email'] <a href='../controllers/BookingController.php?action=book&id=".$idHouse."'>;
            };
        ?>
    </div>
    
     <!--footer-->
     
    <?php
        include("../views/layouts/Footer.php");
    ?>
    <script src="../assests/js/validateDate.js"></script>
</body>
</html>