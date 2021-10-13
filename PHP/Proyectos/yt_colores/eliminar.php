<?php
include_once "conexion.php";
$id = $_GET['id'];//Obitene lo k esta en la url
$sql_eliminar = 'DELETE FROM colores WHERE id=?';
$sentencia_eliminar = $pdo->prepare($sql_eliminar);
$sentencia_eliminar->execute(array($id));

// Cerramos conexion y sentencia
$pdo = null;
$sentencia_eliminar = null;
header('location: index.php');
