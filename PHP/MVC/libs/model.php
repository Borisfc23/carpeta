<?php 
class Model{//Tiene toda la logica de como moldeamos y trabajamos los datos
    //Aqui van las conexion los querys
    function __construct(){
        $this->db = new Database();
    }
}
?>