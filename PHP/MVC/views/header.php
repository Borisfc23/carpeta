<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <header class=" py-3">
            <ul class="nav nav-pills d-flex justify-content-around">
                <li class="nav-item"><a href="<?php echo constant('URL')?>main" class="nav-link"
                        aria-current="page">Inicio</a></li>
                <li class="nav-item"><a href="<?php echo constant('URL')?>nuevo" class="nav-link ">Nuevo</a></li>
                <li class="nav-item"><a href="<?php echo constant('URL')?>consulta" class="nav-link">Consulta</a></li>
                <li class="nav-item"><a href="<?php echo constant('URL')?>ayuda" class="nav-link">Ayuda</a></li>
            </ul>
        </header>
    </div>
    <script>
    var URLactual = window.location.href;
    var etiquetas = document.getElementsByTagName('a');
    if (URLactual.includes('main')) {
        etiquetas[0].classList.add('active');
    } else if (URLactual.includes('nuevo')) {
        etiquetas[1].classList.add('active');
    } else if (URLactual.includes('consulta')) {
        etiquetas[2].classList.add('active');
    } else if (URLactual.includes('ayuda')) {
        etiquetas[3].classList.add('active');
    }

    console.log(URLactual);
    console.log(etiquetas);
    </script>
</body>

</html>