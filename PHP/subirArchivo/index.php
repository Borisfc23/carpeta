<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Subir Archivo con PHP</h1>
    <p>Solo subir archivos jpg o jpeg menor a 500bytes</p>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" value="Subir">
    </form>
</body>

</html>