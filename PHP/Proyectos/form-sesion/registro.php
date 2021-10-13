<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Registro Usuario</h3>
    <form action="agregar_usuario.php" method="POST">
        <input type="text" name="usuario" placeholder="Ingrese Usuario">
        <input type="password" name="contrasena" placeholder="Ingrese Contraseña">
        <input type="password" name="contrasena2" placeholder="Repetir Contraseña">
        <button type="submit">Guardar</button>
    </form>

    <h3>Login Usuario</h3>
    <form action="login.php" method="POST">
        <input type="text" name="usuario" placeholder="Ingrese Usuario">
        <input type="password" name="contrasena" placeholder="Ingrese Contraseña">        
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>