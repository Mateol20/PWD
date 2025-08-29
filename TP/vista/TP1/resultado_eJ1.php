<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <h1>Resultado:</h1>
    <p>
        <?php
        // Obtiene el mensaje del parámetro de la URL
        if (isset($_GET['salida'])) {
            echo htmlspecialchars($_GET['salida']);
        } else {
            echo "No se ha recibido un resultado.";
        }
        ?>
    </p>
    <a href="EJ_1.html">Volver</a>
</body>

</html>