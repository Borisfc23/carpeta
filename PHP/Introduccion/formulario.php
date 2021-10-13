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

    <div class="container bg-warning px-5 py-3">
        <h1>Validar Formulario</h1>
        <form action="./formulario.php" method="POST">

            <?php 
            $nombre = "";
            $password ="";
            $email = "";
            $pais = "";
            $nivel = "";
            $lenguajes = array();
            if(isset($_POST['nombre'])){
                $nombre = $_POST['nombre'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $pais = $_POST['pais'];

                $campos = array();
                if(isset($_POST['nivel'])){
                    $nivel = $_POST['nivel'];
                }else{
                    $nivel = "";
                }
                if(isset($_POST['lenguajes'])){
                    $lenguajes = $_POST['lenguajes'];
                }else{
                    $lenguajes = [];
                }
                if($nombre == ""){
                    array_push($campos,"El campo Nombre no puede estar vacio");
                }
                if($password == "" || strlen($password) < 6){
                    array_push($campos,"El campo Password no puede estar vacio, ni tener menos de 6 caracteres");
                }
                if($email == "" || strpos($email,"@") === false){
                    array_push($campos,"Ingrese un corre electronico valido");
                }
                if($pais ==""){
                    array_push($campos,"Selecciona una Pais de origen");
                }
                if($nivel ==""){
                    array_push($campos,"Selecciona un Nivel de Desarrollo");
                }
                if($lenguajes=="" || count($lenguajes)<2){
                    array_push($campos,"Selecciona al menos 2 Lenguajes de Programacion");                    
                }
                if(count($campos)>0){
                    echo "<div class='p-3 mb-2 bg-danger text-white'>";
                    for ($i=0; $i < count($campos); $i++) { 
                        echo "<li>".$campos[$i]."</li>";
                    }
                }else{
                    echo "<div class='p-3 mb-2 bg-success text-white'> Datos Correctos";                    
                }
                echo "</div>";
            }
            ?>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    value="<?php echo $password?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    value="<?php echo $email?>">

            </div>
            <div class="mb-3">
                <label for="pais" class="form-label">List Options</label>
                <select class="form-select" aria-label="Default select example" id="pais" name="pais">
                    <option value="">Open this select menu</option>
                    <option value="Peru" <?php if($pais=="Peru") echo "selected"?>>Peru</option>
                    <option value="Bolivia" <?php if($pais=="Bolivia") echo "selected"?>>Bolivia</option>
                    <option value="Argentina" <?php if($pais=="Argentina") echo "selected"?>>Argentina</option>
                </select>
            </div>
            <div class="mb-3">
                <p>Nivel de Desarrollo</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nivel" id="principiante" name="principiante"
                        value="principiante" <?php if($nivel=="principiante") echo "checked"?>>
                    <label class="form-check-label" for="principiante">
                        Principiante
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nivel" id="intermedio" name="intermedio"
                        value="intermedio" <?php if($nivel=="intermedio") echo "checked"?>>
                    <label class="form-check-label" for="intermedio">
                        Intermedio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nivel" id="avanzado" name="avanzado"
                        value="avanzado" <?php if($nivel=="avanzado") echo "checked"?>>
                    <label class="form-check-label" for="avanzado">
                        Avanzado
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <p>Lenguajes de Programacion</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="php" id="php" name="lenguajes[]"
                        <?php if(in_array("php",$lenguajes)) echo "checked"?>>
                    <label class="form-check-label" for="php">
                        PHP
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="js" id="js" name="lenguajes[]"
                        <?php if(in_array("js",$lenguajes)) echo "checked"?>>
                    <label class="form-check-label" for="js">
                        JavaScript
                    </label>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Enviar">
        </form>
    </div>








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