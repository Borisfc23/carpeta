<?php 
    #establecer la ruta de los recursos de img
    $carIma = "imagenes/";
    #crear recurso de img a partir de un archivo de img
    $ima = imagecreatefromjpeg($carIma."Koala.jpg");
    #OBTENER DIMENSIONES
    $ancho = imagesx($ima);
    $alto = imagesy($ima);

    #mostrar dimensiones
    echo "<h2>El ancho es:$ancho el alto es $alto</h2>";
    #destruir recurso
    imagedestroy($ima);
?>