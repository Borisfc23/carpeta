<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="sesion.php">Iniciar Sesion</a>
    <a href="protegido.php">Contenido Protegido</a>
    <h3>Bienvenido: <?php echo isset($_SESSION['admin'])?$_SESSION['admin']:'Invitado'?></h3>
</body>
</html>