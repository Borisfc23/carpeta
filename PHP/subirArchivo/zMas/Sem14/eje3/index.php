<?php
#iniciar sesión
session_start();
#si ya está iniciada la sesión 
if(isset($_SESSION['txtUsu']))
  #direccionar hacia panel.php	
  echo '<script> window.location="panel.php"; </script>'; 
?>

<!Doctype html>
<html>
<head><title>Ejemplo de login</title></head>
<body>
	<h2>Inicio de sesión</h2>
	<form name="frmLog" method="POST" action="validar.php">
		<input type="text" name="txtUsu" autocomplete="off" required="true">
		<input type="password" name="txtPas" autocomplete="off" required="true">
		<input type="submit" name="btnEnv" value="Enviar">	
	</form>
</body>