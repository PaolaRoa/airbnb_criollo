<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- BOOTSTRAP 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>¡CASAS EN RENTA ARMENIA!</title>

    <link rel="stylesheet" href="../assests/css/register.css">
</head>
<body>
    <div id="cd-signup" class="form">
        <form class="cd-form">
            <h1>Registrate</h1>
            <p class="fieldset">
                <label class="image-replace cd-username" for="signup-username">Username</label>
                    </Br>
                    </Br>
                <i class="fas fa-user"></i>
                <input class="text" id="signup-username" type="text" placeholder="Username" name ="signup-username" id="signup-username" required>
            </p>

            <p class="fieldset">
                <label class="image-replace cd-email" for="signup-email">E-mail</label>
                </Br>
                </Br>
                <i class="fas fa-envelope"></i>
                <input class="text" id="signup-email" type="email" placeholder="E-mail" name="signup-email" id="signup-email" required>
            </p>

            <p class="fieldset">
                <label class="image-replace cd-password" for="signup-password">Password</label>
                </Br>
                </Br>
                <i class="fas fa-key"></i>
                <input class="text" id="signup-password" type="password"  placeholder="Password" name="signup-password" id="signup-password" required>
                <a href="#0" class="hide-password"><i class="fas fa-eye"></i></a>
            </p>
            <p>
                <label>Rol</label>
                    </Br>
                    </Br>
                <select class="form-select" aria-label="Default select example" name="rol"  id="rol">
                    <option selected>Selecciona en rol</option>
                    <option value="0">Arrendador</option>
                    <option value="1">Arrendatario</option>
                </select>
            </p>

            <p class="fieldset">
                <input type="checkbox" id="accept-terms" required>
                <label for="accept-terms">Al registarte, aceptas nuestras condiciones de uso y <a href="#0">Políticas de privacidad</a>.</label>
            </p>

            <p class="fieldset">
                <input class="button" type="submit" value="Create account">
            </p>
            <p>¿Ya tienes cuenta?
                <a class="link" href="login.html">Iniciar Sesion</a>
            </p>
        </form>
        </div> <!-- cd-signup -->
     </div>
</body>
</html>