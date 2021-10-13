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
    <div class="container">
        <div class="row justify-content-center py-4">
            <form class="col-6 bg-light py-5 " method="GET" action="inyeccionSQL.php">
                <p class="fw-bold">Buscar Nombre por ID</p>
                <input type="text" class="col-9 mx-3" name="id">
                <input type="submit" class="btn-primary col-2 mb-2" value="Buscar">
                <?php
                    if(isset($_GET['id'])){
                        $servidor = "localhost";
                        $user = "root";
                        $pass = "";
                        $db = "todolistDB";

                        $conexion = new mysqli($servidor,$user,$pass,$db);
                        if($conexion->connect_error){
                            die("Error en la Conexion..".$conexion->error);
                        }
                        
                        $id = $_GET['id'];
                        $sql = "SELECT nombre FROM usuarios WHERE id = $id";
                        $resultado = $conexion->query($sql);
                        while($row = $resultado->fetch_assoc()){
                            echo $row['nombre'];
                        }
                        
                    }
          ?>
            </form>
        </div>
    </div>
    <!-- LA INYECCION SE DA CON UNION SELECT password from usuarios WHERE id=2 
 OR 1=1
ES MEJOR USAR POST Y COMENZAR A VALIDAR LOS CAMPOS-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>


</body>

</html>