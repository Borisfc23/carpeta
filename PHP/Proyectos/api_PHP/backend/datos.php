<?php 
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); //Para los Cors
if($_GET['moneda'] == 'euro' || $_GET['moneda'] == 'dolar'){
    include_once 'conexion.php';

    $sql = 'SELECT *FROM '.$_GET['moneda'];
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();
    $datos = $sentencia->fetchAll();
}else{
    echo 'Solicitud No encontrada';
}

echo json_encode($datos);//De esta forma parseas los datos y puedes usarlo los que trajiste  de la BD