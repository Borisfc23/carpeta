<?php 
//Crear un array $semana que almacene el nombre de los días de la semana, 
//luego muestre los días  pero, cuando es “jueves” agrega la frase “Es día de TPW”.
$semana = array('Domingo<br>','Lunes<br>','Martes<br>','Miercoles<br>','Jueves<br>','Viernes<br>','Sabado<br>');
    foreach ($semana as $key => $value) {
        if($value =="Jueves<br>"){
            $semana[$key]="Dia de TPW <br>";
        }
        print_r($semana[$key]);
    }
    //Crear  un array con los nombres de los cursos que está estudiando en la universidad, 
    //luego muestra el penúltimo curso almacenado.    
    echo "<br>";
    $cursos = array('PW','Algoritmos','Historia','IntegradoI','Ambiente','Arquitectura');
    $posicion=count($cursos)-2;
    echo "Penultimo Curso es:".$cursos[$posicion];
    echo "<br>";
    // Dadas dos tanques llenos de agua cuyas capacidades están dadas en litros y en yardas cúbicas.
    //  De la cantidad total de agua: el 75% se dedica al consumo doméstico y el 25% se dedica al riego. 
    //  Diseñe un programa que haga lo siguiente:
    // Determine la cantidad total de agua expresada en metros cúbicos y en yardas cúbicas.
    // Determine las cantidades de agua dedicada al riego y al consumo doméstico expresada en metros cúbicos 
    // y en pies cúbicos. Considere los siguientes factores de conversión:
    // 1 pie cúbico = 0.0283 metros cúbicos, 1 metro cúbico = 1000 litros, 1 yarda cúbica = 27 pies cúbicos.
    $litros = 10000;
    $metroCubico = $litros/1000;
    $yardas = $metroCubico/27;
    $pieCubico = $metroCubico/0.0283;
    $cantRiegoMC = $metroCubico*0.25;
    $cantRiegoPC = $pieCubico*0.25;
    $cantDomesticoMC = $metroCubico*0.75;
    $cantDomesticoPC = $pieCubico*0.75;
    echo "Cantidad en Metro Cubico: ".$metroCubico."<br>";
    echo "Cantidad en Yarda Cubico: ".$yardas."<br>";
    echo "Cantidad de Riego en Metro Cubico: ".$cantRiegoMC."<br>";
    echo "Cantidad de Riego en Pie Cubico: ".$cantRiegoPC."<br>";
    echo "Cantidad de Agua Domestico en Metro Cubico: ".$cantDomesticoMC."<br>";
    echo "Cantidad de Agua Domestico en Pie Cubico: ".$cantDomesticoPC."<br>";

?>