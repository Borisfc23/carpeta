<?php 
	#Esta es la pagina 1
	echo "<h2>Bienvenido a la Página 1</h2>";
    #iniciar sesión
	session_start();
    #crear dos variables de sesión
	$_SESSION["universidad"]="UTP";
	$_SESSION["facultad"]="Ingeniería de Sistemas";
	$_SESSION["anio"]=date("Y");
	#Funciona si la cookie de sesión esta aceptada en Navegador
	echo "<br><a href='pagina2.php'>ir a página2</a";
?>