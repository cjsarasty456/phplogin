<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Inicio de Sesión</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/login.css">
        <script src="js/materialize.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <div class="ContenedorLogin">
            <h1 style="text-align: center">Registro</h1>
            <form>
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input id="CampoCorreo" name="CampoCorreo" type="email" class="validate" required value="<?php if(isset($_POST['CampoCorreo'])){echo $_POST['CampoCorreo'];} ?>">
                    <label for="CampoCorreo">Correo Electrónico</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="CampoNombreUsuario" name="CampoNombreUsuario" type="text" class="validate" required value="<?php if(isset($_POST['CampoNombreUsuario'])){echo $_POST['CampoNombreUsuario'];} ?>">
                    <label for="CampoNombreUsuario">Nombre de Usuario</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="CampoContrasena" name="CampoContrasena" type="password" class="validate" required value="<?php if(isset($_POST['CampoContrasena'])){echo $_POST['CampoContrasena'];} ?>">
                    <label for="CampoContrasena">Contraseña</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="CampoConfirmContrasena" name="CampoConfirmContrasena" type="password" class="validate" required value="<?php if(isset($_POST['CampoConfirmContrasena'])){echo $_POST['CampoConfirmContrasena'];} ?>">
                    <label for="CampoConfirmContrasena">Confirmar Contraseña</label>
                </div>
                <a type="button" class="waves-effect waves-ligh btn-large" onclick="VerificarRegistro()">
                    Registrarse
                </a>
                <br>
                <br>

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
    </body>
</html>
<script>
    Alerta=document.getElementById("MensajeError");
    function verificarContrasena(){
        mensaje=document.getElementById("MensajeError");
    }
    function VerificarRegistro() {
        Alerta.innerHTML="";
        var email=document.getElementById("CampoCorreo").value;
        var username=document.getElementById("CampoNombreUsuario").value;
        var password=document.getElementById("CampoContrasena").value;
        var ConfirmPassword=document.getElementById("CampoConfirmContrasena").value;
        if(password!=ConfirmPassword){
            
            Alerta.innerHTML="las Contraseñas no coinciden";
        }else{
            $.ajax({
                url: "model/user.php",
                method: "post",
                async: false,
                data:{funcion:"RegistrarUsuario",email:email,username:username,password:password},
                dataType: "json",
                success: function(respuesta) {
                //Accion diferente al otro AJAX
                }
            });
        }
    }
</script>

