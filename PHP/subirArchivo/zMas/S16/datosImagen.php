<?php 	
	#DATOS DEL ARCHIVO DE IMAGEN 
    $nomIma = $_FILES['txtIma']['name'];
    $tipIma = $_FILES['txtIma']['type'];	
    $tamIma = $_FILES['txtIma']['size'];	
    #CARPETA EN SERVIDOR PARA RECIBIR IMAGEN
    $carIma = $_SERVER['DOCUMENT_ROOT'].'/S16/imagenRecibidas/';	
    #VALIDAR QUE SEA UNA IMAGEN
 if(!($tipIma=='image/jpeg' || $tipIma=='image/gif' || $tipIma=='image/png' || $tipIma=='image/jpg')){
    	echo "Solo se aceptan imágenes JPEG JPG GIF PNG";
    }else{	
    #DESPLAZAR EL ARCHIVO IMAGEN HACIA CARPETA EN SERVIDOR	
 move_uploaded_file($_FILES['txtIma']['tmp_name'],$carIma.$nomIma);
 	#echo "<h2>Se ha recibido una imagen en el servidor</h2> <br/>";
 	#echo "<h2> $nomIma </h2>";
 	#echo "<h2> $tipIma </h2>";	
    #REUTILIZA PARÁMETROS DE CONEXIÓN
    require('datosConexion.php');
    #CREAR CONEXION
    $objCnx = mysqli_connect($cnx_host,$cnx_usu,$cnx_con);
	#DIRECCIONA HACIA BD bdpromocion
	mysqli_select_db($objCnx,$cnx_bd) or die("Error en la BD");
	#ALMACENA RUTA DE IMAGEN EN TABLA tb_Integrantes
    $sql = "update tbIntegrantes set foto='$nomIma' where codigo=2";   
    #EJECUTAR LA INSTRUCCIÓN
    $res = mysqli_query($objCnx,$sql);
    #CERRAR LA CONEXIÓN
   //  msqli_close();
    };
 ?>