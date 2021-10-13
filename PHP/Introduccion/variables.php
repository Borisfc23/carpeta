<?php 
    //el pint y el echo me permiten imprimir
    print 'Escrito por print ';
    echo "<br>";
    echo 'Escrito por echo ',' Soporta mas lineas';
    //variables
    $nombre='victor';
    echo $nombre;
    echo '<br>';
    echo 'Escrito con Comillas simple: $nombre';
    echo '<br>';
    echo "Escrito con Comillas dobles: $nombre";
    echo '<br>';
    //contantes
    define('curso',' varible definida php');
    echo curso;
    echo('<br>');
    //variables scope
    $edad=12;
    function estudiantes(){
        global $edad;
        echo $edad;
    }
    estudiantes();
    $a=10;
    $b=20;
    function sumar(){
        $GLOBALS['s']=$GLOBALS['a']+$GLOBALS['b'];
    }
    sumar();echo('<br>');
    echo $s;
    echo('<br>');
    //Obtener la ruta del archivo
    echo $_SERVER['PHP_SELF'];
    echo('<br>');
    echo $_SERVER['SERVER_NAME'];
?>