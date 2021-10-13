<?php
include_once "conexion.php";
$id = $_GET['id'];
$consulta = $mysqli->prepare("DELETE FROM colores WHERE id=?");
$consulta -> bind_param("i",$id);
$consulta -> execute();

$mysqli -> close();
header("location: index.php");