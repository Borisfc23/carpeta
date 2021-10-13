<?php 
include_once 'conexion.php';

$usuario_registro = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];

//Verificar si existe usuario duplicado
$sql_buscar = 'SELECT *FROM usuarios WHERE nombre=?';
$sentencia_buscar = $pdo -> prepare($sql_buscar);
$sentencia_buscar -> execute(array($usuario_registro));
$resutado = $sentencia_buscar->fetch();
if($resutado){
    echo 'El usuario ya existe';
    die();
}else{
    $contrasena = password_hash($contrasena,PASSWORD_DEFAULT);
    echo '<pre>';
    var_dump($usuario_registro);
    var_dump($contrasena);
    var_dump($contrasena2);
    echo '<pre>';
    if(password_verify($contrasena2, $contrasena)){
        echo 'La contraseña es Correcta';        
        $sentencia_agregar = $pdo -> prepare('INSERT INTO usuarios(nombre,contrasena) VALUES (?,?)');
        if($sentencia_agregar -> execute(array($usuario_registro,$contrasena))){
            echo 'Agregado Correctamente';
        }else{
            echo 'Error al Agregar';
        }
        $sentencia_agregar = null;
        $pdo = null;
    }else{
        header('location:login.php');
    }
}
?>