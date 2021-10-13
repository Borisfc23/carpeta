<?php
session_start();
include_once "./conexion.php";
$usuario_login = $_POST['usuario'];
$contrasena_login = $_POST['contrasena'];

$consulta = $pdo -> prepare('SELECT *FROM usuarios WHERE nombre=?');
$consulta -> execute(array($usuario_login));
$resultado = $consulta -> fetch();
if(!$resultado){
    echo "El usuario No existe";
    die();
}
if(password_verify($contrasena_login,$resultado['contrasena'])){
    $_SESSION['admin'] = $usuario_login;
    header('location:restringido.php');
}else{
    echo "Contraseña Incorrecta";
    die();
}
?>