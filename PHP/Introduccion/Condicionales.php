<?php 
    //CONDICIONALES
    $numero_uno=10;
    $numero_dos=10;
    if ($numero_uno<$numero_dos) {
        echo("numero_dos no es mayor que numero_uno");
    }elseif ($numero_uno==$numero_dos) {
        echo("Las variable $numero_uno es igual $numero_dos");
    }
    else{
        echo("Las variables NO son iguales");
    }
    echo('<br>');
    //SWITCH CASE
    $curso='java';
    switch ($curso) {
        case 'php':
            echo 'Lunes y Martes';
            break;
        case 'java':
            echo 'Miercoles y Jueves';
            break;
        default:
            echo 'No existe este curso';
            break;
    }

?>