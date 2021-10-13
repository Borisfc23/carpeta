<?php 
$resultado = $encuesta->MostrarVotos();
$traerLenguajes = $resultado->fetch_all();
print_r( $traerLenguajes);
?>

<input type="radio" name="lenguaje" id="c" value="c"><label for="c">C</label><br>
<input type="radio" name="lenguaje" id="c++" value="c++"><label for="c++">C++</label><br>
<input type="radio" name="lenguaje" id="java" value="java"><label for="java">Java</label><br>
<input type="radio" name="lenguaje" id="js" value="javascript"><label for="js">JavaScript</label><br>
<input type="radio" name="lenguaje" id="py" value="python"><label for="py">Python</label><br>

<input type="submit" value="Votar">