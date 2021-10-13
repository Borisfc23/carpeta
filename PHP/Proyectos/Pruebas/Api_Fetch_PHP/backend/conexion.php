<?php
$link = 'mysql:host=localhost;dbname=api';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($link,$user,$pass);
} catch (PDOException $e) {
    echo 'Error: '.$e->getMessage();
}