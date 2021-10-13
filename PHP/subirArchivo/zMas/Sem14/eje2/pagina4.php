<?php 
#iniciar sesión
session_start();
#eliminar los valores de las variables
session_unset();
#destruye la sesión
session_destroy();
#mensaje
echo "<h2 style='color:blue';>La sesión se cerró correctamente!</h2>";
?>