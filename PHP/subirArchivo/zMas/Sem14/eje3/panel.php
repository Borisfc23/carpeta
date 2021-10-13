<?php 
#iniciar sesión
session_start();
#ob_start();

#si ya está iniciada la sesión 
if(isset($_SESSION['txtUsu'])){
  #direccionar hacia panel.php	
  echo '';
  }
else{
  echo '<script> window.location="index.php"; </script>';
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mi contenido</title>
</head>
<body>
<h2>Mi página de contenido</h2>	
<div>
	<article>
		Ejemplo de login en formulario web.
	</article>
	<a href="salir.php"><button>Salir</button></a>
</div>
</body>
</html>