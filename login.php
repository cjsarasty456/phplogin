<?php
//esta comprobación verifica si a iniciado sesión para llevarlo a la pagina principal
//o lo lleva al login
session_start();
if(isset($_SESSION['IdUser'])){
    header('location: index.php');
}
?>
<html lang="es">
    <head>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/popper.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Inicio Sesión</title>
    </head>
    <body>
        <div class="ContenedorLogin">
            <div class="ContenedorLoginB">
                <h1>Bienvenido:</h1>
                <form action="Registro.php" method="GET">
                    <div class="form-group">
                        <label for="CampoNombreUsuario">Nombre Usuario: </label>
                        <input id="CampoNombreUsuario" name="CampoNombreUsuario" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="CampoContrasena">Contraseña: </label>
                        <input id="CampoContrasena" name="CampoContrasena" type="password" class="form-control" required>
                    </div>
                    <button type="submit" name="Accion" value="Login"  class="btn btn-success">Iniciar Sesión</button>
                    <br>
                    <br>
                    <a href="signup.php" >
                        Registrarse
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