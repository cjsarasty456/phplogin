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
    }
}

function Registrio($CampoEmail,$CampoNombreUsuario,$CampoContrasena,$CampoConfirmContrasena){
    include('modelo/conexionDb.php');
    $Consulta=mysqli_fetch_array(ConsultarUsuario($CampoNombreUsuario));
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
}
function ConsultarUsuario($CampoNombreUsuario){
    include('modelo/conexionDb.php');
    $sql="SELECT * FROM usuario WHERE NombreUsuario='$CampoNombreUsuario'";
    $resultado=mysqli_query($Conexion,$sql);
    return $resultado;
}

function IniciarSesion(){
    include('modelo/conexionDb.php');
    $sql="SELECT * usuario where NombreUsuario=='$CampoNombreUsuario' && Contrasena=='$CampoContrasena'";
    $resultado=mysqli_query($Conexion,$sql);
    return $resultado;
}

?>