<?php
session_start();
if(isset($_SESSION['admin'])){
    echo '<h1>Bienvenido</h1>';
    echo '<a href="cerrar.php">Cerrar Sesion</a>';
}else{
    header('location:login.php');
}
?>