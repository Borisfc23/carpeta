<?php 
    $dominio = "localhost";
    $user = "root";
    $password = "";
    $db = "todolistDB";

    $conexion= new mysqli($dominio,$user,$password,$db);
    if($conexion->connect_error){
        die("Conexion Fallida".$conexion->connect_error);
    }
    echo "Conexion Exitosa...";

    // $sqlCrearDB = "CREATE DATABASE todolistDB";
    // if($conexion->query($sqlCrearDB) === true){
    //     echo "Base de Datos creada Correctamente";
    // }else{
    //     echo "Base de Datos ERROR!!!".$conexion->error;
    // }

    $sqlCrearTable = "CREATE TABLE todoTable(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        texto VARCHAR(100) NOT NULL,
        completado BOOLEAN NOT NULL,
        timestamp TIMESTAMP
        )";
    if($conexion->query($sqlCrearTable) === true){
        echo "Tabla creada correctamente";
    }else{
        echo "Error al Crear la Tabla".$conexion->error;
    }
?>