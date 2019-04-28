<?php

if(isset($_GET['Accion'])){
    $Accion=$_GET['Accion'];
    if($Accion=="Registro"){
        $CampoEmail=$_GET['CampoEmail'];
        $CampoNombreUsuario=$_GET['CampoNombreUsuario'];
        $CampoContrasena=$_GET['CampoContrasena'];
        $CampoConfirmContrasena=$_GET['CampoConfirmContrasena'];
        Registrio($CampoEmail,$CampoNombreUsuario,$CampoContrasena,$CampoConfirmContrasena);
    }else if($Accion=="Login"){
        $CampoNombreUsuario=$_GET['CampoNombreUsuario'];
        $CampoContrasena=$_GET['CampoContrasena'];
        IniciarSesion($CampoNombreUsuario,$CampoContrasena);
    }
}

function Registrio($CampoEmail,$CampoNombreUsuario,$CampoContrasena,$CampoConfirmContrasena){
    include('modelo/conexionDb.php');
    $Consulta=mysqli_fetch_array(ConsultarUsuario($CampoNombreUsuario));
    if($CampoContrasena==$CampoConfirmContrasena){
        if(!isset($Consulta)){
            $sql="INSERT INTO usuario (CorreoElectronico, NombreUsuario, Contrasena) 
            VALUES ('$CampoEmail', '$CampoNombreUsuario', '$CampoContrasena')";
            $resultado=mysqli_query($Conexion,$sql);
            if(!$resultado){
                die("Error al Registrar");  
            }else{
                header("Location: login.html");
            }
        }else{
            echo "el usuario ya existe";
        }
    }else{
        echo "Las contraseñas no coinciden";
    }
}
function ConsultarUsuario($CampoNombreUsuario){
    include('modelo/conexionDb.php');
    $sql="SELECT * FROM usuario WHERE NombreUsuario='$CampoNombreUsuario'";
    $resultado=mysqli_query($Conexion,$sql);
    return $resultado;
}

function IniciarSesion($CampoNombreUsuario,$CampoContrasena){
    include('modelo/conexionDb.php');
    $sql="SELECT * FROM usuario WHERE NombreUsuario='$CampoNombreUsuario' && Contrasena='$CampoContrasena'";
    $resultado=mysqli_query($Conexion,$sql);
    $Registro=mysqli_fetch_array($resultado,MYSQLI_ASSOC);
    printf($Registro['NombreUsuario']);
    return $resultado;
}

?>