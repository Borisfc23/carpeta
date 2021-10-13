<?php 
    
    $directorio = "uploads/";
    $archivo = $directorio.basename($_FILES["file"]["name"]);
    $tipoArchivo = strtolower(pathinfo($archivo,PATHINFO_EXTENSION));
    
    //Validar si es imagen
    $checarSiImagen = getimagesize($_FILES["file"]["tmp_name"]);

    if($checarSiImagen!=false){

        //validar tamaño del archivo
        $size = $_FILES["file"]["size"];
        if($size > 500000){
            echo "El archivo es muy pesado";
        }else{
            //validar el tipo de imagen
            if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg"){
                //Se valido el archivo correctamente
                if(move_uploaded_file($_FILES['file']["tmp_name"],$archivo)){
                    echo "El archivo se subio Correctamente";
                }else{
                    echo "Se produjo un error al Cargar el archivo";
                }
            }else{
                echo "Solo se admite archivos JPG";
            }
        }
    }else{
        echo "El documento no es una Imagen";
    }

?>