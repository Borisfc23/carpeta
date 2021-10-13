<?php 
    include_once 'conexion.php';
    $sentencia = $pdo->prepare('SELECT * FROM articulos');
    $sentencia->execute();
    $articulos = $sentencia->fetchAll();
    
    $articulo_por_pagina = 4;
    $total_art = $sentencia->rowCount();
    $paginas = $total_art/4;
    // echo $paginas;
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

    <title>Paginacion - Tienda</title>
    <style>
    .centrar {
        display: flex;
        justify-content: center;
        margin: 1rem auto;
        column-gap: 1.5rem;
        row-gap: 1.5rem;
    }
    </style>
</head>

<body>
    <div class="container mt-1 mb-5">
        <div class="container bg-primary text-center py-4 text-white">
            <h1>Tienda Online con Paginacion - PHP</h1>
            <?php if(!$_GET){
                header('location: index.php?pagina=1');
            }
            if($_GET['pagina']<=0 || $_GET['pagina']>4){
                header('location: index.php?pagina=1');
            }
            $iniciar = ($_GET['pagina']-1)*$articulo_por_pagina;
            $sentencia_art = $pdo->prepare('SELECT *FROM articulos LIMIT :iniciar,:narticulos');
            $sentencia_art->bindParam(':iniciar',$iniciar,PDO::PARAM_INT);
            $sentencia_art->bindParam(':narticulos',$articulo_por_pagina,PDO::PARAM_INT);
            $sentencia_art->execute();
            $rpt_art = $sentencia_art->fetchAll();
                ?>

        </div>
        <hr>
        <div class="cotainer ">
            <div class="row row-cols-2 centrar">
                <?php foreach ($rpt_art as $articulo => $value) {?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $value['imagen']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['titulo']?></h5>
                        <p class="card-text"> Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="container centrar">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item <?php echo $_GET['pagina']<= 1 ? 'disabled':''?>"><a class="page-link"
                                href="index.php?pagina=<?php echo $_GET['pagina'] - 1 ?>">Previous</a></li>
                        <?php for ($i=0; $i < $paginas; $i++) { ?>
                        <li class="page-item"><a class="page-link"
                                href="index.php?pagina=<?php echo $i +1?>"><?php echo $i + 1 ?></a></li>
                        <?php }?>
                        <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled':''?>"><a
                                class="page-link" href="index.php?pagina=<?php echo $_GET['pagina'] + 1 ?>">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

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