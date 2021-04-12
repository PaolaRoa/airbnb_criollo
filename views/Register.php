<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- BOOTSTRAP 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>¡CASAS EN RENTA ARMENIA!</title>
    <link rel="stylesheet" href="../assests/css/Navbarlessee.css">
    <link rel="stylesheet" href="../assests/css/register.css">
    <link rel="stylesheet" href="../assests/css/footer.css">
</head>
<body>
<?php
    include("../views/layouts/NavbarRegister.php");
    ?>
    </br>

    <div class="container">




        <div class="form">
            <form class="cd-form"  id="register-user-form" autocomplete="off" name="registerform">
                <h1>Registrate</h1>
                </br>
                <div class="container">
                <div>
                    <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">Nombre de usuario</label>
                                </Br>
                                </Br>
                            <i class="fas fa-user"></i>
                            <input class="text" id="signup-username" type="text" placeholder="Nombre de usuario" name ="signup-username" id="signup-username" required>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signup-email">E-mail</label>
                            </Br>
                            </Br>
                            <i class="fas fa-envelope"></i>
                            <input class="text" id="signup-email" type="email" placeholder="E-mail" name="signup-email" id="signup-email" required>
                        </p>

                        

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Contraseña</label>
                            </Br>
                            </Br>
                            <i class="fas fa-key"></i>
                            <input class="password" id="signup-password" type="password"  placeholder="Contraseña" name="signup-password" id="signup-password" required>
                            <i class="fas fa-eye" id="show"></i>

                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Confirmar Contraseña</label>
                            </Br>
                            </Br>
                            <i class="fas fa-key"></i>
                            <input class="password" id="signup-password_v" type="password"  placeholder="Confirma Contraseña" name="signup-password_v" id="signup-password_v" required>
                            <i class="fas fa-eye" id="show_v"></i>

                        </p>

                        <div id="pwMsg"> </div>
                </div>
                    <div>
                        <p class="fieldset">
                            <i class="fas fa-map-marker-alt"></i><label class="image-replace cd-username" for="dpto">Departamento</label>
                            </br>
                            </br>
                            <select class="form-select" aria-label="Default select example" name="dpto"  id="dpto" >
                                <option value="Bogotá D.C" selected="selected">Bogotá D.C</option>
                            </select>
                            </br>
                            <i class="fas fa-map-marker-alt"></i><label class="image-replace cd-username" for="city">Ciudad</label>
                            </br>
                            </br>
                            <select class="form-select" aria-label="Default select example" name="city"  id="city" >
                                <option value="Bogotá D.C" selected="selected">Bogotá D.C</option>
                            </select>

                        </p>

                        <p>
                            <label class="image-replace cd-password" for="signup-rol">Rol</label>
                                </br>
                                </br>
                            <select class="form-select" aria-label="Default select example" name="signup-rol"  id="signup-rol" required>
                                <option value="0" select>Arrendador</option>
                                <option value="1">Arrendatario</option>
                            </select>
                        </p>
                    </div>
                </div>

                <p class="fieldset">
                    <input type="checkbox" id="accept-terms" required>
                    <label for="accept-terms">Al registarte, aceptas nuestras condiciones de uso y <a href="#"
                    >Políticas de privacidad</a>.</label>
                    <!-- <i id="show-two" class="fas fa-assistive-listening-systems"></i> -->
                </p>

                <p class="fieldset">
                    <button class="button" type="submit"  style="outline">Crear cuenta</button>
                </p>
                <p>¿Ya tienes cuenta?
                    <a class="link" href="Login.php">Iniciar Sesion</a>
                </p>
            </form>
        </div>
        <div class="terms" id="terms">
            <div>
                <h4><strong>POLÍTICA DE PRIVACIDAD</strong></h4><p>&nbsp;</p><p>El presente Política de Privacidad establece los términos en que ¡House rent Armenia! usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.</p><p><strong>Información que es recogida</strong></p><p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,&nbsp; información de contacto como&nbsp; su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación.</p><p><strong>Uso de la información recogida</strong></p><p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios. &nbsp;Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.</p><p>¡House rent Armenia! está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.</p><p><strong>Cookies</strong></p><p>Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico web, y también facilita las futuras <a href="https://noticiasvalenciacf.es/" target="_blank">valencia cf noticias</a> recurrente. Otra función que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.</p><p>Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de usted, a menos de que usted así lo quiera y la proporcione directamente. Usted puede aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.</p><p><strong>Enlaces a Terceros</strong></p><p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.</p><p><strong>Control de su información personal</strong></p><p>En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.&nbsp; Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico. &nbsp;En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.</p><p>Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.</p><p>¡House rent Armenia! Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.</p>
            </div>
        </div>
    </div>
</br>

    <div>
        <!--footer-->
    <?php
        include("../views/layouts/Footer.php");
    ?>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>




    <script src="../assests/js/createUser.js"></script>
    <script src="../assests/js/dropdown.js"></script>
    <script src="../assests/js/ViewPassword.js"></script>
    <!-- <script src="../assests/js/ViewTerms.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>