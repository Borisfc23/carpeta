<?php 
    include_once 'db.php';
    class Model extends DB{
        function getAll(){
            $alumnos = array();
            $alumnos['items'] = array();
            $query = $this->connect()->query("SELECT *FROM productos");
            while($row = $query->fetch()){
                array_push($alumnos['items'],array(
                    'id'=>$row['id'],
                    'codigo'=>$row['codigo'],
                    'producto'=>$row['producto'],
                    'precio'=>$row['precio'],
                    'cantidad'=>$row['cantidad']
                ));
            }
            return $alumnos;
        }
    }
?>