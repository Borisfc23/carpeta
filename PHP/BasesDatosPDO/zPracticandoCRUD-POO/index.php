<?php
include_once './include/encuestas.php';

$encuesta = new Encuesta();
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
    <h2>Lista de Lengujae de Programacion</h2>
    <h4>¿Desea Agregar nuevo Lenguaje?</h4>
    <form action="" method="POST">
        <input type="text" placeholder="Ingrese nuevo lenguaje.." name="nuevo">
        <input type="submit" value="Enviar">
    </form>
    <?php 
        if(isset($_POST['nuevo'])){
            $encuesta->AgregarLenguaje($_POST['nuevo']);
        }
    ?>
    <hr>
    <form method="POST">
        <?php 
            
            $showResultado = false;
             if(isset($_POST['lenguaje'])){
                $showResultado = true;
                 $encuesta ->setOpcionSeleccionada($_POST['lenguaje']);
                 $encuesta->Votar();
             }
             else if(isset($_POST['eliminar'])){
                 $eliminar = $encuesta->EliminarLenguaje($_POST['eliminar']);
             }
        ?>


        <h4>¿Selecciona tu lenguaje favorito?</h4>
        <?php 
        if($showResultado){
            $lenguajes = $encuesta->MostrarVotos();
            echo "<h2>".$encuesta->getTotalVotos()." - Total de Votos</h2>";

            foreach ($lenguajes as $lenguaje) {
                $porcentaje = $encuesta->getPorcentajeTotal($lenguaje['votos']);
                include 'views/resultado.php';
            }            
        }else{ 
            
            $resultado = $encuesta->MostrarVotos();
            $todosLenguajes = $resultado->fetchAll(PDO::FETCH_ASSOC);
            foreach ($todosLenguajes as $len) {
                ?>
        <input type="radio" name="lenguaje" id="<?php echo $len['opcion']?>" style="margin-bottom: 20px;"
            value="<?php echo $len['opcion']?>">
        <label for="<?php echo $len['opcion']?>"
            style="margin-bottom: 20px;"><?php echo strtoupper($len['opcion'])?></label>
        <input type="hidden" name="eliminar" value="<?php echo $len['id'] ?>" style="margin-left: 50px;">
        <input type="submit" value="Borrar" style="margin-left: 50px;">
        <br>
        <?php
            }
            ?>
        <input type="submit" value="Votar">
        <?php 
        }
        ?>

    </form>
</body>

</html>