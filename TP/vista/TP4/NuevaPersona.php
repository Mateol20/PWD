<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Nueva Persona</title>
</head>

<body>
    <div id="mensajeError" class="alert alert-danger mx-auto mt-3" role="alert" style="display:none; max-width: 500px;">
    </div>

    <main>
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg">
                        <div class="card-header text-center bg-primary text-white">
                            <h1>Crear Nueva Persona</h1>
                        </div>
                        <div class="card-body">
                            <form id="formulario" action="./accion/accionNuevaPersona.php" method="POST" novalidate>
                                <div class="mb-3">
                                    <label for="nroDni" class="form-label">Número de DNI</label>
                                    <input type="text" class="form-control" id="nroDni" name="nroDni" required>
                                    <div class="invalid-feedback" id="dni-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                                    <div class="invalid-feedback" id="apellido-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    <div class="invalid-feedback" id="nombre-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="fechaNac" class="form-label">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id="fechaNac" name="fechaNac">
                                </div>
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono">
                                </div>
                                <div class="mb-3">
                                    <label for="domicilio" class="form-label">Domicilio</label>
                                    <input type="text" class="form-control" id="domicilio" name="domicilio">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Registrar Persona</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/validaciones.js"></script>
    <script src="../js/nuevaPersona.js"></script>
    <script src="../js//cargarFyH.js"></script>
</body>

</html>