<?php 
    #crera un recurso de img
                        # w , H  
    $ima = imagecreatetruecolor(600,400);
    #muestra el recurso creado    
    echo "<h2>Creando el recurso de imagen ".get_resource_type($ima)."</h2>";        
    #crear un recurso de img
    $ima2 = imagecreatetruecolor(300,200) or die("Error al crear el recurso imagen");
    echo "<h2>Creando el recurso 2 de imagen ".get_resource_type($ima2)."</h2>";        
    #destruir los recursos de iamgen creados
    imagedestroy($ima);
    imagedestroy($ima2);
?>
