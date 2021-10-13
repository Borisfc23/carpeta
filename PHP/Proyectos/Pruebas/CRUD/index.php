<?php
    include_once "conexion.php";

    //Read
    $res_leer = $mysqli->query('SELECT *FROM colores');
    $res_leer = $res_leer->fetch_all(MYSQLI_ASSOC);
    
    //Agregar
    if($_POST){
        $color = $_POST['color'];
        $descripcion = $_POST['descripcion'];
        $res_insert = $mysqli->prepare('INSERT INTO colores (color,descripcion) VALUES (?,?)');        
        $res_insert->bind_param('ss',$color,$descripcion);
        $res_insert ->execute();

        $mysqli -> close();
        header("location:index.php");
    }
    if($_GET){
        $id = $_GET['id'];
        $sql_unico = $mysqli->prepare('SELECT *fROM colores WHERE id=?');
        $sql_unico -> bind_param('i',$id);
        $sql_unico ->execute();
        $res_unicos = $sql_unico->get_result();
        $res_unico = $res_unicos->fetch_assoc();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>    
    <div class="container-fluid bg-warning pt-2 pb-2 text-center"><h2>PHP + MYSQL + Mysqli</h2></div>
   <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <?php foreach ($res_leer as $color => $value) { ?>                    
                <div class="alert alert-<?php echo $value['color']?>" role="alert">
                    <?php echo strtoupper($value['color']).': '.strtoupper($value['descripcion'])?>
                    <a href="eliminar.php?id=<?php echo $value['id']?>"><i class="far fa-trash-alt float-end ms-4"></i></a>
                    <a href="index.php?id=<?php echo $value['id']?>"><i class="fas fa-pencil-alt float-end"></i></a>
                </div>
            <?php } ?>
            </div>
            <div class="col-md-6">
                <?php if(!$_GET){?>
                    <h3>Agregar Color</h3>
                    <form method="POST">
                        <input type="text" class="form-control mb-2" name="color" placeholder="Color">
                        <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion">
                        <button class="btn btn-primary">Agregar</button>
                    </form> 
                <?php }?>

                <?php if($_GET){?>
                    <h3>Editar Color</h3>
                    <form method="GET" action="editar.php">
                        <input type="text" class="form-control mb-2" name="color" placeholder="Color" value="<?php echo $res_unico['color']?>">
                        <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion" value="<?php echo $res_unico['descripcion']?>">
                        <input type="hidden" name="id" value="<?php echo $res_unico['id']?>">
                        <button class="btn btn-primary">Editar</button>
                    </form> 
                <?php }?>
            </div>
        </div>
   </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php 
$mysqli -> close();
?>
