<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista EJ3 - TP3</title>
    <?php
    include_once '../../../util/encapsular.php';
    include_once '../../../control/TP3/control_EJ3.php';
    $datos = obtenerDato();
    $obj = new control_Ej3($datos);
    $mensaje = $obj->mostrarCineConImagen();
    ?>
</head>

<body>
    <div class="card">
        <h2>Resultado de la carga</h2>
        <?php
        echo $mensaje;
        ?>
        <br>
        <a href='../../vista/TP3/EJ_3.php'>Volver al formulario</a>
    </div>
</body>

</html>