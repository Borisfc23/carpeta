<?php 
    include_once './include/user_sesion.php';
    include_once './include/user.php';

    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
        $user->asignarUsuario($userSession->getUser());
        include_once 'views/home.php';
    }
    else if(isset($_POST['username']) && isset($_POST['password'])){
        $userFormulario = $_POST['username'];
        $passFormulario = $_POST['password'];
        if($user->exiteUsuario($userFormulario,$passFormulario)){
            $userSession->setUser($userFormulario);
            $user->asignarUsuario($userFormulario);
            include_once 'views/home.php';
        }else{
            $msjError = "<p style='color:red'>Usuario y/o Contraseña Incorrectos</p>";
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
                $user->crearUsuario($_GET['nombre'],$_GET['user'],$_GET['pass']);                  
                $msj =  "<p style='color:green'>Registro guardado Exitosamente</p>";
            }            
                include_once 'views/registro.php';
        }else{
            $msj = "<p style='color:red'>Registro Invalido</p>";
            include_once 'views/registro.php';
        }
    }
    else{
        include_once 'views/login.php';
    }
?>