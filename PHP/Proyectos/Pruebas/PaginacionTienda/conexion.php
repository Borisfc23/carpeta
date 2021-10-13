<?php
$link = 'mysql:host=localhost;dbname=paginacion';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($link,$user,$pass);
    echo 'Conexion Exitosa!!!';
} catch (PDOException $e) {
    echo 'Error: '.$e->getMessage();
}