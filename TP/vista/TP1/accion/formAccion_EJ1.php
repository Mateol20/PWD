<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <?php
    include_once '../../../util/encapsular.php';
    include_once '../../../control/TP1/vernumero_EJ1.php';
    $datos = obtenerDato();
    $obj = new ComprobarNumero;
    $valor = $obj->comprobar($datos);
    ?>
</head>

<body>

    <h1>Resultado:</h1>
    <p>
        <?php
        echo $valor;

        ?>
        <a href='../EJ_1.php'>Volver al formulario</a>;
</body>

</html>