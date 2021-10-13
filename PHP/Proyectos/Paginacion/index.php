<?php
    include_once 'conexion.php';

    //Llamar a la tabla Articulos
    $sentencia = $pdo->prepare('SELECT * FROM articulos');
    $sentencia->execute();
    $articulos = $sentencia->fetchAll();
    
    //Paginar el nav
    $articulos_por_pagina = 3;
    $totalArticulos = $sentencia->rowCount();
    $paginas = $totalArticulos/3;    
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

    <title>Hello, world!</title>
</head>

<body>
    <div class="container my-5 py-4 bg-warning">
        <h1 class="mb-5">Paginacion</h1>
        <?php if(!$_GET){
           header('Location: index.php?pagina=1');
       } 
       if($_GET['pagina'] > $paginas ||$_GET['pagina'] <= 0 ){
           header('Location:index.php?pagina=1');
       }      
       $iniciar = ($_GET['pagina']-1)*$articulos_por_pagina;       
       $sentencia_art = $pdo->prepare('SELECT *FROM articulos LIMIT :iniciar,:narticulos');
       $sentencia_art->bindParam(':iniciar',$iniciar,PDO::PARAM_INT);
       $sentencia_art->bindParam(':narticulos',$articulos_por_pagina,PDO::PARAM_INT);
       $sentencia_art->execute();
       $rpt_art = $sentencia_art->fetchAll();
    //    echo var_dump($rpt_art);
       ?>
        <?php  foreach ($rpt_art as $articulo => $value) {
           ?>

        <div class="alert alert-primary" role="alert">
            <?php echo $value['titulo'].': Lorem ipsum dolor sit amet.'?>
        </div>
        <?php } ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item <?php echo $_GET['pagina']<=1?'disabled': '' ?>"><a class="page-link"
                        href="index.php?pagina=<?php echo $_GET['pagina'] - 1 ?>">Previous</a></li>
                <?php 
                for ($i=0; $i < $paginas; $i++) { ?>
                <li class="page-item <?php echo $_GET['pagina']==$i+1?'active':'' ?>"><a class="page-link"
                        href="index.php?pagina=<?php echo $i+1?>"><?php echo $i+1?></a></li>
                <?php }?>
                <li class="page-item <?php echo $_GET['pagina']>=$paginas?'disabled': '' ?>"><a class="page-link"
                        href="index.php?pagina=<?php echo $_GET['pagina'] + 1 ?>">Next</a></li>
            </ul>
        </nav>
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