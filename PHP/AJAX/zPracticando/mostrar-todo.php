<?php 

include_once 'consultaTodo.php';

$consultatodo = new consultaTodo();
$lista = $consultatodo->mostrarTodo();

foreach ($lista as $todo) {
  if($todo['completado']!=0){
    $estado= "alert-primary";
  }else{
    $estado= "alert-danger";
  }
    echo '<div class="alert '.$estado.'" role="alert">
    '.$todo['timestamp'].' ==> '.$todo['texto'].'
  </div>';
}