<?php
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
?>
<header>
    <a href="../views/Lesseegalery.php">
        <img src="../assests/img/hotel2.png" />
    </a>
    <input type="checkbox" id="btn-menu">
    <label for="btn-menu"><i class="fas fa-bars"></i></label>
    <nav class="menu">
        <ul>
            <li><a href="../views/Lesseegalery.php"><i class="fas fa-camera-retro"></i>
                    Galeria</a></li>
            <li><a href="../controllers/BookingController.php?action=bookings"><i class="fas fa-key"></i>
                    Reservas</a></li>
            <li><a href="#contacto"><i class="fas fa-question-circle"></i>
                    Contacto</a></li></a></li>
            <li><a href="../views/Lesseegalery.php"><i class="fas fa-user"></i>
                    <?php
                    echo "Hola " . $_SESSION['name_user'];
                    ?>
                </a></a></li>
            <li><a href="../views/HelpLesse.php"><i class="fas fa-tools"></i>
                    Ayuda</a></li></a></li>
            <li><a href="../utils/logout.php"><i class="fas fa-sign-out-alt"></i>
                    Salir</a></li>
        </ul>
    </nav>
</header>