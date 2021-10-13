<?php
include_once 'db.php';
class Pelicula extends DB{
    function obtenerPelicula(){
        $query = $this->connect()->query('SELECT * FROM articulos');
        return $query;
    }
    
    function obtenerPeliculaUnit($id){
        $query = $this->connect()->prepare('SELECT * FROM articulos WHERE id=:id');
        $query->execute(['id'=>$id]);
        return $query;
    }
    
    function nuevaPelicula($pelicula){
        $query = $this->connect()->prepare('INSERT INTO articulos (titulo,imagen) VALUES (:titulo,:imagen)');
        $query->execute(['titulo'=>$pelicula['titulo'],'imagen'=>$pelicula['imagen']]);
        return $query;
    }
}