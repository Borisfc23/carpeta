<?php
session_start();
if(isset($_SESSION['admin'])){
    echo "Bienvendio";
    echo '<a href="cerrar.php">Cerrar sesion</a>';
}else{
    header('location:registro.php');
}