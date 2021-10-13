<?php
#iniciar sesión
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Página de validación</title></head>
<body>
<?php  
if(isset($_POST['btnEnv'])){
   $txtUsu=$_POST['txtUsu'];
   $txtPas=$_POST['txtPas'];
   $_SESSION['intentos'] = isset($_SESSION['intentos'])?$_SESSION['intentos']:0;
   if($_SESSION['intentos']==5){
     unset($_SESSION['intentos'] );
      echo '<script> alert("Cantidad de intentos agotado!"); </script>';
      echo '<a href="salir.php"><button>volver</button></a>';
      exit;
  }
   if(($txtUsu=='oscar') && ($txtPas=='barnett'))
     {   $_SESSION['txtUsu']=$txtUsu;
     	  echo "iniciando sesión para ".$_SESSION['txtUsu']."<br>";
         echo '<script> window.location="panel.php"; </script>';
     }    
   else{

        $_SESSION['intentos']++;
         echo '<script> alert("Usuario o password incorrectos"); </script>';
         echo '<script> window.location="index.php"; </script>'; 	
     }
}   
?>
</body>
</html>