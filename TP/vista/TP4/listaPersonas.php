<?php
include_once '../../configuracion.php';
$controladorPersona = new ControladorPersona();
$listaPersonas = $controladorPersona->listarPersonas();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style_tp4.css" />
    <title>Lista de Personas</title>
</head>

<body>

    <h1>Listado de Personas</h1>

    <?php if (count($listaPersonas) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Ver Autos</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaPersonas as $persona): ?>
                    <tr>
                        <td><?php echo $persona->getNombre(); ?></td>
                        <td><?php echo $persona->getApellido(); ?></td>
                        <td><?php echo $persona->getNroDni(); ?></td>
                        <td><a href="accion/autosPersona.php?dni=<?php echo $persona->getNroDni(); ?>">Ver Autos</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No se encontraron personas cargadas en la base de datos.</p>
    <?php endif; ?>

</body>

</html>