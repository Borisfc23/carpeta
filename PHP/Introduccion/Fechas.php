<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo Fechas</title>
</head>

<body>
    <div>
        <?php 
            /*
            d - dia del mes (1-31)
            m - dia del año (1-12)
            y - año (4 digitos)
            l - dia de la semana

            h - hora en Formato (1-12)
            i - minutp (0-59)
            s - segundos (0-59)
            a - amp-pm
            */
            echo "Fecha: ".date("d")."-".date("m")."-".date("y")."-".date("l")."</br>";
            echo "Hora: ".date("h").":".date("i").":".date("s")."-".date("a");
        ?>
    </div>
</body>

</html>