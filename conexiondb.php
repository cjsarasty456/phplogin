<?php

//archivo para conectar con la base de datos
try{
    // en la conexión se especifica la ruta del servidor de base de datos
    //se especifica el nombre de la base de datos que vamos a acceder
    //se especifica el usuario y contraseña que tiene acceso a la base de datos
    $conexion=new PDO('mysql:host=localhost;dbname=loginbase','usuario','123456789')
}catch(PDOException $error_conexion){
    echo "Error: ".$error_conexion->getMessage();
}

?>