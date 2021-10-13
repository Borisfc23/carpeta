<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        text-align: center;
    }

    .formulario {
        width: 100%;
        height: 100vh;
    }
    </style>
</head>

<body>
    <?php require 'views/header.php' ?>
    <div class="main">
        <h1 class="tex-align:center; mb-5">Detalle de <?php echo $this->alumno->matricula?></h1>
        <?php echo $this->mensaje ?>
        <div class="formulario">
            <form method="POST" action="<?php echo constant('URL') ?>consulta/actualizarAlumno" class="col-md-4 m-auto">
                <div class="mb-3">
                    <label for="matricula" class="form-label">Matricula</label>
                    <input type="text" class="form-control" id="matricula" name="matricula"
                        value="<?php echo $this->alumno->matricula?>" aria-describedby="emailHelp" disabled>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre"
                        value="<?php echo $this->alumno->nombre?>" require>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"
                        value="<?php echo $this->alumno->apellido?>" require>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>

    <?php require 'views/footer.php' ?>
</body>

</html>