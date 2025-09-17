<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista EJ2 -TP3</title>
    <?php
    include_once '../../../util/encapsular.php';
    include_once '../../../control/TP3/control_EJ2.php';
    $datos = obtenerDato();
    $obj = new control_EJ2;
    $mensaje = $obj -> archivoTxt($datos);
    ?>
</head>

<body>

    <h2>Resultado de la carga</h2>
    <?php
    echo '<textarea rows="15" cols="80" readonly>';
    echo htmlspecialchars($mensaje);
    echo '</textarea>' . "<br/>";
    ?>
    <br>
    <a href='../EJ_2.html'>Volver al formulario</a>

</body>

</html>