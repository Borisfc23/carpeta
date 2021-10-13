<?php
    include_once 'conexion.php';//Llamamos a nuestra conexion
    $error_color = $error_desc = $error_form = '';
    $patron_color = "[a-zA-Z ]{2,25}";
    $patron_desc = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
    //LEER
    $sql_leer = 'SELECT *FROM colores';
    $sentencia_leer = $pdo->prepare($sql_leer);
    $sentencia_leer -> execute();
    $resultado = $sentencia_leer->fetchAll();

    //AGREGAR
    if($_POST){      
      $color = $_POST['color'];
      $descripcion = $_POST['descripcion'];

      if(isset($color) && isset($descripcion)){
        if(empty(trim($color))){
          $error_color = "Este campo Color debe ser llenado";
        }
        elseif(empty(trim($descripcion))){
          $error_desc = "Este campo Descripcion debe ser llenado";
        }
        else{   
          if(!is_numeric($color) && !is_numeric($descripcion)){
            $sql_agregar = 'INSERT INTO colores (color,descripcion) VALUES (?,?)';
            $sentencia_agregar = $pdo->prepare($sql_agregar);
            $sentencia_agregar -> execute(array($color,$descripcion));
      
            //Cerramos conexion a base de datos y sentencia
            $sentencia_agregar = null;
            $pdo = null;
            header('location: index.php');         
          }else{
            $error_form = "Llenado Incorrecto.";
          }       
      }
      }else{
        $error_form = "Formulario Incompleto.";
      }
    }
    if($_GET){
      $id = $_GET['id'];
      $sql_unico = "SELECT *fROM colores WHERE id=?";
      $sentencia_unico = $pdo->prepare($sql_unico);
      $sentencia_unico -> execute(array($id));
      $resultado_unico = $sentencia_unico->fetch(PDO::FETCH_ASSOC);      
      //Cerramos conexion a base de datos y sentencia
      $sentencia_unico = null;
      $pdo = null;
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid bg-warning text-dark text-center pb-2 pt-2">
        <h1>PHP + MYSQL + PDO</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <?php foreach ($resultado as $dato => $value) {?>

                <div class="alert alert-<?php echo $value['color']?>" role="alert">
                    <?php echo (strtoupper($value['color']).": ".strtoupper($value['descripcion'])) ?>
                    <a href="" class="float-end ms-3" name="btn-confirm" colorid="<?php echo $value['id']?>"><i
                            class="far fa-trash-alt"></i></a>
                    <a href="index.php?id=<?php echo $value['id']?>" class="float-end"><i
                            class="fas fa-pencil-alt"></i></a>
                </div>
                <?php }?>

            </div>
            <div class="col-md-6">
                <?php if(!$_GET){?>
                <h2>Agregar Elementos</h2>
                <form method="POST">
                    <input type="text" class="form-control" name="color" placeholder="Color">
                    <span class="text-danger">
                        <?php echo $error_color; ?>
                    </span>
                    <input type="text" class="form-control mt-3" name="descripcion" placeholder="Descripcion">
                    <span class="text-danger">
                        <?php echo $error_desc; ?>
                    </span>
                    <span class="text-danger">
                        <?php echo $error_form; ?>
                    </span><br>
                    <button class="btn btn-primary">Agregar</button>
                </form>
                <?php }?>

                <?php if($_GET){?>
                <h2>Editar Elementos</h2>
                <form method="GET" action="editar.php">
                    <input type="text" class="form-control" name="color" placeholder="Color"
                        value="<?php echo $resultado_unico['color']?>">
                    <input type="text" class="form-control mt-3" name="descripcion" placeholder="Descripcion"
                        value="<?php echo $resultado_unico['descripcion']?>">
                    <input type="hidden" class="form-control mt-3" name="id"
                        value="<?php echo $resultado_unico['id']?>">
                    <button class="btn btn-primary mt-3">Agregar</button>
                </form>
                <?php }?>
            </div>
        </div>
    </div>

    <script>
    boton = document.getElementsByName('btn-confirm');
    console.log(boton)
    boton.forEach(element => {
        element.addEventListener("click", () => {
            confirmacion = confirm("Esta seguro que desea eliminar?");
            idElemento = element.getAttribute("colorid");
            if (confirmacion) {
                element.setAttribute("href", `eliminar.php?id=${idElemento}`);
            } else {
                element.setAttribute("href", `index.php`);
            }
        })
    });
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
<?php
  //Cerramos conexion 
  $pdo = null;
  $sentencia_leer = null;
?>