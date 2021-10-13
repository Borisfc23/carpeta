<?php 
    #establecer la ruta de los recursos de img
    $carIma = "imagenes/";
    #crear recurso de img a partir de un archivo de img
    $ima = imagecreatefromjpeg($carIma."Koala.jpg");
    #establecer el tipo mime
    header("Content-Type: image/gif");
    #mostrar el recurso de img
    imagegif($ima);

    #destruir recurso
    imagedestroy($ima);
?>