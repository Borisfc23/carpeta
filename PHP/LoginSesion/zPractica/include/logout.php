<?php 
    include 'user_sesion.php';
    $userSession = new UserSession();
    $userSession->cerrarSession();

    header('location: ../indexLogin.php');
?>