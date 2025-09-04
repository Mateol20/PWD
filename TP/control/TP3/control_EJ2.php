<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contenido del Archivo</title>
</head>

<body>
    <?php
    if (isset($_FILES['archivo'])) {
        $archivo = $_FILES['archivo'];
        $tipo_mime = $archivo['type'];
        if (
            $tipo_mime === "text/plain"
        ) {
            $ruta_temporal = $archivo['tmp_name'];
            $contenido = file_get_contents($ruta_temporal);
            $contenido = htmlspecialchars($contenido);
        } else {
            $contenido = 'Error: El archivo debe ser de tipo .txt';
        }
    } else {
        $contenido = 'Ocurrió un error al subir el archivo.';
    }

    include '../../vista/TP3/vista_EJ2.php';
    ?>

</body>

</html>