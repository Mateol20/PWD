<?php
require_once '../../../configuracion.php';

$mensaje = "";
$exito = false;
$datos = data_submitted();

if (isset($datos)) {
    $controladorPersona = new ControladorPersona();

    if ($controladorPersona->crearPersona($datos)) {
        $mensaje = "¡La persona ha sido registrada con éxito!";
        $exito = true;
    } else {
        $mensaje = "Error: No se pudo registrar la persona.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado del Registro</title>
    <link rel="stylesheet" href="../../styles/style.css">
</head>

<body>

    <div class="container">
        <h1>Resultado del Registro</h1>
        <p class="mensaje" style="color: <?php echo $exito ? 'green' : 'red'; ?>;">
            <?php echo htmlspecialchars($mensaje); ?>
        </p>

        <p style="text-align: center;">
            <a href="../NuevaPersona.php">Volver al formulario</a>
        </p>
    </div>

</body>

</html>