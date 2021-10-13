<?php 
class UserSession{
    public function __construct(){
        session_start();
    }
    public function setCurrentUser($user){
        $_SESSION['rol']=$user;
    }
    public function getcurrentuser(){
        return $_SESSION['rol'];
    }
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}
?>