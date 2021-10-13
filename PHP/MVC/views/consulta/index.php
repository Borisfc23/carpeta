<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .main {
        height: 100vh;
    }

    * {
        text-align: center;
    }

    .tabla-alumnos {
        width: 60%;
        margin: 1rem auto;
    }
    </style>
</head>

<body>
    <?php require 'views/header.php' ?>
    <div class="main">
        <h1 class="tex-align:center">Seccion de Consulta</h1>
        <div id="respuesta"></div>
        <div class="tabla-alumnos">
            <table class="table table-striped tamano">
                <!-- <colgroup></colgroup> -->
                <thead>
                    <tr>
                        <th>Matricula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="tbody-alumnos">
                    <?php 
                include_once 'models/alumno.php';
                foreach($this->alumnos as $row){
                    $alumno = new Alumno();
                    $alumno = $row;
                ?>
                    <tr id="fila-<?php echo $alumno->matricula;?>">
                        <td><?php echo $alumno->matricula?></td>
                        <td><?php echo $alumno->nombre?></td>
                        <td><?php echo $alumno->apellido?></td>
                        <td><a class="btn btn-warning"
                                href="<?php echo constant('URL').'consulta/verAlumno/'.$alumno->matricula?>">Editar</a>
                        <td><button class="bEliminar btn btn-danger"
                                data-matricula="<?php echo $alumno->matricula?>">Eliminar</button>
                        </td>
                        <!-- <a class="btn btn-danger"
                                href="<?php echo constant('URL').'consulta/eliminarAlumno/'.$alumno->matricula?>">Eliminar</a> -->
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    <?php require 'views/footer.php' ?>
    <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
</body>

</html>