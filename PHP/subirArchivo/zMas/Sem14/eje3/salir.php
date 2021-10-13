<?php 
#iniciar sesión
session_start();
#destruye la sesión
session_destroy();
#mensaje
echo '<h2> La sesión se cerró correctamente </h2>';
#direccionar a index.php
echo '<script> window.location="index.php"; </script>'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cerrando sesión...</title>
</head>
<body>
     <script language="javaScript">location.href ="index.php";</script>
</body>
</html>