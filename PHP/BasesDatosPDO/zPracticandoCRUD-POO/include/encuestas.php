<?php
include_once 'db.php';
class Encuesta extends DB{
    private $totalVotos;
    private $opcionSeleccionada;

    public function setOpcionSeleccionada($opcion){
        $this->opcionSeleccionada = $opcion;
    }
    public function getOpcionSeleccionada(){
        return $this->opcionSeleccionada;
    }
    public function Votar(){
        $query=$this->connect()->prepare("UPDATE lenguajes SET votos = votos +1 WHERE opcion=:opcion");
        $query->execute(array('opcion'=>$this->opcionSeleccionada));
    }
    public function MostrarVotos(){
        return $this->connect()->query("SELECT *FROM lenguajes");
    }
    public function getTotalVotos(){
        $query = $this->connect()->query("SELECT SUM(votos) AS total_votos FROM lenguajes");
        $this->totalVotos = $query->fetch(PDO::FETCH_OBJ)->total_votos;
        return $this->totalVotos;
    }
    public function getPorcentajeTotal($votos){
        return round(($votos/$this->totalVotos)*100,0);
    }
    
    public function AgregarLenguaje($nuevo){
        $query = $this->connect()->prepare("INSERT INTO lenguajes(opcion,votos) VALUES (:opcion,:votos)");
        $query->execute(array('opcion'=>$nuevo,'votos'=>0));
    }
    public function EliminarLenguaje($id){
        $query = $this->connect()->prepare("DELETE FROM lenguajes WHERE id=:id");
        $query->execute(array('id'=>$id));
    }
}