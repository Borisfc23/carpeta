<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container col-md-6 ">
        <h1 class="text-center">------ AJAX + PHP ------</h1>
        <form method="POST" id="contendor-form">
            <div class="mb-3 text-center">
                <label for="texto" class="form-label ">Ingrese su Tarea o deber pendiente</label>
                <input type="text" class="form-control" id="texto" aria-describedby="emailHelp">
            </div>
            <input type="button" class="btn btn-primary" id="guardar" value="Guardar">
        </form>
        <hr>
    </div>

    <div class="container col-md-6 bg-light" id="container-todo">

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="main.js"></script>
    <script>
    cargarTodo();
    </script>
</body>

</html>