<?php 
include_once 'bd.php';
class User extends BD{
    
    private $nombre;
    private $username;
    
    public function crearUsuario($nombre,$user,$pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('INSERT INTO usuarios(nombre,username,password) VALUES (:nomb,:user,:pass)');
        $query->execute(['nomb'=>$nombre,'user'=>$user,'pass'=>$md5pass]);
    }

    public function exiteUsuario($user,$pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT *FROM usuarios WHERE username=:user AND password=:pass');
        $query->execute(['user'=>$user,'pass'=>$md5pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function asignarUsuario($user){
        $query = $this->connect()->prepare('SELECT *FROM usuarios WHERE username=:user');
        $query->execute(['user'=>$user]);
        foreach ($query as $usuario) {
            $this->nombre = $usuario['nombre'];
            $this->username = $usuario['username'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}
?>