<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    a {
        text-decoration: none;
        font-size: 2rem;
        margin-right: 2.5rem;
    }

    .ocultar {
        display: none;
    }

    .mostrar {
        display: block;
    }
    </style>
    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid text-center mb-5 pb-3 pt-3 bg-warning">
        <h2>Login y Registro de Usuarios</h2>
        <div>
            <a href="" id="login">Login</a>
            <a href="" id="registro">Registro</a>
        </div>
    </div>
    <div class="container col-md-5 ocultar" id="div-login">
        <h3>Login de Usuarios</h3>
        <form action="validar_login.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Insert User</label>
                <input type="text" class="form-control" id="usuario" aria-describedby="usuario" name="usuario">
                <div id="emailHelp" class="form-text">We'll never share your user with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena">
            </div>
            <button type="submit" class="btn btn-primary">Logear</button>
        </form>
    </div>
    <div class="container col-md-5 ocultar" id="div-registro">
        <h3>Registro de Usuarios</h3>
        <form action="registro_usuario.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Insert User</label>
                <input type="text" class="form-control" id="usuario" aria-describedby="usuario" name="usuario">
                <div id="emailHelp" class="form-text">We'll never share your user with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Repeat Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena2">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
    <script>
    let login = document.getElementById("login");
    let registro = document.getElementById("registro");
    let div_login = document.getElementById("div-login");
    let div_registro = document.getElementById("div-registro");
    login.addEventListener("click", (e) => {
        e.preventDefault();
        div_login.classList.remove("ocultar");
        div_registro.classList.remove("mostrar");
    })
    registro.addEventListener("click", (e) => {
        e.preventDefault();
        div_login.classList.add("ocultar");
        div_registro.classList.add("mostrar");
    })
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>