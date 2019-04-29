<?php
//esta comprobación verifica si a iniciado sesión para llevarlo a la pagina principal
//o lo lleva al login
session_start();
if(!isset($_SESSION['IdUser'])){
    header('location: login.php');
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