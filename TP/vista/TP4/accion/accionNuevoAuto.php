<?php
require_once '../../../configuracion.php';

$mensaje = "";
$exito = false;
$link_nueva_persona = "";
$datos = data_submitted();

if (isset($datos)) {
    $controladorPersona = new ControladorPersona();
    $controladorAuto = new ControladorAuto();

    $dniDuenio = $datos['dniDuenio'];
    $personaExistente = $controladorPersona->buscarPersonaPorDni($dniDuenio);
    if ($personaExistente) {
        if ($controladorAuto->crearAuto($datos)) {
            $mensaje = "¡El auto ha sido registrado con éxito!";
            $exito = true;
        } else {
            $mensaje = "Error: No se pudo registrar el auto.";
        }
    } else {
        // Si el dueño no existe, mostramos un error y un enlace para crearlo
        $mensaje = "Error: La persona con DNI " . htmlspecialchars($dniDuenio) . " no se encuentra registrada.";
        $link_nueva_persona = "<a href='../NuevaPersona.php' class='btn btn-warning mt-3'>Registrar Nueva Persona</a>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">
                        <h1>Resultado del Registro</h1>
                    </div>
                    <div class="card-body">
                        <p class="fs-4 <?php echo $exito ? 'text-success' : 'text-danger'; ?>">
                            <?php echo htmlspecialchars($mensaje); ?>
                        </p>
                        <?php echo $link_nueva_persona; ?>
                        <a href="../NuevoAuto.php" class="btn btn-primary mt-3">Volver al formulario</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>