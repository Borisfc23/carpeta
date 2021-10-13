<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background: #003c71;
    }
    .caja{
        width: 300px;
        padding: 40px;
        position: absolute;
        top:50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background: #061e26;
        text-align: center;
    }
    .caja h1{
        color:#fff;
        font-size: 16px;
        text-transform: uppercase;
    }
    .caja input[type="text"]{
        border: 0;
        background: none;
        display: block;
        width: 200px;
        margin:20px auto;
        text-align: center;
        border:2px solid #3498db;
        padding: 14px 10px;
        border-radius: 20px;
        color: white;
    }
    .caja input[type="text"]:focus{
        width: 280px;
        border-color:#2ecc71;
    }
    .caja input[type="submit"]{
        border:0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #3498db;
        padding: 14px 40px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;        
        text-transform: uppercase;
    }
    .caja input[type = "submit"]:hover{
        background: #2ecc71;
        color: black;
    }
    .caja output[type="number"]{
        font-size: 40px;
        color: #2ecc71;
    }
</style>
<body>
    <form class="caja" action="calculadora.php" method="get">
        <h1>Caluladora PHP</h1>
        <input type="text" name="numero1" autocomplete="off" placeholder="Primer Numero">
        <input type="text" name="numero2" autocomplete="off" placeholder="Segundo Numero">
        <input type="submit" name="" value="calcular">
        <output type="number">
    </form>    
</body>
</html>
<?php 
    if(isset($_GET['numero1']) && isset($_GET['numero2'])
    && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2'])){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        echo $numero1 * $numero2;
    }
?>