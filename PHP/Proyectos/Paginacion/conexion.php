<?php 
$link = 'mysql:host=localhost;dbname=paginacion';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($link, $user, $pass);
    echo 'Conectado a Data Base...';
} catch (PDOException $e) {
    echo 'Error: '.$e->getMessage();
    die();
}