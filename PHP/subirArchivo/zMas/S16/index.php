<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>index</title>
</head>
<body>
	<h2>Subir imagen a servidor</h2>

	<form action="datosImagen.php" method="POST" 
	enctype="multipart/form-data">
	<label for="txtIma">Seleccione archivo:</label>				
	<input type="file" name="txtIma"/>
    <br/>
	<input type="submit" value="Enviar imagen" name="btnEnv"/>	
	</form>

</body>
</html>