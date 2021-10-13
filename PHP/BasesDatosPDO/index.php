<?php 
    include_once 'include/survey.php';
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .seleccionado {
        background-color: blue;
        color: white;
        border-radius: 5px;
        padding: 10px auto;
    }

    .noseleccionado {
        background-color: skyblue;
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <form action="#" method="GET">
        <?php 
            $survey = new Survey();
            $showResults = false;

            if(isset($_GET['lenguaje'])){
                $showResults = true;
                $survey->setOptionSelected($_GET['lenguaje']);
                $survey->vote();    
            }
        ?>
        <h2>¿Selecciona tu lenguaje favorito?</h2>
        <?php 
            if($showResults){
                $lenguajes = $survey->showResults();
                echo "<h2>".$survey->getTotalVotes()." - Votos Totales</h2>";

                foreach ($lenguajes as $lenguaje) {
                    $porcentaje = $survey->getPercentageVotes($lenguaje['votos']);
                    // print_r($lenguaje['opcion']."-".$lenguaje['votos']."  =>".$porcentaje."<br>") ;                    
                    include 'views/resultados.php';
                }
            }else{
                include 'views/votacion.php';
            }
        ?>
    </form>
</body>

</html>