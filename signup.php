<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Inicio de Sesión</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/login.css">
        <script src="js/materialize.min.js"></script>
    </head>
    <body>
        <div class="ContenedorLogin">
            <h1 style="text-align: center">Registro</h1>
            <form>
                <div class="input-field">
                        <i class="material-icons prefix">email</i>
                    <input id="CampoNombreUsuario" type="email" class="validate" required>
                    <label for="CampoNombreUsuario">Correo Electrónico</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="CampoNombreUsuario" type="text" class="validate" required>
                    <label for="CampoNombreUsuario">Nombre de Usuario</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="CampoContrasena" type="password" class="validate" required>
                    <label for="CampoContrasena">Contraseña</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="CampoConfirmContrasena" type="password" class="validate" required>
                    <label for="CampoConfirmContrasena">Confirmar Contraseña</label>
                </div>
                <button type="submit" class="waves-effect waves-ligh btn-large">
                    Registrarse
                </button>
                <br>
                <br>
                <a href="login.php" >
                    ¿Ya tienes cuenta de usuario?
                </a>
                <br>
                <a href="signup.php" >
                    ¿Olvidó su contraseña?
                </a>
            </form>
        </div>
    </body>
</html>