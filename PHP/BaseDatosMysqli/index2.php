<!doctype html>
<html lang="en">
<?php 
$alerta = array();
?>

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
    <h1 style="text-align: center;">Lista de TODO</h1>
    <div class="row justify-content-center align-middle">
        <div class="col-3  my-5 p-4">
            <form action="index2.php" id="nuevo-pendiente-container" method="POST">
                <input type="text" name="texto" id="texto">
                <input type="submit" class="btn btn-secondary" value="Añadir">
            </form>
        </div>
        <div id="mostrar-todo-container" class="col-4 my-5 p-4">
            <form id="formMostrarTodo" action="index2.php" method="POST">
                <input type="checkbox" name="mostrar-todo" onchange="mostrarTodo(this)" <?php if(isset($_POST['mostrar-todo'])){
                    if($_POST['mostrar-todo']=="on"){
                        echo "checked";}
                        } ?>>Mostrar Todo
            </form>
        </div>
    </div>

    <div id="todolist" class="container">
        <?php 
            $servidor = "localhost";
            $user = "root";
            $pass = "";
            $db = "todolistdb";

            $conexion = new mysqli($servidor,$user,$pass,$db);

            if($conexion->connect_error){
                die("Conexion Fallida ¡Error! ".$conexion->connect_error);
            }
            // echo "Conexion Exitosa";
            //Validacion de ingreso de datos
            if(isset($_POST['texto'])){
                if ($_POST['texto']!="") {
                    $texto = $_POST['texto'];
                    $sql = "INSERT INTO todotable(texto,completado) VALUES('$texto',false)";
                    $peticion = $conexion->query($sql);
                    if(!$peticion){                    
                        die ("Error al ingresar datos: ".$conexion->error);
                    }
                }else{
                    array_push($alerta,"El campo  no puede estar vacio");
                }
            }
            //Actualizar el estado de los checks
            else if(isset($_POST['completar'])){
                $id= $_POST['completar'];
                $sql = "UPDATE todotable SET completado =1 WHERE id=$id";
                $peticion = $conexion->query($sql);
                if(!$peticion){                    
                    echo "Error al actualizar dato!";
                }
            }
            
            //Eliminar Check box
            else if(isset($_POST['eliminar'])){
                $id= $_POST['eliminar'];
                $sql = "DELETE FROM todotable WHERE id=$id";
                $peticion = $conexion->query($sql);
                if(!$peticion){                    
                    echo "Error al eliminar dato!";
                }
            }
            //Validar Mostrar Todo
            $sql = "";
            if(isset($_POST['mostrar-todo'])){
                $ordenar= $_POST['mostrar-todo'];
              
                if($ordenar=="on"){                    
                    $sql = "SELECT *FROM todotable ORDER BY completado DESC";
                }
            }
            else {
                $sql = "SELECT *FROM todotable WHERE completado=0";
            }
            //Mostrar Datos
            $resultado =$conexion->query($sql);
           
            if(count($alerta)>0){
                echo "<div class='p-3 mb-2 bg-danger text-white'>";
                for ($i=0; $i < count($alerta); $i++) { 
                    echo "<li>".$alerta[$i]."</li>";
                }
            }
            echo "</div>";
            if($resultado->num_rows>0){                
                while($row = $resultado->fetch_assoc()){
        ?>

        <div class="row justify-content-around bg-light">

            <form id="form<?php echo $row['id'] ?>" method="POST" class="col-4 my-4">
                <input class="form-check-input" type="checkbox" name="completar" value="<?php echo $row['id'] ?>"
                    id="<?php echo $row['id'] ?>" <?php echo $row['completado']!=1 ? "":"checked disabled" ?>
                    onchange="completarPendiente(this)">
                <label class="form-check-label" for="<?php echo $row['id'] ?>">
                    <?php echo $row['completado']==1 ? "<s>".$row['texto']."</s>":$row['texto'] ?>
                </label>
            </form>
            <form class="col-4" id="form_eliminar_<?php echo $row['id']?>" method="POST">
                <input type="hidden" name="eliminar" value="<?php echo $row['id']?>">
                <input type="submit" class="btn btn-primary" value="Eliminar">
            </form>
        </div>
        <?php 
                }
                }
                
                $conexion->close();
                ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script>
    function completarPendiente(e) {
        var id = "form" + e.id;
        var formulario = document.getElementById(id);
        formulario.submit();
    }

    function mostrarTodo(e) {
        var formulario = document.getElementById("formMostrarTodo");
        formulario.submit();
    }
    </script>
</body>

</html>