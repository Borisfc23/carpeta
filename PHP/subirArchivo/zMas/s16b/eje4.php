<?php 
    #establecer la ruta de los recursos de img
    $carIma = "imagenes/";
    #crear recurso de img a partir de un archivo de img
    $ima = imagecreatefromjpeg($carIma."mototaxi_320X240.jpg");
    #CREAR RECURSO DE IMAGEN DESTINO
    $imaDes = imagecreatetruecolor(100,100);
    #COPIAR EN ORIGEN DESTINO
    imagecopy($imaDes,$ima,0,0,0,0,100,100);
    #esatblecer tipo mime
    header("Content-Type: image/jpeg");
    #mostrar el recurso de img
    imagegif($imaDes);
    #destruir recurso
    imagedestroy($ima);
    imagedestroy($imaDes);
?>