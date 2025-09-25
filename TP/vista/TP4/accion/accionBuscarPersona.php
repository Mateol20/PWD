<?php
require_once '../../../configuracion.php';
$persona = null;
$mensaje = "";

if (isset($_GET['nroDni'])) {
    $nroDni = $_GET['nroDni'];
    $controladorPersona = new ControladorPersona();
    $persona = $controladorPersona->buscarPersonaPorDni($nroDni);

    if (!$persona) {
        $mensaje = "Error: La persona con DNI " . htmlspecialchars($nroDni) . " no se encuentra registrada.";
    }
} else {
    $mensaje = "Debe ingresar un número de DNI para la búsqueda.";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Búsqueda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Datos de la Persona</h1>
                    </div>
                    <div class="card-body">
                        <?php if ($persona): ?>
                            <form action="ActualizarDatosPersona.php" method="POST">
                                <input type="hidden" name="nroDni" value="<?php echo htmlspecialchars($persona->getNroDni()); ?>">

                                <div class="mb-3">
                                    <label for="nroDni_disabled" class="form-label">Número de DNI</label>
                                    <input type="text" class="form-control" id="nroDni_disabled" value="<?php echo htmlspecialchars($persona->getNroDni()); ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo htmlspecialchars($persona->getApellido()); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($persona->getNombre()); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="fechaNac" class="form-label">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id="fechaNac" name="fechaNac" value="<?php echo htmlspecialchars($persona->getFechaNac()); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo htmlspecialchars($persona->getTelefono()); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="domicilio" class="form-label">Domicilio</label>
                                    <input type="text" class="form-control" id="domicilio" name="domicilio" value="<?php echo htmlspecialchars($persona->getDomicilio()); ?>">
                                </div>

                                <button type="submit" class="btn btn-success w-100">Actualizar Datos</button>
                            </form>
                        <?php else: ?>
                            <p class="fs-4 text-danger text-center"><?php echo htmlspecialchars($mensaje); ?></p>
                        <?php endif; ?>
                        <a href="../BuscarPersona.html" class="btn btn-secondary w-100 mt-3">Volver a Buscar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>