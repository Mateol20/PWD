<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Auto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 55px;
        }
    </style>
</head>

<body>

    <div id="mensajeError" class="alert alert-danger mx-auto mt-3" role="alert" style="display:none; max-width: 500px;">
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h1>Registrar Nuevo Auto</h1>
                    </div>
                    <div class="card-body">
                        <form id="formulario" action="./accion/accionNuevoAuto.php" method="POST" novalidate>
                            <div class="mb-3">
                                <label for="patente" class="form-label">Patente</label>
                                <input type="text" class="form-control" id="patente" name="patente" required>
                                <div class="invalid-feedback" id="patente-feedback"></div>
                            </div>
                            <div class="mb-3">
                                <label for="marca" class="form-label">Marca</label>
                                <input type="text" class="form-control" id="marca" name="marca" required>
                                <div class="invalid-feedback" id="marca-feedback"></div>
                            </div>
                            <div class="mb-3">
                                <label for="modelo" class="form-label">Modelo</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" required>
                                <div class="invalid-feedback" id="modelo-feedback"></div>
                            </div>
                            <div class="mb-3">
                                <label for="dniDuenio" class="form-label">DNI del Dueño</label>
                                <input type="text" class="form-control" id="dniDuenio" name="dniDuenio" required>
                                <div class="invalid-feedback" id="dni-duenio-feedback"></div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Registrar Auto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/validaciones.js"></script>
    <script src="../js/nuevoAuto.js"></script>
    <script src="..//js/cargarFyH.js"></script>

</body>

</html>