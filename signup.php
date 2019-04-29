<html lang="es">
    <head>
        <title>Registro Usuario</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/popper.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="ContenedorLogin">
            <div class="ContenedorLoginB">
                <h1>Nuevo Usuario</h1>
                <form action="Registro.php" method="GET">
                    <div class="form-group">
                        <label for="CampoEmail">Correo Electronico: </label>
                        <input id="CampoEmail" name="CampoEmail" type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="CampoNombreUsuario">Nombre Usuario: </label>
                        <input id="CampoNombreUsuario" name="CampoNombreUsuario" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="CampoContrasena">Contraseña: </label>
                        <input id="CampoContrasena" name="CampoContrasena" type="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="CampoConfirmContrasena">Confirmar Contraseña: </label>
                        <input id="CampoConfirmContrasena" name="CampoConfirmContrasena" type="password" class="form-control" required>
                    </div>
                    <input type="submit" name="Accion" value="Registro" class="btn btn-success">
                    <p id="MensajeError"></p>
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
        </div>
    </body>
</html>