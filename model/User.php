<?php
    if(isset($_POST['funcion'])){
        RegistrarUsuario();
    }

    function ConsultaUsername($username){
    include 'conexiondb.php';
    $Consulta=$conexion->query("select * from usuario where username=".$username);
     return $Consulta;
    }

    function RegistrarUsuario(){
        if(ConsultaUsername($_POST['username']));
    }

?>