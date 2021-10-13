<?php 
    #establecer la ruta de los recursos de img
    $carIma = "imagenes/";
    #crear recurso de img a partir de un archivo de img
    $ima = imagecreatefrompng($carIma."causa520X245.png");
    #establecer el tipo mime
    header("Content-Type: image/png");
    #mostrar el recurso de img
    imagepng($ima);

    #destruir recurso
    imagedestroy($ima);
?>