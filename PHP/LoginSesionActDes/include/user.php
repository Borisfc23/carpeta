<?php 
include_once 'bd.php';
class User extends BD{
    private $nombre;
    private $username;
    private $pass;

    public function createUser($nom,$user,$pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('INSERT INTO usuarios(nombre,username,password) VALUES (:nombre,:user,:pass)');
        $query->execute(['nombre'=>$nom,'user'=>$user,'pass'=>$md5pass]);
    }
   
    public function userExists($user, $pass){
        $md5pass = md5($pass); //Sirve para cifrar la contraseña
        $query = $this->connect()->prepare('SELECT *FROM usuarios WHERE username=:user AND password=:pass');
        $query->execute(['user'=>$user,'pass'=>$md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT *FROM usuarios WHERE username=:user');
        $query->execute(['user'=>$user]);

        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['username'];
            $this->pass = $currentUser['password'];
        }
    }

    public function getNombre(){
        return ['username'=>$this->username,'password'=>$this->pass];
    }

    public function changeState($user,$estado){
        $query=$this->connect()->prepare("UPDATE usuarios SET estado=:estado WHERE username=:user");
        $query->execute(['estado'=>$estado,'user'=>$user]);
    }
}