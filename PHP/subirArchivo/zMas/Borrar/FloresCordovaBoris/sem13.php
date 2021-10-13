
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="miLibreria.php" method="POST">
        <input type="number" placeholder="primer numero" name="primero">
        <input type="number" placeholder="segundo numero" name="segundo"> 
        <label for=""></label>        
        <select  id="combo" name="combo">
            <option value="1">sumar</option>
            <option value="2">restar</option>
            <option value="3">multiplicar</option>
            <option value="4">dividir</option>            
        </select>        
        <input type="submit" value="enviar" name="submit">    
        
    </form>    
</body>
</html>