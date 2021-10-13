<?php
session_start();
include_once './conexion.php';
$usuari_login = $_POST['usuario'];
$contra_login = $_POST['contrasena'];

// Uusuario Exite
$sql = 'SELECT *FROM usuarios WHERE nombre=?';
$sentencia = $pdo->prepare($sql);
$sentencia ->execute(array($usuari_login));
$resultado = $sentencia->fetch();
if(!$resultado){
    echo "No existe usuario";
    die();
}
if(password_verify($contra_login,$resultado['contrasena'])){    
    $_SESSION['admin']= $usuari_login;
    header('location:restringido.php');
}else{
    echo "Contraseña Incorrecta";
    die();  
}