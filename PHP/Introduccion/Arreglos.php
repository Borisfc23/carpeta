<?php 
    //Arregles Vectores
    $dias =array('Domingo<br>','Lunes<br>','Martes<br>','Miercoles<br>','Jueves<br>','Viernes<br>','Sabado<br>');
    var_dump($dias);//El var_dump imprime con mayor precision los datos
    print_r($dias);

    //El punto sirve para concatenar 
    //Array Asociativo
    $profesores = array('nombre' =>'Juan' , 'edad'=>'30');    
    echo "nombre del profe: ".$profesores['nombre'];
    echo('<br>');
    //Array Normal
    $profesores2 = array('nombre','Juan' , 'edad','30');
    echo "nombre del profe: ".$profesores2[1];
    echo('<br>');
    for ($i=0; $i <count($dias) ; $i++) { 
        echo $dias[$i];
    }
    //Encontrar el penultimo elemento
    $posicion=count($dias)-1;
    echo "Penultimo elemento de mi Array es:".$dias[$posicion];
    echo('<br>');
    //Ordenar los elementos
    asort($dias);
    print_r($dias);
    //Ordenar de reversa
    echo('<br>');
    arsort($dias);
    print_r($dias);    
?>