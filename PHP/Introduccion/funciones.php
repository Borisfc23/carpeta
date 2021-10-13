<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body>
    <h1>Funciones</h1>
    <form action="./funciones.php" method="POST">
        <input type="number" placeholder="Primer Numero" name="num1">
        <input type="number" placeholder="Segundo Numero" name="num2">
        <input type="submit" value="Calcular">
    </form>
</body>

</html>
<?php 

    //funciones
    
    function producto($n1,$n2){        
        return $n1*$n2;
    }
    function isNumero($n1,$n2){
        if(is_numeric($n1) && is_numeric($n2)){
            return true;
        }else{
            return false;        
        }
    }
    function mostrarError(){
        echo "<span class='error'>Ingrese solo Numeros</span>";
    }
    function validarCampos(){
        if(isset($_POST['num1']) && isset($_POST['num2'])){            
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
        if(isNumero($num1,$num2)){
                echo "<p>".producto($num1,$num2)."</p>";
            }
        else{
            mostrarError();
        }
        }
    }
    validarCampos();
?>