<?php 

include_once 'user_session.php';
$user_session = new UserSession();
if(!isset($_SESSION['rol'])){
    header('location:login.php');
}else{
    if($_SESSION['rol']!=1){
        header('location:login.php');
    }
}
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
    <h1>Administrador--- <?php echo $user_session->getCurrentUser()?> </h1>
    <a class="nav-link text-white" href="logout.php">Cerrar Sesion</a>
</body>

</html>