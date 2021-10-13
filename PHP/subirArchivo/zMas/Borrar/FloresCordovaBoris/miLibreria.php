<?php
$primero = $_POST['primero'];
$segundo = $_POST['segundo'];
$combo = $_POST['combo'];  
  if($combo == 1){
      $suma = $primero + $segundo;
      echo "<h2>La suma es $suma</h2>";
  }
  if($combo == 2){
      $suma = $primero - $segundo;
      echo "<h2>La resta es $suma</h2>";
  }
  if($combo == 3){
      $suma = $primero * $segundo;
      echo "<h2>La multiplicacion es $suma</h2>";
  }
  if($combo == 4){
      $suma = $primero / $segundo;
      echo "<h2>La division es $suma</h2>";
  }
?>