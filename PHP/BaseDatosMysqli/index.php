<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
    <h1>Lista de Acciones</h1>
    <form action="index.php" method="POST">
        <input type="text" name="texto" id="texto">
        <input type="submit" value="Añadir">
    </form>

    <div id="todolist">
        <?php 
            //Conexion a la BD
            $dominio = "localhost";
            $user = "root";
            $password = "";
            $db = "todolistDB";
        
            $conexion= new mysqli($dominio,$user,$password,$db);
            if($conexion->connect_error){
                die("Conexion Fallida".$conexion->connect_error);
            }

            //Validacion de datos para ingresar
            if(isset($_POST['texto'])){
                $texto = $_POST['texto'];
                $sql = "INSERT INTO todoTable(texto,completado) values('$texto',false)";
                if($conexion->query($sql)===true){      
                    //
                }else{
                    echo "Error al insertar datos!!";
                }                
            }
            else if(isset($_POST['completarCheck'])){
                $id = $_POST['completarCheck'];
                $sql = "UPDATE todoTable SET completado = 1 WHERE id= $id";
                if($conexion->query($sql)===true){      
                    //
                }else{
                    echo "Error al actualizar datos!!";
                } 
            }
            else if(isset($_POST['eliminar'])){
                $id = $_POST['eliminar'];
                $sql = "DELETE FROM todoTable WHERE id= $id";
                if($conexion->query($sql)===true){      
                    //
                }else{
                    echo "Error al Eliminar dato!!";
                }
            }
            //Obtencion de los datos de la BD
            $sql = "SELECT *FROM todotable ";
            $resultado= $conexion->query($sql);
            if($resultado->num_rows > 0){
                ?>

        <?php 
                while($rows=$resultado->fetch_assoc()){
                    ?>
        <div>

            <form id="form<?php echo $rows['id']?>" method="POST">
                <input type='checkbox' name="completarCheck" value="<?php echo $rows['id']?>"
                    <?php echo $rows['completado']==1 ? 'checked ':'' ?> id="<?php echo $rows['id']?>"
                    onchange="completarPendiente(this)">
                <?php echo $rows['texto']?></input>
            </form>
            <form id="form_eliminar_<?php echo $rows['id']?>" method="POST">
                <input type="hidden" name="eliminar" value="<?php echo $rows['id']?>">
                <input type="submit" value="Eliminar">
            </form>
        </div>
        <?php
                }                
            }
            $conexion->close();
        ?>
    </div>

    <script>
    function completarPendiente(e) {
        var id = "form" + e.id;
        var formulario = document.getElementById(id);
        formulario.submit();
    }
    </script>
</body>

</html>