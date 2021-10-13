<?php
//------------- CONEXION CON MySQLi----------------//
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "yt_colores";
// // Create connection
// $conn = new mysqli($servername, $username, $password, $db);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// return $con
//------------- CONEXION CON PDO----------------//
$link = 'mysql:host=localhost;dbname=yt_colores';
$usuario = 'root';
$pass = '';
try {
    $pdo = new PDO($link,$usuario,$pass);
    // echo 'Conectado';
} catch (PDOException $e) {
    print "¡Error!: ".$e->getMessage()."<br/>";
    die();
}