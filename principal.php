<?php
//esta comprobación verifica si a iniciado sesión para llevarlo a la pagina principal
//o lo lleva al login
session_start();
if(isset($_SESSION['IdUser'])){
    header('location: principal.php');
}else{
    header('location: login.php');
}
?>