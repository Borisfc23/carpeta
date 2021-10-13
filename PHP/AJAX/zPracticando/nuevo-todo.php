<?php
include_once 'consultaTodo.php';

$todo = new consultaTodo();

if(isset($_POST['texto'])){
    $todo->agregarTodo($_POST['texto']);
}else{
    echo "No se recibio nada";
}