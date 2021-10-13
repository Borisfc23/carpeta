<?php 
include_once 'db.php';
class consultaTodo extends BD{
    public function mostrarTodo(){
        return $this->connect()->query("SELECT *FROM todoTable ORDER BY  timestamp DESC");
        // return $query;
    }
    public function agregarTodo($texto){
        if(!empty($texto)){
            $query = $this->connect()->prepare("INSERT INTO todoTable(texto,completado) VALUES (:texto,0)");
            $query->execute(['texto'=>$texto]);
        }
    }
}