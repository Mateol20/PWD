<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ver Autos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h1>Listado de Autos</h1>

    <?php
    // Incluimos el controlador para obtener la lista de autos.
    require_once '../../configuracion.php';
    require_once '../../control/TP4/controlAuto.php';
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

</body>

</html>