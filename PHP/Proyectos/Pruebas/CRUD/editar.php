<?php
include_once("conexion.php");
$id = $_GET['id'];
$color = $_GET['color'];
$descripcion = $_GET['descripcion'];

$resultado = $mysqli->prepare('UPDATE colores SET color=? , descripcion=? WHERE id=?');
$resultado ->bind_param("ssi",$color,$descripcion,$id);
$resultado->execute();

$mysqli -> close();
header("location: index.php");
