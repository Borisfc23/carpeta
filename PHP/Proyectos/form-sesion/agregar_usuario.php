<?php
// echo password_hash("Boris", PASSWORD_DEFAULT);//De esta forma se encripta la contra

include_once './conexion.php';

$usuario_nuevo = $_POST['usuario']; 
$contrasena = $_POST['contrasena']; 
$contrasena2 = $_POST['contrasena2']; 

// Uusuario Exite
$sql = 'SELECT *FROM usuarios WHERE nombre=?';
$sentencia = $pdo->prepare($sql);
$sentencia ->execute(array($usuario_nuevo));
$resultado = $sentencia->fetch();

if($resultado){
    echo "El usuario ya existe";
    die();
}else{
    $contrasena = password_hash($contrasena,PASSWORD_DEFAULT);
    echo "<pre>";
    var_dump($usuario_nuevo);
    var_dump($contrasena);
    var_dump($contrasena2);
    echo "<pre>";
    if(password_verify($contrasena2,$contrasena)){
        echo("La contraseña es Correcta!!!");
    
        $agregar = $pdo->prepare('INSERT INTO usuarios (nombre,contrasena) VALUES (?,?)');
        if($agregar -> execute(array($usuario_nuevo,$contrasena))){
            echo "Agregado Correctamente<br>";
        }else{
            echo "Error al Agregar";
        }
    
        $agregar = null;
        $pdo = null;
        // header("location:registro.php")
    }else{
        header("location:registro.php");
        echo 'La contraseñas no son iguales.';
    }
}