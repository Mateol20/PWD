<?php
// En tu carpeta Vista, crea el archivo autosPersona.php
require_once '../../../configuracion.php';
$persona = null;
$listaAutos = [];
$mensaje = "";
if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];
    $controladorPersona = new ControladorPersona();
    $controladorAuto = new ControladorAuto();

    // 1. Buscamos a la persona por su DNI
    $persona = $controladorPersona->buscarPersonaPorDni($dni);

    if ($persona) {
        // 2. Si la persona existe, buscamos sus autos
        $listaAutos = $controladorAuto->listarAutos("DniDuenio = '" . $dni . "'");
    } else {
        $mensaje = "No se encontró ninguna persona con el DNI: " . $dni;
    }
} else {
    $mensaje = "Debe proporcionar un DNI para la búsqueda.";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style_tp4.css" />
    <title>Autos de Persona</title>
</head>

<body>

    <div class="container">
        <h1>Detalle de Persona y sus Autos</h1>

        <?php if ($persona): ?>
            <h2>Datos de la Persona</h2>
            <table>
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                        <th>Domicilio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $persona->getNroDni(); ?></td>
                        <td><?php echo $persona->getNombre(); ?></td>
                        <td><?php echo $persona->getApellido(); ?></td>
                        <td><?php echo $persona->getTelefono(); ?></td>
                        <td><?php echo $persona->getDomicilio(); ?></td>
                    </tr>
                </tbody>
            </table>

            <h2>Listado de Autos</h2>
            <?php if (count($listaAutos) > 0): ?>
                <table>
                    <thead>
                        <tr>
                            <th>Patente</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaAutos as $auto): ?>
                            <tr>
                                <td><?php echo $auto->getPatente(); ?></td>
                                <td><?php echo $auto->getMarca(); ?></td>
                                <td><?php echo $auto->getModelo(); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="mensaje">Esta persona no tiene autos asociados.</p>
            <?php endif; ?>

        <?php else: ?>
            <p class="mensaje"><?php echo htmlspecialchars($mensaje); ?></p>
        <?php endif; ?>

        <p style="text-align: center; margin-top: 20px;"><a href="../listaPersonas.php">Volver al listado de personas</a></p>
    </div>
    <script src="../../js/cargarFyH.js"></script>
</body>

</html>