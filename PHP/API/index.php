<?php
    include_once 'apiPeliculas.php';

    $api = new apiPelicula();
    if(isset($_GET['id'])){        
        $id= $_GET['id'];
        if(is_numeric($id)){
            $api->getByID($id);
        }else{
            $api->error("Los paramentros son incorrectos");
        }
    }else{
        $api->getAll();
    }
?>