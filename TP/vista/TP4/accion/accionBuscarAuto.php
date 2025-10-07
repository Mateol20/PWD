<?php
require_once '../../../configuracion.php';
$encapsular = data_submitted();
$autoEncontrado = null;
$mensaje = "";
if (isset($encapsular)) {
    $patente = $encapsular['patente'];
    $controlador = new ControladorAuto();


    $autoEncontrado = $controlador->buscarAutoPorPatente($patente);

    if (!$autoEncontrado) {
        $mensaje = "No se encontró ningún auto con la patente: " . $patente;
    }
} else {

    $mensaje = "Error: La solicitud no es válida.";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado de la Búsqueda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .mensaje {
            text-align: center;
            color: red;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Resultado de la Búsqueda</h1>

        <?php if ($autoEncontrado): ?>
            <table>
                <thead>
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Nombre del Dueño</th>
                        <th>Apellido del Dueño</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $autoEncontrado->getPatente(); ?></td>
                        <td><?php echo $autoEncontrado->getMarca(); ?></td>
                        <td><?php echo $autoEncontrado->getModelo(); ?></td>
                        <td><?php echo $autoEncontrado->getNombreDuenio(); ?></td>
                        <td><?php echo $autoEncontrado->getApellidoDuenio(); ?></td>
                    </tr>
                </tbody>
            </table>
        <?php else: ?>
            <p class="mensaje"><?php echo htmlspecialchars($mensaje); ?></p>
        <?php endif; ?>

        <p style="text-align: center; margin-top: 20px;">
            <a href="../buscarAuto.php">Volver al buscador</a>
        </p>
    </div>
 <script src="../../js//cargarFyH.js" defer></script>
</body>

</html>