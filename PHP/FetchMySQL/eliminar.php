<?php 
    $data = file_get_contents("php://input");//Asi capturamos el id de cada producto
    require 'conexion.php';
    $query = $pdo->prepare("DELETE FROM productos WHERE id=:id");
    $query->bindParam(":id",$data);
    $query->execute();    
    echo("ok")
?>