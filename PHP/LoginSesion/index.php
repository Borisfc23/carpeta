<?php
    include_once 'include/user.php';
    include_once 'include/user_sesion.php';

    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
        $user->setUser($userSession->getCurrentUser());
        include_once 'views/home.php';
    }
    else if(isset($_POST['username']) && isset($_POST['password'])){
        $userForm = $_POST['username'];
        $passForm = $_POST['password'];
        if($user->userExists($userForm,$passForm)){            
            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);

            include_once 'views/home.php';
        }else{
            $errorLogin =  "<p style='color:red'>Usuario y/o Contraseña Incorrectos</p>";
            include_once 'views/login.php';
        }        
    }
    else if($_GET){
        $nombre = $_GET['nombre'];
        $usuario = $_GET['user'];
        $pass = $_GET['pass'];
        if(isset($nombre) && isset($user) && isset($pass)){
            if(empty(trim($nombre)) ||empty(trim($pass)) || empty(trim($usuario))){
                $msj = "<p style='color:red'>Registro Incompleto, llenar correctamente.</p>";
            }else{
                $user->createUser($_GET['nombre'],$_GET['user'],$_GET['pass']);                  
                $msj =  "<p style='color:green'>Registro guardado Exitosamente</p>";
            }            
                include_once 'views/register.php';
        }else{
            $msj = "<p style='color:red'>Registro Invalido</p>";
            include_once 'views/register.php';
        }
    }
    else{        
        include_once 'views/login.php';
    }
?>