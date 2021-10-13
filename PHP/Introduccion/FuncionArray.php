<?php 
    //Array_chunk Dividir el array principal    
    $dias =array('Domingo<br>','Lunes<br>','Martes<br>','Miercoles<br>','Jueves<br>','Viernes<br>','Sabado<br>');
    $mes =array('Enero<br>','Febrero<br>','Marzo<br>','Abril<br>','Mayo<br>');
    $funcion=array_chunk($dias,2);//Dividio el array principal en grupos de 2
    print_r($funcion);
    echo('<br>');    
    //Cortar Arreglos
    echo("Cortar Arreglo <br>");
    $cortarArray=array_slice($dias,3);
    print_r($cortarArray);
    echo('<br>');
    //Unir Arreglos
    echo("Unir Arreglo <br>");
    $UnirArray=array_merge($dias,$mes);
    print_r($UnirArray);
    echo(" <br>");
    //Buscar en Arreglos
    echo("Buscar dentro del Arreglo <br>");
    $buscar=array_search('Marzo<br>',$UnirArray);
    echo "Posicion del mes Enero: ".($buscar);
    echo("Contar Cantidad de Elementos del $dias dias<br>");
    echo count($dias);

?>