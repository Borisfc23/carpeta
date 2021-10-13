<?php 
include_once 'db.php';

class Survey extends DB{
    private $totalVotes;
    private $optionSelected;
    
    public function setOptionSelected($option){
        $this->optionSelected = $option;
    }

    public function getOptionSelected(){
        return $this->optionSelected;
    }

    public function vote(){
        $query = $this->connect()->prepare("UPDATE lenguajes SET votos = votos +1 WHERE opcion = :opcion");
        $query -> execute(array('opcion'=>$this->optionSelected));
    }

    public function showResults(){
        return $this->connect()->query("SELECT *FROM lenguajes");
    }

    public function getTotalVotes(){
        $query = $this->connect()->query("SELECT SUM(votos) AS 'votos_totales' FROM lenguajes");
        $this->totalVotes = $query->fetch(PDO::FETCH_OBJ)->votos_totales; //EL fetch_obj devuele un objeto anonimo solo el valor Y SE A
        //CCEDE ASI  fetch(PDO::FETCH_OBJ)->votos_totales, mientras que fetch(PDO::FETCH_ASSOC) devuelve un arreglo
        return $this->totalVotes;
    }

    public function getPercentageVotes($votes){
        return round(($votes/$this->totalVotes)*100,0);
        // return round(($votes/intval($this->totalVotes['votos_totales']))*100,0);//Este y el de abaj pra cuando se usa FETCH_ASSOC
        // return round(($votes/intval($this->getTotalVotes()))*100,0);
    }
}
?>