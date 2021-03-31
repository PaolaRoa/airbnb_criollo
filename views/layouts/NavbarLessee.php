<?php
    session_start();
?>
    <header>
        <a href="#">
            <img src="../assests/img/hotel2.png" />
        </a>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu"><i class="fas fa-bars"></i></label>
        <nav class="menu">
            <ul>
                <li><a href="../views/Lesseegalery.php" >Galeria</a></li>
                <li><a href="#" >Reservas</a></li>
                <li><a href="#" ><i class="fas fa-question-circle"></i>
                      Contacto</a></li></a></li>
                <li><a href="#" ><i class="fas fa-user"></i>
                <?php 
                                echo $_SESSION['user_email'];
                        ?>          
            </a></a></li>
                <li><a href="../views/LesseeHelp.php" ><i class="fas fa-tools"></i>
                        Ayuda</a></li></a></li>
                <li><a href="../utils/logout.php"><i class="fas fa-sign-out-alt"></i>
                        Salir</a></li>
            </ul>
        </nav>
    </header>
