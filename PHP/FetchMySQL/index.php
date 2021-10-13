<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>CRUD PHP-API FETCH</title>

</head>

<body>
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center fw-bold">Registro de Productos</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="frm">
                            <div class="form-group mb-3">
                                <label for="">Codigo</label>
                                <input type="hidden" name="idp" id="idp" value="">
                                <input type="text" name="codigo" id="codigo" placeholder="Codigo" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Producto</label>
                                <input type="text" name="producto" id="producto" placeholder="Descripcion"
                                    class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Precio</label>
                                <input type="number" name="precio" id="precio" placeholder="Precio"
                                    class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Cantidad</label>
                                <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad"
                                    class="form-control">
                            </div>
                            <div class="form-group d-grid mt-4">
                                <input type="button" id="registrar" class="btn btn-primary btn-block" value="Registrar">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <form action="" method="post">
                            <div class="form-group">
                                <!-- <label for="buscar">Buscar</label> -->
                                <input type="text" name="buscar" id="buscar" class="form-control"
                                    placeholder="Buscar Id o Producto">
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-hover table-responsive text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="resultado">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>