<?php 
    include_once 'user_sesion.php';
    include_once 'user.php';
    $userSession = new UserSession();
    $user = new User();
    $usuario = $userSession->getCurrentUser();
    $user->changeState($usuario,0);

    $userSession->closeSession();

    header("location: ../index.php");
?>