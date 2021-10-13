<?php 
    //Bucle While
    // $numero=1;
    // while ($numero <= 10) {
    //     echo $numero;
    //     $numero=$numero+1;
    // }
    // echo('<br>');
    // //Bucle For
    // $num=2;
    // for ($num=4; $num <10 ; $num++) { 
    //     echo $num;        
    // }
    // //For each
    // echo('<br>');
    $equipos= array(
        'barcelona' => 'messi',
        'juventus'=>'cr7',
        'madrid'=>'marcelo' );
    foreach ($equipos as $key => $value) {
        echo $key.'<br>';
        echo $value.'<br>';
    }
    $num=5;
    for($i=1;$i<=12;$i++){
        if($i%2==0){            
            echo("<p style='color:red'>$num x $i = ".$num*$i." <br>");
        }else{
            echo("<p style='color:blue'>$num x $i = ".$num*$i." <br>");
        }
        
    }
?>