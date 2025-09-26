<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style_tp4.css" />
    <title>Ver Autos</title>
</head>

<body>

    <h1>Listado de Autos</h1>

    <?php
    include_once '../../configuracion.php';
    $controlador = new ControladorAuto();
    $listaAutos = $controlador->listarAutoDuenio();

    if (!empty($listaAutos)) {
        echo "<table>";
        echo "<thead><tr><th>Patente</th><th>Marca</th><th>Modelo</th><th>Nombre Dueño</th><th>Apellido Dueño</th></tr></thead>";
        echo "<tbody>";

        foreach ($listaAutos as $auto) {
            echo "<tr>";
            echo "<td>" . $auto->getPatente() . "</td>";
            echo "<td>" . $auto->getMarca() . "</td>";
            echo "<td>" . $auto->getModelo() . "</td>";
            echo "<td>" . $auto->getObjDuenio()->getNombre() . "</td>";
            echo "<td>" . $auto->getObjDuenio()->getApellido() . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>No se encontraron autos cargados en la base de datos.</p>";
    }

    ?>
    <script src="../js//cargarFyH.js"></script>
</body>

</html>