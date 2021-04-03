<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="../assests/css/styles.css"> -->

    <!-- BOOTSTRAP 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>¡House rent Armenia!</title>

    <link rel="stylesheet"  href="../assests/css/Navbarlessee.css">
    <link rel="stylesheet" href="../assests/css/NewHome.css">
    <link rel="stylesheet" href="../assests/css/footer.css">
</head>
<body>
    <!--Navbar--->
    <?php
    include("../views/layouts/NavbarLessor.php");
    ?>
    </br>

    <!--Form new house-->
    <div id="form" class="form">
        <form class="cd-form" id="form_add_house" autocomplete="off">
            <h1>Agregar una propiedad</h1>
            </br>
            <div class="container">
                <div>
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="title">Nombre de la propiedad</label>
                            </Br>
                            </Br>
                        <input class="text" type="text" placeholder="Nombre de la propiedad" name ="title" id="title" required>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="description">Descripción</label>
                        </Br>
                        </Br>
                        <input class="text" type="text" placeholder="Descripción" name="description" id="description" required>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="description">imagen principal</label>
                        </Br>
                        </Br>
                        <input class="text" type="image" placeholder="Descripción" name="main-picture" id="main-picture" required>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="description">Imagenes de apoyo</label>
                        </Br>
                        </Br>
                        <input class="text" type="image" placeholder="Descripción" name="additional-images" id="additional-images" required>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="description">Habitaciones</label>
                        </Br>
                        </Br>
                        <input class="number" type="number" placeholder="00" name="habitaciones" id="habitaciones" required>
                    </p>
                </div>
                <div>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="description">Baños</label>
                        </Br>
                        </Br>
                        <input class="number" type="number" placeholder="00" name="baños" id="baños" required>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="description">Parqueadero</label>
                        </Br>
                        </Br>
                        <select class="form-select" aria-label="Default select example" name="parqueadero"  id="parqueadero">
                            <option selected>Selecciona</option>
                            <option value="0">Si</option>
                            <option value="1">No</option>
                        </select>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="description">Internet</label>
                        </Br>
                        </Br>
                        <select class="form-select" aria-label="Default select example" name="internet"  id="internet">
                            <option selected>Selecciona</option>
                            <option value="0">Si</option>
                            <option value="1">No</option>
                        </select>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="description">Servicios adicionales</label>
                        <p class="fieldset">
                        <input type="checkbox" id="checkbox_piscina" >
                        <label for="accept-terms"><i class="fas fa-swimmer"></i>Piscina</label>
                        </br>
                        <input type="checkbox" id="checkbox_servicios" >
                        <label for="accept-terms"><i class="fas fa-concierge-bell"></i>Servicios imprescindibles</label>
                        </br>
                        <input type="checkbox" id="checkbox_primerosaux" >
                        <label for="accept-terms"><i class="fas fa-medkit"></i>Botiquín de primeros auxilios</label>
                        </br>
                    </p>
                    <p class="fieldset">
                            <label class="price" for="description">Precio</label>
                            </Br>
                            </Br>
                            <input class="number" type="number" placeholder="eje.$50.000" name="price_noche" id="price_noche" required>
                    </p>
                </div>
            </div>
                   <div class="end">
                        </br>
                        <p class="fieldset">
                             <button class="button" type="submit" >Crear propiedad</button>
                        </p>
                   </div>
        </form>
    </div> <!-- cd-signup -->
    </div>
</form>
</div>


<?php
        include("../views/layouts/Footer.php");
?>

<script src="../assests/js/createHouse.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     <!--footer-->

</body>
</html>