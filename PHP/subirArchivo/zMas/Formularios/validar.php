<?php 
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];  
$conexion = mysqli_connect("localhost","root","","sietesopasperu");
$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";
$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);
if($filas > 0){
    header("location: ../Inicio.html");
}else{
    echo("Usuario o Contraseña incorrecto");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
 ?>