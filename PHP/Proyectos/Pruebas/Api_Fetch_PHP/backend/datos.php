<?php
header('Content-type:application/json');
header('Access-Control-Allow-Origin: *');
if($_GET['moneda']=='dolar' || $_GET['moneda']=='euro'){
    include_once 'conexion.php';
    $peticion = $pdo ->prepare('SELECT *FROM '.$_GET['moneda']);
    $peticion->execute();
    $datos = $peticion->fetchAll();
}else{
    echo 'Solicitud no Encontrada';
    die();
}
echo json_encode($datos);