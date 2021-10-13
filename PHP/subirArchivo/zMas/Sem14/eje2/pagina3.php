<?php  
	echo "<h2> Bienvenidos a la pagina3.php</h2>";	
	#iniciar sesión
	session_start();
	#mostrar contenido de variables de sesión
	$nom=$_SESSION['nombre'];
	echo "Hola ".$nom." ".$_SESSION['apellido'];
	#ir a pagina2.html
	echo"<br><a href='pagina4.php'>Cerrar la sesión</a>";
?>