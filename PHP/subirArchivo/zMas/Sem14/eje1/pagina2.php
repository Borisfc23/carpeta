<?php 
	#Esta es la pagina 2
	echo "<h2>Bienvenido a la Página 2</h2>";
	#Obtener zona horaria actual
	$zonahoraria = date_default_timezone_get();
    echo 'Zona horaria default: ' . $zonahoraria."<br>";
    #Establecer zona horaria
    date_default_timezone_set('America/Lima');
    #Verificar la zona horaria
    $zonahoraria = date_default_timezone_get();
    echo 'Nueva Zona horaria default: ' . $zonahoraria."<br><br>";

    #inicia sesión
	session_start();
    #muestra valores de las variables de sesión
	echo "Universidad-> ".$_SESSION["universidad"]."<br>";
	echo "Conectada el año-> ".$_SESSION["anio"]."<br>";
	#Puede ser conveniente usar el SID como se hizo en pagina1.php
	echo "<br><a href='pagina1.php'>ir a página1</a";
?>