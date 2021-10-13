<?php 
    include_once 'database.php';
    include_once 'user_session.php';
    $userSession = new UserSession();
    // session_start();
    if(isset($_GET['cerrar_session'])){
        $userSession->closeSession();
    }

    if(isset($_SESSION['rol'])){
        $user = $userSession->getCurrentUser();
        switch ($user) {
            case 1:
                header('location: admin.php');
                break;
            case 2:
                header('location: colab.php');
                break;
            default:
                break;
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new BD();
        $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE username=:username AND password=:password');
        $query->execute(['username'=>$username,'password'=>$password]);

        $row = $query->fetch(PDO::FETCH_NUM);//El fetch num es similar al fetch assoc pero devuelve loas valores en posiciones de numeros
        if($row == true){
            $rol = $row[3];//para ver el rol id
            $tipo_user = $userSession->setCurrentUser($rol);
            // $_SESSION['rol'] = $rol;
            switch ($userSession->getCurrentUser()) {
                case 1:
                    header('location: admin.php');
                    break;
                case 2:
                    header('location: colab.php');
                    break;
                default:
                    break;
            }
        }else{
            echo "El usuario y/o contraseña son incorrectas";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <p><?php echo !isset($_SESSION['rol']) ? 'No hay usuario' : $userSession->getCurrentUser() ?></p>
    <form action="" method="post">
        username: <br /><input type="text" name="username"><br />
        password: <br /><input type="text" name="password"><br />
        <input type="submit">
    </form>
</body>

</html>