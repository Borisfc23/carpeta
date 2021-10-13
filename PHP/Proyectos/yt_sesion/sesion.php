<?php 
session_start();
$login = 'Boris';

$_SESSION['admin'] = $login;

if(isset($_SESSION['admin'])){
    header("Location: index.php");
}else{
    echo "Sesion rechazada";
}
?>