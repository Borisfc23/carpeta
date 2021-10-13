<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "yt_colores";

// Create connection
$mysqli = new mysqli($servername, $username, $password,$db);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
echo "<script>console.log('Connected successfully')</script>";
return $mysqli;
