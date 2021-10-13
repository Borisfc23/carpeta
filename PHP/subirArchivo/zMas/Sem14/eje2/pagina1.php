<?php 
	echo "<h2>Bienvenidos a la página1.php</h2>";
	#iniciar sesión
	session_start();
    #crear dos variables de sesión
	$_SESSION['nombre']="Oscar";
	$_SESSION['apellido']="Barnett";
	#ir a pagina2.html
	echo"<a href='pagina2.html'>Ir a página2.html</a>";
?>