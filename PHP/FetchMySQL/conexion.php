<?php 
    $conexion = "mysql:host=localhost;dbname=crudfetch";
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO($conexion,$user,$pass);
    } catch (PDOException $e) {
        echo 'Conexion Fallida';
    }
?>