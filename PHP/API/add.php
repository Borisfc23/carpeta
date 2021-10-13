<?php
    include_once 'apiPeliculas.php';

    $api = new apiPelicula();
    //Las formas comentadas son para subir iamgens 
    // if(isset($_POST['titulo']) && isset($_FILES['imagen'])){
    if(isset($_POST['titulo']) && isset($_POST['imagen'])){
        // if($api->subirImagen($_FILES['imagen'])){
            $item = array(
                'titulo'=>$_POST['titulo'],
                // 'imagen'=>$api->getImagen()
                'imagen'=>$_POST['imagen']
            );
            $api->add($item);
        // }
        // else{
        //     $api->error('Error con el archivo: '.$api->getError());
        // }
    }else{
        $api->error("Erro al llamar la API");
    }