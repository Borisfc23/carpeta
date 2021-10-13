<?php 
    #establecer la ruta de los recursos de img
    $carIma = "imagenes/";
    #crear recurso de img a partir de un archivo de img
    $ima = imagecreatefromgif($carIma."chicalluvia_1280X1255.gif");

    #OBTENER DIMENSIONES
    $ancho = imagesx($ima);
    $alto = imagesy($ima);
    #crear recurso imagen destino
    $imaDes1 = imagecreatetruecolor($ancho,$alto);

    #generar recurso destino
    imagecopyresampled($imaDes1,$ima,0,0,0,0,$ancho,$alto,$ancho,$alto);
    
    #generar destino
    imagegif($imaDes1,$carIma."chica.png");

    #destruir recurso
    imagedestroy($ima);
    imagedestroy($imaDes1);
?>