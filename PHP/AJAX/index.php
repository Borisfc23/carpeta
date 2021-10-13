<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .container-mostrar {
        background: skyblue;
    }
    </style>
</head>

<body>
    <h2>AJAX CON PHP</h2>
    <div class="container">
        <form action="" method="POST">
            <p>Cual es tu Tarea o deber?<br>
                <input type="text" name="todo" id="todo">
            </p>
            <input type="button" id="btnEnviar" value="Agregar">
        </form>
    </div>
    <div id="mostrar-todo-container">

    </div>
    <div id="message"></div>
    <script src="main.js"></script>
    <script>
    cargarTodos();
    </script>
</body>

</html>