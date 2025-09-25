<?php
require_once '../../../configuracion.php';

$mensaje = "";
$exito = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controladorPersona = new ControladorPersona();
    $datos = data_submitted();

    if ($controladorPersona->actualizarPersona($datos)) {
        $mensaje = "¡Los datos de la persona han sido actualizados con éxito!";
        $exito = true;
    } else {
        $mensaje = "Error: No se pudieron actualizar los datos de la persona.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Actualización</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">
                        <h1>Resultado de la Actualización</h1>
                    </div>
                    <div class="card-body">
                        <p class="fs-4 <?php echo $exito ? 'text-success' : 'text-danger'; ?>">
                            <?php echo htmlspecialchars($mensaje); ?>
                        </p>
                        <a href="../BuscarPersona.html" class="btn btn-primary mt-3">Volver a Buscar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>