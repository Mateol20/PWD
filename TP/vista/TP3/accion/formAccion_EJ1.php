<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista EJ1 -TP3</title>
    <?php
    include_once '../../../util/encapsular.php';
    include_once '../../../control/TP3/control_EJ1.php';
    $datos = obtenerDato();
    $obj = new control_EJ1;
    $mensaje = $obj -> cargarArchivo($datos);
    ?>
</head>

<body>

    <h2>Resultado de la carga</h2>
    <?php echo $mensaje; ?>
    <br>
    <a href='../EJ_1.html'>Volver al formulario</a>


</body>

</html>