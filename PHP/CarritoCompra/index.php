<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php
        include_once('layout/menu.php');
    ?>

    <main>
        <?php 
            $response = json_decode(file_get_contents('http://localhost/PHP/CarritoCompra/api/productos/api-productos.php?categoria=juguetes'),1);
            // var_dump($response);
            if($response['statuscode'] == 200){
                // echo 'Si hay';
                foreach ($response['items'] as $item) {
                    include('layout/items.php');
                }
            }else{
                echo 'No hay Registros de Juguetes';
            }
        ?>
    </main>

    <script src="js/main.js"></script>
</body>

</html>