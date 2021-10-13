<?php 
    include_once 'user_sesion.php';
    $userSession = new UserSession();
    $userSession->closeSession();

    header("location: ../index.php");
?>